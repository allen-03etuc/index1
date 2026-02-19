<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $product_id   = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price        = $_POST['price'];
    $stocks       = $_POST['stocks'];
    $product_image = $_POST['product_image'];

    if (!isset($_FILES['product_image']) || $_FILES['product_image']['error'] !== 0) {
        die("Image upload failed.");
    }

    $imagedata = file_get_contents($_FILES['product_image']['tmp_name']);

    $sql = "INSERT INTO products 
            (product_id, product_name, price, stocks, product_image) 
            VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isiis", $product_id, $product_name, $price, $stocks, $imagedata);

    // Send blob data
    $stmt->send_long_data(4, $imagedata);

    if ($stmt->execute()) {
        echo "<script>alert('Successful'); window.location.href='add.php'</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
    