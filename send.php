<?php
$yourname = $_POST['yourname'];
$yourmessage = $_POST['yourmessage'];
$youremail = $_POST['youremail'];

$to = 'support@servenus.com';
$subject = 'Callback by Attribut&co';
$message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Name: ' . $yourname . '</p>
                        <p>Message: ' . $yourmessage . '</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
$headers = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
$headers .= "From: " . $yourname . " <" . $youremail . ">\n"; //Наименование и почта отправителя
$headers .= "X-Mailer: PHP/" . phpversion();

If (!mail($to, $subject, $message, $headers)) {
   exit("An error has occured, please report this to the website administrator.\n");
} else {
  //  $sent_mail = true;
  //  file_put_contents("message.txt", " \n Message from <$youremail>" . "\n $yourmessage " . "\n $yourname " . "\n ------------------", FILE_APPEND);
	echo $yourname;
}
?>