<?php
    require_once("Paypal-PHP-SDK/autoload.php");

    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AV-u8uvnJvy9N35dMvp5lKULXhgz296LXCrsOhVz-NDPQUiTrxgGHZxBLc8_RGgpOJtTHtbvIblG3vh1',     // ClientID
            'ENnWavvwwEW0heNMwVP-G4_zov8Zg5PNvbJBXT88tG_TBRYaxmLQXXkW7Sbq3jvKBaGlkBrLbHXEDIts'      // ClientSecret
        )
    );
?>