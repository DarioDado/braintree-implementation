<?php

//autoloading the packages in the vendor folder

require "vendor/autoload.php";

//setting up braintree credentials

$gateway = new Braintree_Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'use_your_merchant_id',
    'publicKey' => 'use_your_public_key',
    'privateKey' => 'use_your_private_key'
]);