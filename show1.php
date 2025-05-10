<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);
                }

                .navbar-brand {
    font-size: 35px;
    font-weight: 900;
    color: #ffff !important;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin-left: 70px;
    text-shadow: 0 0 5px #ffffff;
}
.nav-link.active{
    font-size: 20px;
    font-weight: 800;
    margin-left: 500px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: #ffff !important;
    text-shadow: 0 0 5px #ffffff;
}
.nav-link{
    font-size: 20px;
    font-weight: 800;
    margin-left: 20px;
    margin-right: 10px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: #ffff !important;
    text-shadow: 0 0 10px #ffffff;
}
span{
    font-size: 18px;
    font-weight: 700;
    color: #ffff;
}       

.footer-section{
    height: auto;
    width: 100%;
    background: linear-gradient(to top, #333 80%, #333 50%, #eee 75%, #333 75%);
    color: #fff;
    display: flex;
   
    align-items: center;
    flex-direction: column;
    margin-top: 50px;
}
.footer-section a{
    text-decoration: none;
    color: #fff;
}
.footer-section a:hover{
    color: #ff8e04da;
}
.footer-section ul li{
    /* text-decoration: none !important; */
    list-style: none;
    line-height: 30px;
}
.footer-section span{
    line-height: 30px;
    color: lightcyan;
}
    </style>
</head>
<body>

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <div class="container-fluid top-fixed">
          <a class="navbar-brand" href="#">Lappy Wala</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">shop</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Dell</a>
            </li></li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hp</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="#">Apple</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#">Ace</a>
              </li>   
              <li class="nav-item">
                <a class="nav-link" href="#">Asus</a>
              </li> 
        
              
              
            <form class="d-flex">
              <!-- <i class="fa-solid fa-magnifying-glass mt-2 "></i> -->
              <!-- <i class="fa-solid fa-cart-plus mt-2 "></i> -->
              <button id="modeToggle" class="btn btn-light ms-3">🌙</button>
                            
            </form>
          </div>
        </div>
      </nav>

<div class="container mt-5">
    <div class="row">
        <?php
        include "connection.php";
        $ids = $_GET['id'];
        $select = "SELECT * FROM `record_1` WHERE `id`='$ids'";
        $query = mysqli_query($con,$select);
        $row = mysqli_num_rows($query);
        while($mn=mysqli_fetch_assoc($query)){
        ?>
        <div class="col-6">
            <div class="card" style="background-color:gray; padding:30px;">
              <img style="height:400px;" src="upload/<?php echo $mn['file1'];?>" alt="" class="img-fluid rounded">
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="card p-3">
                        <img src="upload/<?php echo $mn['file2'];?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-6">
                    <div class="card p-3">
                        <img src="upload/<?php echo $mn['file3'];?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 offset-1 mt-5">
            <h3><?php echo $mn['name'];?></h3>
            <br>
            <br>
        
            <strong>Storage : <span class="bg-primary p-2 text-white mx-3"><?php echo $mn['storage'];?></span></strong>
            <br>
            <br>
            <strong>Processor : <?php echo $mn['processor'];?></strong>
            <br>
            <br>
            <strong>Ram : <?php echo $mn['ram'];?></strong>
            <br>
            <br>
            <strong>Price :<s><?php echo $mn['price'];?></s> <?php echo $mn['price_1'];?></strong>
            <br>
            <br>
            <button class="btn btn-lg btn btn-primary">Add to Cart</button>
            <button class="btn btn-lg btn btn-warning mx-3">Buy Now</button>

        </div>
        <?php
        }
        ?>
    </div>
</div>

<div class="container-fluid footer-section">

      <div class="container">

        <div class="row mt-5">

          <div class=" col-lg-3">
             <h4>About Us</h4>
             <span>LapyWala Store in Bihar Sharif is One Of The leading Buisiness in the computer printer Dealers . Also Known For Computer Repair & Services, Laptop Laptop Dealers, computer Dealers.</span>
          </div>
          <div class=" col-lg-3">
            <h4>Quick Links</h4>
            <ul>
            <li><a href=""><i class="fa-solid fa-arrow-right"></i>&nbsp; &nbsp;Home</a></li>
            <li><a href=""><i class="fa-solid fa-arrow-right"></i>&nbsp; &nbsp;Shop</a></li>
            <li><a href=""><i class="fa-solid fa-arrow-right"></i>&nbsp; &nbsp; Dell</a></li>
            <li><a href=""><i class="fa-solid fa-arrow-right"></i>&nbsp; &nbsp;Lenovo</a></li>
            <li><a href=""><i class="fa-solid fa-arrow-right"></i>&nbsp; &nbsp;Toshiba</a></li>
            
            </ul>
         </div>
         <div class="col-lg-3">
          <h4>Laptop Repair</h4>
          <ul>
            <li><a href=""><i class="fa-solid fa-arrow-right"></i>&nbsp; &nbsp;Motherboard Repair</a></li>
            <li><a href=""><i class="fa-solid fa-arrow-right"></i>&nbsp; &nbsp;Cpu Repair</a></li>
            <li><a href=""><i class="fa-solid fa-arrow-right"></i>&nbsp; &nbsp;Add Hdd</a></li>
            <li><a href=""><i class="fa-solid fa-arrow-right"></i>&nbsp; &nbsp;Memory</a></li>
            <li><a href=""><i class="fa-solid fa-arrow-right"></i>&nbsp; &nbsp;Mouse</a></li>
            
            </ul>
       </div>
       <div class=" col-lg-3">
        <h4>Address</h4>
        <span><i class="fa-solid fa-location-dot"></i>&nbsp;Mogal Kuan Near Mishra Tent House</span><br>
        <span><i class="fa-solid fa-envelope"></i>&nbsp;info@lapywala.com</span><br>
        <span><i class="fa-solid fa-phone"></i>&nbsp;+91-88487438937</span><br>
     </div>

        </div>

      </div>

     </div>
</div>
</body>
</html>