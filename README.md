SmsAdapter
=========

SmsAdapter is a PHP5 library that provides a Sms providers abstraction layer.


Why use SmsAdapter?
------------------

Imagine you have to send a lot of sms to multiple destination in a PHP project. Lets see how to
take this situation in your advantage using SmsAdapter.

The sms abstraction layer permits you to develop your application without
the need to adapt your code for every sms destination & provide.

Another advantage of this is the possibility to update the provider api
without any impact on the code .
In example, if your project grows up very fast and if your sms provider reaches its
limits, you can easily move to any other provider.

Try it!
-------

### Installation

Development version:

```bash
php composer.phar require aminembarki/smsadapter:0.1.*@dev
```

### Setup your Smsadapter

Following an example with the sms adapter. To setup other adapters, look up the 
Adapters folder

```php
<?php

use Smsadapter\Sms;
use Smsadapter\Adapter\Twilio As TwilioAdapter ;

$sms = new Sms();
$sms->setSmsAdapter(new Twilio());
$sms->authenticate(array('api_key'=>'xxxxxxxxxxx','api_secret'=>'xxxxxxxxxxx'));
$sms->sendMessage('xxxxxxxxxxx','xxxxxxxxxxx',"message sent from sms adapter Twilio Provider ");
```

