<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="as1.css">
</head>
<body>

        <div class="form-container">

        <form action="ad1.php" method="post">
            <h3>Register Now</h3>
            <input type="text" name="name" required  placeholder="Enter Your Name">
            <input type="email" name="email" required  placeholder="Enter Your Email">
            <input type="password" name="password" required  placeholder="Enter Your Password">
            <input type="password" name="cpassword" required  placeholder="Enter confirm Your Password">
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p><b>Already have a account?</b> <a href="al1.php">login now</a> or <a href="a1.php">Home Page</a></p>
</form>
</div>

</body>
</html>