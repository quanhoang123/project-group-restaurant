<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if (isset($_POST['sub'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['phone'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'thunguyen.dn2021@gmail.com'; // Gmail address which you want to use as SMTP server
        $mail->Password = 'Alwayssmile24@@'; // Gmail address Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('thunguyen.dn2021@gmail.com'); // Gmail address which you used as SMTP server
        $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Page)';
        $mail->Body = "<h3>Name : $name <br>Email: $email";

        if ($mail->send()) {
            $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
        }
    } catch (Exception $e) {
        $alert = '<div class="alert-error">
                <span>' . $e->getMessage() . '</span>
              </div>';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Send an Email on Form Submission using PHP with PHPMailer</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin:0 auto; float:none;">
                <h3 align="center">Send an Email on Form Submission using PHP with PHPMailer</h3>
                <br />
                <?php echo $error; ?>
                <form method="post">
                    <div class="form-group">
                        <label>Enter Name</label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Enter Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="<?php echo $subject; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Enter Message</label>
                        <textarea name="phone" class="form-control" placeholder="Enter Message"><?php echo $message; ?></textarea>
                    </div>
                    <div class="form-group" align="center">
                        <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>