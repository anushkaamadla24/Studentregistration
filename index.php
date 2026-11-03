<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Student Registration Form</h1>
    <form name="registrationForm" action="process.php" method="POST" onsubmit="return validateForm()">
        <label>Full Name:</label>
        <input type="text" name="fullname" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>
        
        <label>USN:</label>
        <input type="text" name="usn" pattern="[0-9]{1}[A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}" placeholder="     " required>
        <br><br>

        <label>Phone Number:</label>
        <input type="tel" name="phone" required>
        <br><br>

        <label>Date of Birth:</label>
        <input type="date" name="dob" required>
        <br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Female" required> Female
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Other"> Other
        <br><br>

        <label>Course:</label>
        <select name="course" required>
            <option value="">Select Course</option>
            <option value="CSE">Computer Science</option>
            <option value="ECE">Electronics</option>
            <option value="ISE">Information Science</option>
        </select>
        <br><br>

        <button type="submit">Submit Registration</button>

    </form>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function(){
    $("h1").css("letter-spacing", "1px");
});
</script>
<script src="script.js"></script>
</body>
</html>