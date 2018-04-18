 <?php

// // require __DIR__ . '/PHPMailer/autoload.php';
//  require('lib/FPDF/fpdf.php');
 // require __DIR__ . '/fpdf181/fpdf.php';
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

// use src\Exception;
// use src\PHPMailer;
// use src\SMTP;

// use PHPMailer\PHPMailer;
// use PHPMailer\Exception;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

//$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

 
    // require 'lib/PHPMailer/PHPMailerAutoload.php';

    //if (isset($_POST["cart-data"])&&


        if(isset($_POST["email"])) {

    // $cart_data = $_POST["cart_data"];
    //     $name = $_POST["name"];
            $email = $_POST["email"];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nirupan119@gmail.com';                 // SMTP username
    $mail->Password = 'PassTest123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; 

                                       // TCP port to connect to

    //Recipients
    $mail->setFrom('nirupan119@gmail.com', 'Beta Invite Signup');

    $mail->smtpConnect(
    array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    )
);


   $mail->addAddress('admin@kuplr.com', 'Admin');
    $mail->addAddress('nirupan@kuplr.com', 'Dev');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('rjuassociates@gmail.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('bas.csv','bay_schedule.csv');
    // $mail->addAttachment('fms.csv','other_schedule.csv');
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Beta Invite Signup';
    $mail->Body      = $email;
    // $mail->msgHTML( '
    //     <html>
    // <head>
    // <body style="border:solid 2px #211f1f;">
    // <title>Meerai Ceramic Collections</title>
    // </head>
    // <body>
    // <h1>The order has been placed by</h1>
    // <table>
    // <tr>
    // <th></th>
    // <th></th>
    // <th></th>
    // <th></th>
    // </tr>
    // <tr>
    // <td><h4> Name: '.$name.'<h4></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td>  </td>
    // </tr>
    
    
    // </table>
    // <table>
    // <tr>
    // <th></th>
    // <th></th>
    // <th></th>
    // <th></th>
    // </tr>
    // <tr>
    // <td><h4> Email: '.$email.' </h4></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td>  </td>
    // </tr>
    
    
    // </table>
    // <table>
    // <tr>
    // <th></th>
    // <th></th>
    // <th></th>
    // <th></th>
    // </tr>
    // <tr>
    // <td><h4> Phone: '.$phone.'</h4></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td>  </td>
    // </tr>
    
    
    // </table>
    // <table>
    // <tr>
    // <th></th>
    // <th></th>
    // <th></th>
    // <th></th>
    // </tr>
    // <tr>
    // <td><h4>Address: '.$address.'</h4></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td>  </td>
    // </tr>
    
    
    // </table>



    // '.$p1H.'
    // '.$p2H.'
    // '.$p3H.'
    // '.$p4H.'
    // '.$p5H.'
    // '.$p6H.'
    // '.$p7H.'
    // '.$p8H.'
    // '.$p9H.'
    // '.$p10H.'
    // '.$p11H.'
    // '.$p12H.'
    // '.$p13H.'


    // <table>
    // <tr>
    // <th></th>
    // <th></th>
    // <th></th>
    // <th></th>
    // <th></th>
    // <th></th>
    // </tr>
    // <tr>
    // <td><h3>Subtotal: </h3></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // <td></td>
    //  <td><div style="margin-left:280%;">$'.$sub.'.00</div> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td>  </td>
    // </tr>
    
    
    // </table>
    // <table>
    // <tr>
    // <th></th>
    // <th></th>
    // <th></th>
    // <th></th>
    // </tr>
    // <tr>    
    // <td><h3>Shipping:  </h3></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // <td></td>
    // <td><div style="margin-left:280%;">$'.$shipping.'.00</div> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td>  </td>
    // </tr>
    
    
    // </table>
    // <table>
    // <tr>
    // <th></th>
    // <th></th>
    // <th></th>
    // <th></th>
    // </tr>
    // <tr>
    // <td><h3>Total: </h3></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // <td></td>
    // <td><div style="margin-left:280%;">$'.$total.'.00</div> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td> </td>
    // </tr>
    // <tr>
    // <td></td>
    // <td></td>
    // <td> </td>
    // <td>  </td>
    // </tr>
    
    
    // </table>


    // </body>
    // </html>');
    // $mail->AltBody = 'Customer Order';



// $mail->Subject   = $subject;
//     $mail->Body      = $body;
//     $mail->AddAddress($emails);
   // $mail->addStringAttachment($pdf->Output("S",'OrderDetails.pdf'), 'OrderDetails.pdf', $encoding = 'base64', $type = 'application/pdf');
    //return $mail->Send();


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


}
else{
    echo 'var not set';
}
?>