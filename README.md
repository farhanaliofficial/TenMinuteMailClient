# TenMinuteMailClient
A simple and easy to use TenMinuteMailClient using PHP by Farhan Ali

# Examples
# Get a new mail
```php
$client = new TenMinuteMailClient();
echo $client->get_new_mail();
```
# Output
```
{
    "data": {
        "email": "fjt00972@omeie.com",
        "session_id": "f0923txpds69c49379q080e1i9"
    },
    "about_me": {
        "author": "Farhan Ali",
        "github": "https:\/\/github.com\/farhanaliofficial"
    }
}
```

# Get list of Received mails
add session_id that is generated from ```$client->get_new_mail();```
```php
$client = new TenMinuteMailClient();
echo $client->get_inbox_mails("f0923txpds69c49379q080e1i9");
```
# Output
```
{
    "data": [
        {
            "mail_id": "K2l47S",
            "from": "Sender Name <sender@mail.com>",
            "to": "fjt00972@omeie.com",
            "subject": "Sended using TenMinuteMailClient",
            "datetime": "2024-03-15 16:32:11",
            "datetime2": "just now",
            "timeago": 21,
            "isread": "0"
        }
    ],
    "about_me": {
        "author": "Farhan Ali",
        "github": "https:\/\/github.com\/farhanaliofficial"
    }
}
```

# Read a Mail
get session_id and mail_id from ```$client->get_new_mail();``` and ```$client->get_inbox_mails($ses);```
```php
$client = new TenMinuteMailClient();
echo $client->read_mail("f0923txpds69c49379q080e1i9", "K2l47S");
```
# Output
```
{
    "data": {
        "from": "Sender Name <sender@mail.com>",
        "gravatar": "https:\/\/www.gravatar.com\/avatar\/73ded1c90bd06487c53e9a0a2b75eb23?s=80&d=mm&r=g",
        "to": "fjt00972@omeie.com",
        "subject": "Sended using TenMinuteMailClient",
        "datetime": "2024-03-15 16:32:11",
        "timestamp": 1710520331,
        "datetime2": "2 minutes ago",
        "urls": [],
        "body": [
            {
                "content": "text\/plain",
                "charset": "",
                "bodylength": 0,
                "body": ""
            },
            {
                "content": "text\/html",
                "charset": "",
                "bodylength": 48,
                "body": "This is easy to use client made by Farhan Ali\n\n\n"
            },
            {
                "content": "text\/html",
                "charset": "",
                "bodylength": 48,
                "body": "This is easy to use client made by Farhan Ali\n\n\n"
            }
        ],
        "attachment": [],
        "header_decode": {
            "subject": "Sended using TenMinuteMailClient",
            "fromstr": "Sender Name <sender@mail.com>",
            "from": [
                {
                    "display": "Sender Name",
                    "address": "<sender@mail.com>",
                    "is_group": false,
                    "name": "Sender Name"
                }
            ],
            "tostr": "fjt00972@omeie.com",
            "to": [
                {
                    "display": "fjt00972@omeie.com",
                    "address": "fjt00972@omeie.com",
                    "is_group": false,
                    "name": "fjt00972@omeie.com"
                }
            ],
            "ccstr": false,
            "cc": [],
            "replytostr": false,
            "replyto": [],
            "date": "Fri, 15 Mar 2024 21:32:07 +0500",
            "list-unsubscribe": {
                "address": [],
                "links": []
            },
            "receivelist": [
                {
                    "display": "fjt00972@omeie.com",
                    "address": "fjt00972@omeie.com",
                    "is_group": false,
                    "name": "fjt00972@omeie.com"
                }
            ],
            "replylist": [
                {
                    "display": "Sender Name",
                    "address": "<sender@mail.com>",
                    "is_group": false,
                    "name": "Sender Name"
                }
            ],
            "receiveaddress": [
                "fjt00972@omeie.com"
            ],
            "replyaddress": [
                "<sender@mail.com>"
            ]
        },
        "plain": [
            ""
        ],
        "plain_link": [
            ""
        ],
        "raw_html": [
            "This is easy to use client made by Farhan Ali\n\n\n",
            "This is easy to use client made by Farhan Ali\n\n\n"
        ],
        "html": [
            "This is easy to use client made by Farhan Ali",
            "This is easy to use client made by Farhan Ali"
        ],
        "html_to_plain": [
            "This is easy to use client made by Farhan Ali",
            "This is easy to use client made by Farhan Ali"
        ]
    },
    "about_me": {
        "author": "Farhan Ali",
        "github": "https:\/\/github.com\/farhanaliofficial"
    }
}
```

# Contribute
Please do it

# Version
1.0.0
