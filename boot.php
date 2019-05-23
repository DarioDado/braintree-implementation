<?php

//autoloading the packages in the vendor folder
require "vendor/autoload.php";

//setting up braintree credentials

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('use_your_merchant_id');
Braintree_Configuration::publicKey('use_your_public_key');
Braintree_Configuration::privateKey('use_your_private_key');