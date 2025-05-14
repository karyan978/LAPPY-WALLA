<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="lappy.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>     
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background: #f5f5f5;
  padding: 20px;
}

.cart {
  max-width: 500px;
  margin: auto;
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.cart h2 {
  margin-bottom: 20px;
  border-bottom: 2px solid #eee;
  padding-bottom: 10px;
}

.cart-item {
  display: flex;
  gap: 15px;
  padding: 10px 0;
  border-bottom: 1px solid #ddd;
}

.cart-item img {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 8px;
}

.item-details h4 {
  margin: 0 0 5px;
}

.cart-total {
  text-align: right;
  padding-top: 15px;
  font-size: 18px;
}

      .inquary-box{
            width: 100%;
            border:1px solid green;
            
        }

        .navbar{
            
            width: 100%;
             background: #292560;
            z-index: 1;
            position: sticky; 
          
        }
        .navbar a:hover{
          color:white;
        }
        
        
      
        .submit{
            background-color: #292560;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .email{
          border:1px solid #292560;
        }
        .whatsapp{
          position: fixed;
          bottom:2px;
          left:20px;
          z-index: 9;
        }
        #hp-box{
    
    background-color: whitesmoke;

  }
  #hp-box:hover{
    box-shadow: 4px 6px 8px gray;
    transition:2s;

  }
    
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar pt-3 py-3">
        <div class="container-fluid">
          <a class="navbar-brand " href="index.php" style="color:whitesmoke;font-weight: 700;"><i class="fa-solid fa-left-long"></i> Continue Shopping</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars" style="color:white"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
    
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="">Dell</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#">Hp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#">Apple</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#">Acer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" href="#">Asus</a>
              </li>
              <li>
                <a href=""><i class="fa-solid fa-magnifying-glass mt-3 px-3"></i></a>
              </li>
              <li><a href="show_cart.php"><i class="fa-solid fa-cart-shopping mt-3"></i></a></li>
              
          </div>
        </div>
      </nav>

      <div class="cart">
    <h2>Your Shopping Cart</h2>

    <?php
    $grandTotal = 0;

    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $price = floatval($item['price']);
            $qty = intval($item['qty']);
            $total = $price * $qty;
            $grandTotal += $total;

            echo '<div class="cart-item">';
            echo '  <img src="' . htmlspecialchars($item['image'] ?? 'https://via.placeholder.com/80') . '" alt="' . htmlspecialchars($item['name']) . '">';
            echo '  <div class="item-details">';
            echo '    <h4>' . htmlspecialchars($item['name']) . '</h4>';
            echo '    <p>Price: ₹' . number_format($price, 2) . '</p>';
            echo '    <p>Quantity: ' . $qty . '</p>';
            echo '    <p>Total: ₹' . number_format($total, 2) . '</p>';
            echo '  </div>';
            echo '</div>';
        }

        echo '<div class="cart-total"><strong>Grand Total: ₹' . number_format($grandTotal, 2) . '</strong></div>';
    } else {
        echo '<p>Your cart is empty.</p>';
    }
    ?>
  </div>
</body>
</html>