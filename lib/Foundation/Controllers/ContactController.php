<?php

namespace Foundation\Controllers;

use Foundation\Objects\Site;

use PHPMailer\PHPMailer\Exception;

class ContactController
{
    /**
     * LoginController constructor.
     * @param Site $site The Site object
     * @param array $session $_SESSION
     * @param array $post $_POST
     */
    public function __construct(Site $site, array &$session, array $post) {
        $root = $site->getRoot();

        $name = strip_tags($post['name']);
        $email = strip_tags($post['email']);
        $textAreaMessage = strip_tags($post['message']);

        try{
            //send email to Foundation account with message
            $site->sendEmail(
                true,
                $site->getEmailUsername(),
                [$site->getEmailUsername()],
                "[NOTICE] Staff: " . $name . " has reached out through the website!",
                '<p>Name: ' . $name . '</p>
                 <p>Email: ' . $email . ' has contacted you through FoundationIreland.com contact form</p>
                 <p>Message: ' . $textAreaMessage . '</p>'
            );

            //send email to individual to confirm send
            $site->sendEmail(
                true,
                $site->getEmailUsername(),
                [$email],
                "Thank you for contacting Foundation!",
                '<p>This is an automated email to let you know we have recieved your contact message.</p>
                 <p>A staff member will get back with you as soon as possible, and we thank you for reaching out to us!</p>
                 <p>All the best, Foundation</p>'
            );

            //if send email redirect
            $this->redirect = "$root/contact.php?s";

        } catch(Exception $e) {
            echo $e;
            //if couldnt send email redirect
            //$this->redirect = "$root/contact.php?e";
        }
    }

    /**
     * @return mixed
     */
    public function getRedirect()
    {
        return $this->redirect;
    }

    private $redirect;	// Page we will redirect the user to.
}
