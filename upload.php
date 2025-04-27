<?php
session_start();
// Initialize the products array if it does not exist.
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Upload</title>
  <style>
    /* Basic Reset */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: Arial, sans-serif;
      background: #f6f6f6;
      padding: 20px;
    }
    h2 {
      margin-bottom: 15px;
    }
    /* Form Styling */
    form {
      background: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      margin-bottom: 30px;
      border-radius: 5px;
      max-width: 400px;
    }
    form label {
      display: block;
      margin: 10px 0 5px;
    }
    form input[type="text"],
    form input[type="number"],
    form input[type="file"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
    }
    form input[type="submit"] {
      padding: 10px 20px;
      background: #28a745;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    form input[type="submit"]:hover {
      background: #218838;
    }
    /* Product Cards Container */
    #productList {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    /* Product Card Styling */
    .product {
      background: #fff;
      border: 1px solid #ddd;
      width: 250px;
      padding: 15px;
      border-radius: 5px;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      position: relative;
    }
    .product img {
      max-width: 100%;
      height: auto;
      border-radius: 3px;
    }
    .product h3 {
      font-size: 1.1em;
      margin: 10px 0;
    }
    .product p {
      color: #555;
      margin: 10px 0;
    }
    .actions {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 10px;
    }
    .actions button,
    .actions a {
      padding: 8px 12px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 0.9em;
      text-decoration: none;
      color: #fff;
    }
    .buy-btn {
      background: #007bff;
    }
    .buy-btn:hover {
      background: #0069d9;
    }
    .delete-btn {
      background: #dc3545;
    }
    .delete-btn:hover {
      background: #c82333;
    }
  </style>
</head>
<body>
  <h2>Upload a Product</h2>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="image">Choose Image:</label>
    <input type="file" name="image" id="image" accept="image/*" required>

    <label for="description">Description:</label>
    <input type="text" name="description" id="description" placeholder="Enter product description" required>

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" placeholder="Enter product price" required>

    <input type="submit" value="Upload Product">
  </form>

  <h2>Products</h2>
  <div id="productList">
    <?php foreach ($_SESSION['products'] as $product): ?>
      <div class="product">
        <img src="<?php echo $product['image_path']; ?>" alt="Product Image">
        <h3><?php echo htmlspecialchars($product['description']); ?></h3>
        <p>Price: $<?php echo number_format($product['price'], 2); ?></p>
        <div class="actions">
          <button class="buy-btn" onclick="alert('Buying <?php echo addslashes($product['description']); ?>')">Buy</button>
          
          <a class="delete-btn" href="delete.php?id=<?php echo $product['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $description = $_POST['description'];
    $price = $_POST['price'];

    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

   
    $imageName = time() . '_' . basename($_FILES['image']['name']);
    $targetFile = $uploadDir . $imageName;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        
        if (!isset($_SESSION['next_id'])) {
            $_SESSION['next_id'] = 1;
        }

        
        $product = array(
            'id'          => $_SESSION['next_id']++,
            'image_path'  => $targetFile,
            'description' => $description,
            'price'       => $price
        );
        $_SESSION['products'][] = $product;
    }
}


exit();
?>
