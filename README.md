### serverside
```php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    echo "Submit successfully";
    echo "<br>";
    echo "Your username: " . $username;
    echo "<br>" . "Your email: " . $email;

}
```

### HTML form:
```html
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
<form action="index.php" method="post">
    <label>Email: <input type="email" name="email" placeholder="Enter email" required></label>
    <br><br>
    <label>Username: <input type="text" name="username" placeholder="Enter username" required></label>
    <input type="submit" name="submit">
</form>
</body>
</html>
```
