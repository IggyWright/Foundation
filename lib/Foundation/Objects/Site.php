<?php

namespace Foundation\Objects;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Site {
    /**
     * @return string get site root directory
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @param string set site root directory
     */
    public function setRoot($root)
    {
        $this->root = $root;
    }

    public function getEmailUsername() {
        return $this->emailUsername;
    }

    /**
    * Configure the mailer
    * @param $username
    * @param $password
    */
    public function mailerConfigure($username, $password) {
        //builds our mailer object
        self::$mailer = new PHPMailer(true);
        self::$mailer->isSMTP();
        self::$mailer->SMTPAuth = true;
        self::$mailer->SMTPSecure = 'ssl';
        self::$mailer->SMTPDebug = 0;
        self::$mailer->Host = 'smtp.zoho.com';
        self::$mailer->Port = '465';

        //set username and password with given params
        self::$mailer->Username = $username;
        $this->emailUsername = $username;

        self::$mailer->Password = $password;
        //self::$emailPassword = $password;
    }

    /**
    * Send an email through the mailer
    * @param $message
    */
    public function sendEmail($isHtml=false, $from, $to, $subject, $message) {
        //if mailer is null see if we can reconnect with user/password
        if(self::$mailer === null) {
            die("Could not send email, mailer not configured properly");

        } else {
            self::$mailer->isHTML($isHtml);
            self::$mailer->SetFrom($from);
            foreach ($to as $addressTo) {
                self::$mailer->AddAddress($addressTo);
            }

            self::$mailer->Subject = $subject;
            self::$mailer->Body = $message;

            if(!self::$mailer->Send()) {
                // echo "Error: " . $mailer->ErrorInfo;
                throw $mailer->ErrorInfo;
            }

            self::$mailer->ClearAllRecipients( ); // clear all who we sent to
        }
    }


    private $root = '';         // Site root
    private static $mailer = null;      // Mailer for email
    private $emailUsername = null;      // username used for mailer
    //private $emailPassword = null;      // password for email mailer
}
