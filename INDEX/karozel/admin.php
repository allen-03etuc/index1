<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "si_db";

$conn = new mysqli(hostname: $host, username: $user, password: $pass, database: $db);

if ($conn->connect_error) {
    die("<div class='error'>Connection failed: " . $conn->connect_error. "</div>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>


</style>
<body>
    <div class="main">
        <h2> ADD PRODUCT</h2>
        <form action="shop.php" method="post">
        <div class="form-container">
            <div class="div-one">
                    <label for="product_id"> product_id: </label> <br>
                    <input type="number" id="product_id" name="product_id" > <br> <br>

                    <label for="product_name"> product_name</label> <br>
                    <input type="text" id="product_name" name="product_name" required> <br> <br>

                         <label for="file-upload" class="custom-file">
            Upload Image</label>
        <input id="file-upload" type="file" name="product_image" hidden /> <br> <br>

                     <label for="price"> price: </label> <br>
                    <input type="number" id="price" name="price" > <br> <br>

                    
                     <label for="stocks"> stocks: </label> <br>
                    <input type="number" id="stocks" name="stocks" > <br> <br>
                    </select>
                    <br> <br>

<div class="table2">
    <table id="tible" border="1">
        <thead>
            <tr>
                <th>Product_id</th>
                <th>product_name</th>
                <th>product_image</th>
                <th>price</th>
                <th>stocks</th>
                
                <input type="submit" name="add" value="Add" id="add"> <br> <br>
                <input type="submit" name="update" value="Update" id="update"> <br> <br>
                <input type="reset" name="clear" id="clear" value="Clear"> <br> <br>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM history";
            $result = $conn->query(query: $sql);

           if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>{$row['product_id']}</td>
                    <td>{$row['product_name']}</td>
                    <td>{$row['product_image']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['stocks']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='21'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
       
        const rows = document.querySelectorAll("table tbody tr");
        const register = document.getElementById("register");
        const update = document.getElementById("update");
        const clear = document.getElementById("clear");
        
        register.disabled=false;
        update.disabled = true;

        document.addEventListener("DOMContentLoaded", function () {

        rows.forEach(row => {
            row.addEventListener("click", function () {
                const cells = this.querySelectorAll("td");

                document.getElementById("product_id").value = cells[0].textContent.trim();
                document.getElementById("product_name").value = cells[1].textContent.trim();
                document.getElementById("product_image").value = cells[2].textContent.trim();
                document.getElementById("price").value = cells[3].textContent.trim();
                document.getElementById("stocks").value = cells[4].textContent.trim();
                register.disabled=true;
                update.disabled = false;
                
                clear.addEventListener("click", function(){
                   register.disabled=false;
                   update.disabled = true;
                });
            });
        });
    });

</script>
</body>
</html>