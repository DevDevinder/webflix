<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AWUeS6KDtqFyL_LkgpG0vJKhM8ZnSavZNh1N6QQREAAhqG3Pmte1Ov4f3W42oNKT3Hp0Wbi6Mtdur46h',     // ClientID
        'EN1W7omDJdLtBjA30lJ2nMfau3b5gmRh9YxOIXRlLL124jJXnf7ysgqirQ8dGHg7SHsEnaIOagwl3Ety'      // ClientSecret
    )
);
?>