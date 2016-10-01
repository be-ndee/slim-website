<?php

namespace BN\API;

use BN\DTO\ContactMessage;

use \Slim;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Andreas Bissinger
 */
class Contact extends AbstractAPI
{
    public function register(Slim\App $app)
    {
        $app->post("/contact", function (ServerRequestInterface $request, ResponseInterface $response) {
            $data = $request->getParsedBody();

            $contactMessage = new ContactMessage(
                filter_var($data["eMail"], FILTER_SANITIZE_EMAIL),
                filter_var($data["subject"], FILTER_SANITIZE_STRING),
                $data["type"],
                filter_var($data["message"], FILTER_SANITIZE_STRING)
            );

            return $response;
        });
    }
}
