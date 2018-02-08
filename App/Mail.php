<?php

namespace App;

use Mailgun\Mailgun;
use App\Config;

/**
 * Mail
 *
 * PHP version 7.0
 */
class Mail
{
    /**
     * Send a message
     *
     * @param string $to Recipient
     * @param string $subject Subject
     * @param string $text Text-only content of the message
     * @param string $html HTML content of the message
     *
     * @return mixed
     * @throws \Mailgun\Messages\Exceptions\MissingRequiredMIMEParameters
     */
    public static function send($to, $subject, $text, $html)
    {

        $mg = new Mailgun(Config::MAILGUN_API_KEY);
        $domain = Config::MAILGUN_DOMAIN;

        # Make the call to the client.
        $mg->sendMessage("$domain", array('from'    => 'your-sender@example.xom',
                                                       'to'      => $to,
                                                       'subject' => $subject,
                                                       'text'    => $text,
                                                       'html'    => $html));
    }
}

