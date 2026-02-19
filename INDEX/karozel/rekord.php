<!DOCTYPE html>
<html>
<head>
    <title>Student Record Form</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(#dfffdc, #a8f0a5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .box {
            width: 420px;
            background: #eaffea;
            border: 1px solid #888;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }
        .box img {
            width: 80px;
            margin-bottom: 10px;
        }
        .box h2 {
            margin: 10px 0 20px;
        }
        p {
            margin: 15px 0;
            font-size: 16px;
        }
        button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            color: white;
            background: green;
            cursor: pointer;
        }
         input[type="submit"], input[type="reset"] {
            padding: 8px 16px;
            margin: 0 5px;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }
        input[type="submit"] {
            background: rgb(148, 240, 148);
            font-family: cursive;
            colo
        }
        input[type="reset"] {
            background: rgb(255, 10, 10);
            font-family: cursive;
        }
    </style>
</head>
<body>

<div class="box">
    <img src="Lagro_High_School_logo.png">
    <h2>Student Record Form</h2>
   
    <div class="content">
      
      <?php
    $server ="localhost";
    $username="root";
    $password="";
    $dbname="rossum_student";

    $con = mysqli_connect($server, $username, $password, $dbname);
       if(!$con){
        die("connection failed" .mysqli_connect_error());
       }

      

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $student_id = $_POST['student_id'];
            $name  = $_POST['name'];
            $grade_section= $_POST['grade_section'];
            $address   = $_POST['address'];
            $contact_no   = $_POST['contact_no'];

        $sql = "INSERT INTO `student_record` (`student_id`, `name`, `grade_section`, `address`, `contact_no`)
        VALUES ('$student_id',  '$name', '$grade_section' , '$address', '$contact_no')";


        
        }

         if (mysqli_query($con, $sql)){
            echo "the record has been added.";
        } else{
            echo "error: " .$sql."<br>" .mysqli_error($con);
        }
          mysqli_close($con);
        ?>

       <br> <a href="record.html"> <button> Back </button></a> <br>
    </div>
</div>

</body>
</html>