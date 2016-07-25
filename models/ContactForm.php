<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model {

    public $name;
    public $phone;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'phone', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['phone', 'number'],
                // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'name' => 'Nombre',
            'phone' => 'Telefono',
            'email' => 'Correo Electronico',
            'body' => 'Cuerpo de la consulta',
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email) {
        if ($this->validate()) {
//            Yii::$app->mailer->compose()
//                    ->setTo($email)
//                    ->setFrom([$this->email => $this->name])
//                    ->setSubject($this->subject)
//                    ->setTextBody($this->body)
//                    ->send();
            $to = $email; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
            $email_subject = "AIA mensaje recibido de:  $this->name";
            $email_body = "Has recibido un mensaje de AIA Informes.\n\n" . "Detalles:\n\nNombre: $this->name\n\nCorreo: $this->email\n\nTelefono: $this->phone\n\nMensaje:\n$this->body";
            $headers = "From: noreply@aia.com.pe\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
            $headers .= "Reply-To: $this->email";
            mail($to, $email_subject, $email_body, $headers);
            return true;
        }
        return false;
    }

}
