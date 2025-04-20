<!DOCTYPE html>
<html>
<head>
  <title>Simple Add to Cart</title>
  <style>
    .product { margin: 20px; padding: 10px; border: 1px solid #ccc; }
    .btn { padding: 6px 12px; background: blue; color: white; border: none; cursor: pointer; }
    #formContainer { display: none; margin-top: 20px; }
  </style>
</head>
<body>

<h2>Add to Cart</h2>

<div class="product">
  <h3>Book</h3>
  <button class="btn" onclick="addToCart('Book')">Add to Cart</button>
</div>

<div class="product">
  <h3>Headphones</h3>
  <button class="btn" onclick="addToCart('Headphones')">Add to Cart</button>
</div>

<div id="formContainer">
  <h3>Sign Up & Place Order</h3>
  <form method="POST" action="submit.php">
  <input type="hidden" name="product" id="productInput">
  <input type="text" name="name" placeholder="Your Name" required><br><br>
  <input type="email" name="email" placeholder="Your Email" required><br><br>
  <input type="password" name="password" placeholder="Your Password" required><br><br>
  <button type="submit" class="btn">Place Order</button>
</form>

</div>

<script>
  function addToCart(product) {
    document.getElementById("productInput").value = product;
    document.getElementById("formContainer").style.display = "block";
  }
</script>

</body>
</html>
