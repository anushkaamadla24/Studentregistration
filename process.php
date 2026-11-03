<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["fullname"]);
    $usn = htmlspecialchars($_POST["usn"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $course = htmlspecialchars($_POST["course"]);

    echo "<h1>Registration Successful!</h1>";
    echo "<h2>Student Details</h2>";
    echo "USN: " . $usn . "<br><br>";

    echo "Full Name: " . $name . "<br><br>";
    echo "Email: " . $email . "<br><br>";
    echo "Phone Number: " . $phone . "<br><br>";
    echo "Date of Birth: " . $dob . "<br><br>";
    echo "Gender: " . $gender . "<br><br>";
    echo "Course: " . $course . "<br><br>";

} else {
    echo "Please submit the registration form first.";
}
?>