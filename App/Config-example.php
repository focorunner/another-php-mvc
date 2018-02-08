<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{


    /**
     * Database host
     * @var string
     */
    const DB_HOST = '_YOUR_DB_HOST'; // DB server

    /**
     * Database name
     * @var string
     */
    const DB_NAME = '_YOUR_DB_NAME';

    /**
     * Database user
     * @var string
     */
    const DB_USER = '_YOUR_DB_USER_';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '_YOUR_DB_USER_PASSWORD_';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * Secret key for hashing
     * @var boolean
     */
    const SECRET_KEY = '_SECRET_KEY_';

    /**
     * Mailgun API key
     * @var string
     */
    const MAILGUN_API_KEY = '_MAILGUN_API_KEY_';

    /**
     * Mailgun domain
     * @var string
     */
    const MAILGUN_DOMAIN = '_MAILGUN_DOMAIN_';
}
