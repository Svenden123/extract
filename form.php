<?php
if(isset($_POST['submit'])) {
$_POST['username'];
$username=$_POST['username'];
$password=$_POST['password'];

echo "Hello " . $username;
echo "Your password is " .$password;

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter Username"> <br>
    <input type="password" name="password" placeholder="Enter Password"> <br>
    <input type="submit" name="submit">
</form>

</body>
</html>