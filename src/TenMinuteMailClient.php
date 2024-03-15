<?php

# Coded by Farhan Ali
# i.farhanali.dev@gmail.com
# client for 10minutemail.net
# receive emails, read emails, for 10 minutes
class TenMinuteMailClient{
	// session id for mail
	private $session_id;
	
	// time for mail
	private $time;
	
	// 10minute HOST
	private $HOST;
	
	// copyright :)
	private $copyright;

	function __construct(){
		$this->session_id = generate_session_id();
		$this->time = generate_timestamp();
		$this->HOST = "https://10minutemail.net";
		$this->copyright = ["author" => "Farhan Ali", "github" => "https://github.com/farhanaliofficial"];

	}
	
	// generate new email
	public function get_new_mail(){
		$resp = http_get(sprintf("%s/address.api.php?new=1&sessionid=%s&_=%d", $this->HOST, $this->session_id, $this->time));
		$res = json_decode($resp, true);
		$mail = $res["permalink"]["mail"];
		return json_encode(["data" => ["email" => $mail, "session_id" => $this->session_id], "about_me"=>$this->copyright], JSON_PRETTY_PRINT);
	}
	
	// get received mails list
	public function get_inbox_mails($ses){
		$resp = http_get(sprintf("%s/address.api.php?&sessionid=%s&_=%d", $this->HOST, $ses, $this->time));
		$res = json_decode($resp, true);
		
		$mails = $res["mail_list"];
		$filtered = [];
		
		// filter out the welcome mail from 10minutemail.net
		foreach($mails as $mail){
			// add to filtered if it is not welcome mail
			if($mail["mail_id"] !== "welcome")
				$filtered[] = $mail;
		}

		return json_encode(array("data" => $filtered, "about_me"=>$this->copyright), JSON_PRETTY_PRINT);
	}

	// read a received mail by mail_id and session id
	public function read_mail($ses, $id){
		$resp = http_get(sprintf("%s/mail.api.php?mailid=%s&sessionid=%s", $this->HOST, $id, $ses));
		$res = json_decode($resp, true);

		return json_encode(["data" => $res, "about_me"=>$this->copyright], JSON_PRETTY_PRINT);
	}
}
