<?php


   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;

   require 'includes\Exception.php';
   require 'includes\PHPMailer.php';
   require 'includes\SMTP.php';


   $mail = new PHPMailer(true);

    //Server settings

    // $title = $_POST['title'];
    $name = $_POST['name'];
    // $country = $_POST['country'];
    $Email = $_POST['email'];
    // $phone = $_POST['phone'];
    // $org = $_POST['org'];
    // $category = $_POST['category'];
    $ContentSubject = ($_POST['subject']);
    $Comments = ($_POST['comments']);
    // $address =(!$_POST['address']) ? ("Empty") : ($_POST['address']) ;

      //$mail->SMTPDebug = 2;                                      // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'shared.vvebhost.com';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'info@icetd.it';                     // SMTP username
      $mail->Password   = '}DD[bQ}!(@,o';                               // SMTP password
      $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to
      $mail->Subject    = "test email using php mailer";

      //Recipients
      // info@icetd.it
      $mail->setFrom($Email);
      // $mail->Body    = "<h3>
      // Title : $title <br> Name : $name <br> Surname: $surname <br> Country : $country <br> Email: $Email <br> Phone: $phone <br>
      // Org: $org <br> Category: $category  <br> Adress: $address
      // </h3>";

      $mail->Body    = "<h3>
      Name : $name <br> Email: $Email <br> Subject: $ContentSubject <br> Comments: $Comments
      </h3>";


      //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

      $mail->addAddress('m32usman12@gmail.com');     // Add a recipient
      //$mail->addAddress('ellen@example.com');               // Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      // Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment($_FILES['uploadfile']['tmp_name'], $_FILES['uploadfile']['name']);    // Optional name

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Here is the subject';
     // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      
     
     if($mail->send()){
      echo  '<div class="alert-success"
      style="
      width: 100%;
      display: flex;
      flex-direction: column;
      "
      >
      <div style="color:Blue; text-align: center; font-size: x-large;">
      Message Sent! ThankYou For Contacting Us. </div> 
      <div style="
      text-align: center;
      display:inline-block;
      border: 1px solid red;
      padding: 14px 30px;
      border-radius: 3px;
      margin: auto;
      
      margin-top: 40px !important;">
      <a href="index.html"
      style="text-decoration: none;
      color: black;"
      >Browse Back</a>
      </div>
      </div>';
        //echo 'Message has been sent';
     } else {
      echo "Error";
     }
     $mail->smtpClose();
?>