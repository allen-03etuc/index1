<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "rossum_student";

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $student_id = $_POST["student_id"];
  $name       = $_POST["name"];
  $grade      = $_POST["grade_section"];  // fixed name
  $address    = $_POST["address"];
  $contact_no = $_POST["contact_no"];

  if (isset($_POST['register'])) {
    $sql = "INSERT INTO `student_record` (`student_id`, `name`,`grade_section`,`address` ,`contact_no`)
      VALUES ('$student_id', '$name','$grade','$address','$contact_no')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Student Registered Successfully'); window.location.href='try.php';</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } elseif (isset($_POST['update'])) {
    $sql = "UPDATE `student_record` 
            SET `name`='$name', `grade_section`='$grade', `address`='$address', `contact_no`='$contact_no' 
            WHERE `student_id`='$student_id'";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Student Updated Successfully'); window.location.href='try.php';</script>";
    } else {
      echo "Error updating record:" . $conn->error;
    }
  }

  $conn->close();
}
?>