<?php
    // Message vars
    $msg = '';
    $msgClass = '';


    // Check for submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check required fields
        if(!empty($email) && !empty($name) && !empty($message)){
            //Passed
            //Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
                $msg = 'Please insert a correct email adress';
                $msgClass = 'alert-danger';
            }else{
                //passed
                $toEmail = 'support@traversymedia.com';
                $subject = 'Contact Request From'.$name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
                ';
                //Email Headers
                $headers = "MINE-Version: 1.0"."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "
                \r\n";

                // Additional Headers
                $headers .= "From: ". $name. "<".$email. ">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    // Email Sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-succes';
                }else{
                    $msg = 'Your email was NOT sent';
                    $msgClass = 'alert-danger';
                }
            }
        }else{
            // Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
            <div class="navbar-brand" href="index.php">My Website</div>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php  if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <input type="text" name="message" class="form-control" value="<?php echo isset($_POST['message']) ? $message : ''; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>