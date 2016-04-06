<!PHP Coding File>
<html>
<head>
<title>PHP Code</title>
</head>
<body>

    <?php

    echo "<p>Thank you for your Submission! We will contact you shortly!</>";

    $usersName = $_POST['username'];
    $emailAddress = $_POST['mailing'];
    $usersMessage = $_POST['comments'];

    echo $usersName . "</br>"

    ?>

</body>
</html>
