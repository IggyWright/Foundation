<?php
/**
 * Function to localize our site
 * @param $site The Site object
 */
return function(Foundation\Objects\Site $site) {
    // Set the time zone
    date_default_timezone_set('Europe/Dublin');

    $site->setRoot('');

    $site->mailerConfigure(
        $_ENV["MAILER_USERNAME"],
        $_ENV["MAILER_PASSWORD"]
    );
};
