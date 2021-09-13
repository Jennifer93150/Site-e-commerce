<?php

namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;


class Mail
{
    private $api_key = 'f952de28924584ce9b168df477c00bf9';
    private $api_key_secret = '6c15619ae8139775586e666e68355729';

    public function send($to_email, $to_name, $subject, $content){
    #                     remplacer par $this->$api_key, $this->$api_key_secret
    # new \Mailjet\Client(getenv('MJ_APIKEY_PUBLIC'), getenv('MJ_APIKEY_PRIVATE'),true,['version' => 'v3.1']);
    # On instancie l'objet Mailjet 
    $mj = new Client($this->api_key, $this->api_key_secret, true,['version' => 'v3.1']);
    # On créer le corps du mail
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "modesty.commerce@gmail.com",
                        'Name' => "Koababi"
                    ],
                    'To' => [
                        [
                            'Email' => $to_email,# adresse mail à qui l'email est envoyé
                            'Name' => $to_name # nom à qui email est envoyé
                        ]
                    ],
                    'TemplateID' => 3149021, # id du modèle
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'Variables' => [
                        'content' => $content
                    ]
                ]
            ]
        ];
        # On lui passe a $mj post pr qu'il l'envoi 
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        # On regarde la reponse
        $response->success();
    }
}
#