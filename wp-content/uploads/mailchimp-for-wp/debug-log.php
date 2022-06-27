<?php exit; ?>
[2020-10-04 16:17:14] ERROR: Form 559 > Mailchimp API error: 400 Bad Request. Invalid Resource. test******@te**.org has signed up to a lot of lists very recently; we're not allowing more signups for now

Request: 
PATCH https://us17.api.mailchimp.com/3.0/lists/c61cc917fc/members/531cdba6e6803dc48ec1a59100c47708

{"status":"pending","email_address":"test******@te**.org","interests":{},"merge_fields":{"FNAME":"John","LNAME":"Doe"},"email_type":"html","ip_signup":"83.249.211.192","tags":[]}

Response: 
400 Bad Request
{"type":"http://developer.mailchimp.com/documentation/mailchimp/guides/error-glossary/","title":"Invalid Resource","status":400,"detail":"test******@te**.org has signed up to a lot of lists very recently; we're not allowing more signups for now","instance":"5582150e-0ea0-43f5-a6cf-cece84be5e76"}
[2020-10-04 16:20:27] ERROR: Form 559 > Mailchimp API error: 400 Bad Request. Invalid Resource. test@em***.com looks fake or invalid, please enter a real email address.

Request: 
POST https://us17.api.mailchimp.com/3.0/lists/c61cc917fc/members

{"status":"pending","email_address":"test@em***.com","interests":{},"merge_fields":{"FNAME":"Test","LNAME":"#2"},"email_type":"html","ip_signup":"83.249.211.192","tags":[]}

Response: 
400 Bad Request
{"type":"http://developer.mailchimp.com/documentation/mailchimp/guides/error-glossary/","title":"Invalid Resource","status":400,"detail":"test@em***.com looks fake or invalid, please enter a real email address.","instance":"380db78d-9c14-4d58-9014-b21e9efea48d"}
[2020-12-31 12:58:46] ERROR: Form 559 > Mailchimp API error: 400 Bad Request. Member Exists. fred*************@ta*****.com is already a list member. Use PUT to insert or update list members.

Request: 
POST https://us17.api.mailchimp.com/3.0/lists/c61cc917fc/members

{"status":"pending","email_address":"fred*************@ta*****.com","interests":{},"merge_fields":{"FNAME":"Fredrik","LNAME":"Martini Andersson"},"email_type":"html","ip_signup":"81.225.110.135","tags":[]}

Response: 
400 Bad Request
{"type":"http://developer.mailchimp.com/documentation/mailchimp/guides/error-glossary/","title":"Member Exists","status":400,"detail":"fred*************@ta*****.com is already a list member. Use PUT to insert or update list members.","instance":"d595f5a7-31db-424e-8472-b539ca45428f"}
