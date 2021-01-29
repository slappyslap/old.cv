<?php
    $ipUnlisted = shell_exec('fail2ban-client status sshd');
    echo $ipUnlisted;
    $ips = explode(' ', $ipUnlisted);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php

        foreach ($ips as $ip){
            echo '<li>'.$ip.'</li>';
        }

        ?>
    </ul>
</body>
</html>
