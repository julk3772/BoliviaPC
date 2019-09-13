<?php


require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost/BoliviaPC-master');

$apiContext = new \PayPal\Rest\ApiContext(
      new \PayPal\Auth\OAuthTokenCredential(
          'AegPAZbd2cutCIC_cwhJSp18dTIX5s66cjvoSMBPuHK4Yo6BTKsSc4ozNHF9GS_WAA0s3Bot7lO4hDIG',  // ClienteID
          'EDPrmsIPxBFvWPXStg4fNsZVmoa757bN6sEaArt9rc1fw-ndPuXKolE6fmkQkq1pVj0Vz5oFq7P5x0su'  // Secret
      )
);

