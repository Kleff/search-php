<?php 
    session_start();

    print_r($_SESSION);

    $name = $_SESSION['name'] ?? 'Guest';
    $email = $_SESSION['email'] ?? 'Not subscribed';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
    <?php if($email === 'Not subscribed'):  ?>
    <h3> No subscribida</h3>
    <?php endif; ?>
</body>
</html>