<?php

namespace BN\DTO;

/**
 * @author Andreas Bissinger
 */
class ContactMessage
{
    private $eMail;
    private $subject;
    private $type;
    private $message;

    public function __construct($eMail, $subject, $type, $message)
    {
        $this->eMail = $eMail;
        $this->subject = $subject;
        $this->type = $type;
        $this->message = $message;
    }
}
