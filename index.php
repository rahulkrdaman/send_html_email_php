<?php
$to = 'user@example.com';
$from = 'sender@example.com';
$fromName = 'SenderName';

$subject = "Send HTML Email in PHP by CodexWorld";

$htmlContent = '
    <html>
    <head>
        <title>Welcome to CodexWorld</title>
    </head>
    <body>
        <h1>Thanks you for joining with us!</h1>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;">
            <tr>
                <th>Name:</th><td>CodexWorld</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email:</th><td>contact@codexworld.com</td>
            </tr>
            <tr>
                <th>Website:</th><td><a href="http://www.codexworld.com">www.codexworld.com</a></td>
            </tr>
        </table>
    </body>
    </html>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
$headers .= 'Cc: welcome@example.com' . "\r\n";
$headers .= 'Bcc: welcome2@example.com' . "\r\n";

// Send email
if(mail($to, $subject, $htmlContent, $headers)){
    echo 'Email has sent successfully.';
}else{
   echo 'Email sending failed.';
}



############################# Send email with HTML file content ####################################

$to = 'InsertYourEmailAddress';
$from = 'sender@example.com';
$fromName = 'SenderName';

$subject = "Send HTML Email in PHP by CodexWorld";

// Get HTML contents from file
$htmlContent = file_get_contents("email_template.html");

// Set content-type for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";

// Send email
if(mail($to, $subject, $htmlContent, $headers)){
    echo 'Email has sent successfully.';
}else{
   echo 'Email sending failed.';
}
?>