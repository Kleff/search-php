<?php include 'server_info.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>System Info</title>
</head>
<body>
    <div class="container">
        <h1>Server & File Info</h1>
        <ul class="list-group">
            <?php foreach($server as $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key; ?>: </strong>
                    <?php echo $value; ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <h1 class="mt-5">Clien Info</h1>
        <ul class="list-group">
            <?php foreach($client as $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key; ?>: </strong>
                    <?php echo $value; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    
</body>
</html>