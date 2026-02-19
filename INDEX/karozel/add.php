<?php
$conn = new mysqli("localhost", "root", "", "shops");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT product_id, product_name, price, stocks FROM products");

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Products</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* LAYOUT */
        .admin-container {
            display: flex;
            gap: 30px;
            padding: 20px;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .form-box,
        .table-box {
            background-color: var(--bg-color);
            border-radius: .5rem;
            padding: 2rem;
            flex: 1;
            min-width: 320px;
        }

        /* TABLE */
        .table-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--black);
            text-transform: uppercase;
            text-align: center;
        }

        #productTable {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        #productTable th {
            background-color: #f5f5f5;
            font-size: 1.6rem;
            padding: 1.2rem;
            border-bottom: 2px solid #ddd;
        }

        #productTable td {
            font-size: 1.6rem;
            padding: 1.2rem;
            border-bottom: 1px solid #ddd;
        }

        #productTable tbody tr {
            cursor: pointer;
            transition: background 0.2s ease;
        }

        #productTable tbody tr:hover {
            background-color: #eaeaea;
        }

        /* FIX FORM CENTERING */
        .admin-container .add-product-form {
            margin: 0;
            max-width: 100%;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .admin-container {
                flex-direction: column;
            }
        }

        #img{
            height: 100%;
            width: 100%;
        }

        header{
            background-color: #ddd;
            height: 50px;
            text-align: center;
            font-size: large;
        }
    </style>
</head>

<body>

<header>
    
    <nav> <h1> ADMIN PAGE</h1></nav>
</header>

<div class="admin-container">

    
    <div class="form-box">
        <form action="upload.php" method="POST" class="add-product-form" enctype="multipart/form-data" id="productForm">

            <h3 id="formTitle">Add a New Product</h3>

            
            <input type="hidden" name="product_id" id="product_id">

            <input type="text" name="product_name" id="product_name" placeholder="Enter product name" class="box" required>

           
            <label for="file-upload" class="custom-file">Upload Image</label>
            <input id="file-upload" type="file" name="product_image" accept="image/*">

            <input type="number" name="price" id="price" placeholder="Price" class="box" required>
            <input type="number" name="stocks" id="stocks" placeholder="Stocks" class="box" required>

            <input type="submit" value="Add The Product" name="add_product" class="btn">
        </form>
    </div>


    <div class="table-box">
        <h3 class="table-title">Product List</h3>

        <table id="productTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stocks</th>
                    <th> Image</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr
                        data-id="<?= $row['product_id']; ?>"
                        data-name="<?= htmlspecialchars($row['product_name']); ?>"
                        data-price="<?= $row['price']; ?>"
                        data-stocks="<?= $row['stocks']; ?>"
                    >
                        <td><?= $row['product_name']; ?></td>
                        <td><?= $row['price']; ?></td>
                        <td><?= $row['stocks']; ?></td>
                        <td> <img src="show.php?id=<?php echo $row["product_id"]; ?>" alt="" id="img"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

<script>
document.querySelectorAll('#productTable tbody tr').forEach(row => {
    row.addEventListener('click', () => {
        document.getElementById('product_id').value = row.dataset.id;
        document.getElementById('product_name').value = row.dataset.name;
        document.getElementById('price').value = row.dataset.price;
        document.getElementById('stocks').value = row.dataset.stocks;

        document.getElementById('formTitle').innerText = "Update Product";
        document.querySelector('.btn').value = "Update Product";
    });
});
</script>

</body>
</html>
