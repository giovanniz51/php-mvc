<?php


namespace App\Controllers;


use App\Classes\Mail;

class IndexController extends BaseController
{
    public function show(){
        echo "in homepage from controller class";

        $mail = new Mail();

        $data = [
            "to" => "giannizito@msn.com",
            "subject" => "Welcome to Acme Store",
            "view" => "welcome",
            "name" => "Giovanni Zito",
            "body" => "Testing Email"
        ];

        if($mail->send($data)){
            echo " Email send successfully";
        }else {
            echo " Sending failed";
        }
    }
}