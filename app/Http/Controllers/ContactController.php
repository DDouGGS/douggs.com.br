<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DouggsEmail;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

class ContactController extends Controller
{
    public function telegram()
    {
        $send = false;
        if($this->sentPhpMailer($_POST['name'], $_POST['email'], $_POST['message'])){
            $send = true;
        }
        return view('contact', array('send' => true));
    }

    private function sentPhpMailer(string $name, string $email, string $message)
    {
        if(empty($name) || empty($email)){
            return true;
        }
        // phpmailer
        $mail = new PHPMailer;
        try{
            // Configuração SMTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.hostinger.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'mail@douggs.com.br';
            $mail->Password   = 'Ds@468677';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            // Configurações do e-mail
            $mail->setFrom('mail@douggs.com.br', 'Douggs TI');
            $mail->addAddress('mail@douggs.com.br');
            $mail->Subject = 'Contato do Blog - DougGS TI';
            $mail->Body    = sprintf(
                "Nome: %s; \nE-mail: %s; \nMensagem: %s", $name, $email, $message);
            if (!$mail->send()) {
                throw new \Exception('Mailer Error:'. $mail->ErrorInfo);
            }
        }catch(\Exception $e){
            throw new \Exception($e);
        }
        return true;
    }
}
