<?php

use App\Providers\RouteServiceProvider;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
require '../vendor/autoload.php';

$name = $phone = $email = $messageBody = '';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['message'])) {
    $messageBody = $_POST['message'];
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'ssl://smtp.yandex.ru';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'npo.roscom05@yandex.ru';                     //SMTP username
    $mail->Password = 'RoscoM05';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('npo.roscom05@yandex.ru', $name);
    $mail->addAddress('npo.roscom05@yandex.ru');     //Add a recipient

    //Content
    $mail->isHTML(true);
    if ($email !== '') {
        $mail->Subject = 'Обратная связь';
    } elseif ($phone !== '') {
        $mail->Subject = 'Заказать экспертизу';
    }
    //Set email format to HTML
    $message = "Имя: " . $name . "<br>";//присвоить переменной значение, полученное из формы name=name
    $message .= "E-mail: " . $email . "<br>"; //полученное из формы name=email
    $message .= "Номер телефона: " . $phone . "<br>"; //полученное из формы name=phone
    $message .= "Сообщение: " . $messageBody . "<br>"; //полученное из формы name=message
    $mail->Body = $message;

    $mail->send();

    echo "<script>
             alert('message sent succesfully');
             window.history.go(-1);
     </script>";
} catch (Exception $e) {
    echo "<script>
             alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
             window.history.go(-1);
     </script>";
}

?>
