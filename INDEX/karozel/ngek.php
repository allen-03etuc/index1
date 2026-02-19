<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $product_id   = intval($_POST["product_id"]);
    $product_name = $_POST["product_name"];
    $price        = floatval($_POST["price"]);
    $total_order  = intval($_POST["total_order"]);
    $total_price  = floatval($_POST["total_price"]);
    $cname = $_POST["cname"];
     $contact = $_POST["contact"];
      $addy = $_POST["addy"];


    // Get current stock
    $sql_stock = "SELECT stocks FROM products WHERE product_id = ?";
    $stmt = mysqli_prepare($conn, $sql_stock);
    mysqli_stmt_bind_param($stmt, "i", $product_id);
    mysqli_stmt_execute($stmt);
    $result_stock = mysqli_stmt_get_result($stmt);
    $row_stock = mysqli_fetch_assoc($result_stock);

    if (!$row_stock) {
        $message = "Product not found!";
    } else {

        $current_stock = intval($row_stock["stocks"]);

        // Check stock availability
        if ($total_order > $current_stock || $total_order <= 0) {

            $message = "Order exceeds available stock! Only $current_stock left.";

        } else {

            // Insert order
            $sql_insert = "INSERT INTO history 
                (product_id, product_name, price, total_order, total_price, cname, contact, addy)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt2 = mysqli_prepare($conn, $sql_insert);
            mysqli_stmt_bind_param(
                $stmt2,
                "isdidsss",
                $product_id,
                $product_name,
                $price,
                $total_order,
                $total_price,
                $cname,
                $contact,
                $addy
        
            );

            if (mysqli_stmt_execute($stmt2)) {

                // Update stock (FIXED)
                $sql_update = "UPDATE products 
                               SET stocks = stocks - ? 
                               WHERE product_id = ?";

                $stmt3 = mysqli_prepare($conn, $sql_update);
                mysqli_stmt_bind_param($stmt3, "ii", $total_order, $product_id);
                mysqli_stmt_execute($stmt3);

                $message = "Order Placed Successfully!";
            } else {
                $message = "Order failed!";
            }
        }
    }
}
?>

<?php if (isset($message)) : ?>
<script>
    alert("<?php echo $message; ?>");
    window.location.href = "gana.php";
</script>
<?php endif; ?>