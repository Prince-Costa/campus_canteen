<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$productsInJson = file_get_contents($dataResources . 'products.json');
$products = json_decode($productsInJson);
$id = $_GET['id'];
$product = '';
foreach ($products as $key => $singleProduct) {
    if ($singleProduct->id == $id) {
        $product = $singleProduct;
    }
    ;
}
?>

<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');?>

<!DOCTYPE html>
<html lang="en">
<?php include_once($partialFrontend.'head.php')?>
<body>

<!-- Adding Nav -->
<?php include_once($partialFrontend.'nav.php')?>
<div class="container ">
    <div class="row mt-5">
        <div class="col-md-5 ps-lg-5 mt-3 ">
            <img class="img-fluid" src="<?=filter_var($product->src, FILTER_VALIDATE_URL) ? $product->src : $webroot . 'uploads/' . $product->src?>" alt="<?=$product->alt?>">
        </div>
        <div class="col-md-7">
            <h2><?=$product->title?></h2>
            <p><?=$product->type?></p>
            <p class="price">Price: <span class="text-danger"><?=$product->price?></span></p>
            <p>Availability: <span class="text-info">In Stock</span></p>
            <p>Condition:<span class="text-info">New</span></p>
            <label for="">
                Quantity:
            </label>
            <input type="text" value="1">
            <a href="cart.html" class="btn bg-warning text-dark ">Add to cart</a>
        </div>
    </div>
</div>

<?php include_once($partialFrontend.'footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" ></script>
</body>
</html>


<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Bootstrap Home page</title>-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" >-->
<!--    <link rel="stylesheet" href="../global_assets/css/productdetails.css">-->
<!--</head>-->
<!--<body>-->
<!---->
<!--    <nav class="navbar navbar-expand-lg navber-light bg-light  ">-->
<!--        <div class="container">-->
<!--          <a class="navbar-brand" href="#"><span class="text-danger">Cumpus</span>Canteen</a>-->
<!--          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--          </button>-->
<!--          <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">-->
<!--              -->
<!--              <li class="nav-item">-->
<!--                <a class="nav-link" href="index.html">Home</a>-->
<!--              </li>-->
<!--              <li class="nav-item">-->
<!--                <a class="nav-link" href="Login.html">Log In</a>-->
<!--              </li>-->
<!--              <li class="nav-item">-->
<!--                <a class="nav-link" href="contact.html">Contact Us</a>-->
<!--              </li>-->
<!--              <li class="nav-item">-->
<!--                <form action="">-->
<!--                  <div class="search-container">-->
<!--                    <input type="text" placeholder="Search here.." class="search-input " >-->
<!--                    <i class="fa-sharp fa-solid fa-magnifying-glass search-icon"></i>-->
<!--                  </div>                -->
<!--                </form>-->
<!--              </li>-->
<!--             -->
<!--            </ul>-->
<!--         -->
<!--          </div>-->
<!--        </div>-->
<!--      </nav>-->
<!---->
<!---->
<!--      <div class="container ">-->
<!--        <div class="row mt-5">-->
<!--            <div class="col-md-5 ps-lg-5 mt-3 ">-->
<!--                <img src="../global_assets/img/corn.jpg" alt="">-->
<!--            </div>-->
<!--            <div class="col-md-7">-->
<!--                <p class="new text-center">NEW</p>-->
<!--                <h2>Corn Shup</h2>-->
<!--                <p>Product Code: CC1</p>-->
<!--                <p class="price">USD $10.00</p>-->
<!--                <p><b>Availability:</b> In Stock</p>-->
<!--                <p><b>Condition:</b> New</p>-->
<!--                <label for="">-->
<!--                    Quantity:-->
<!--                </label>-->
<!--                <input type="text" value="1">-->
<!--                <a href="cart.html" class="btn bg-warning text-dark ">Add to cart</a>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!---->
<!--      <footer class="bg-dark p-2 text-center fixed-bottom">-->
<!--        <div class="container">-->
<!--          <p class="text-white mb-0">All Right Reserved @Cumpas-Canteen </p>-->
<!--        </div>-->
<!--      </footer>-->
<!---->
<!---->
<!--    -->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" ></script>-->
<!---->
<!---->
<!---->
<!--</body>-->
<!--</html>-->