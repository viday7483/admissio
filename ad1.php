<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>College Admission Form</title>
<link rel="stylesheet" href="as1.css">
</head>
<body>
    <div class="form-container">

<form action="s.php" method="POST">
<h3>Admission Form</h3>
<i class="fas fa-user"></i>
<input type="text" id="fullname" name="fullname" required placeholder="Enter Your Full Name"><br><br>
<input type="email" id="email" name="email" required placeholder="Enter Your Email"><br><br>
<input type="tel" id="phone" name="phone" required placeholder="Enter Your Phone Number"><br><br>
<select id="course" name="course" >
<option value="Select course">Select Your Course</option>
<option value="Computer Science">Computer Science</option>
<option value="Engineering">Engineering</option>
<option value="BA">BA</option>
<option value="BCOM">BCOM</option>
<option value="Medicine">Medicine</option>
<!-- Add more options as needed -->
</select><br><br>
            <input type="submit" name="submit" class="form-btn">
          
</form>
    </div>
</body>
</html>
