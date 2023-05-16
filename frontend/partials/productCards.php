<?php
 include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

 $productsInJson = file_get_contents($frontendResources."productCard.json");

 $products = json_decode($productsInJson);
 ?>

<div class="row">
    <?php
    foreach($products as $key => $product):
    ?>
    <div class="col-12 col-md-12 col-lg-4 gy-4">
        <div class="card  text-center bg-white pb-2">
            <div class="card-body text-dark">
            <div class="img-area mb-4">
                <img src="<?=$product->src?>" alt="<?=$product->alt?>"  width="100%" height="100%">
            </div>
            <h3 class="card-title"><?=$product->title?></h3>
            <p class="lead text-danger"><?=$product->price?></p>
            <a href="<?=$product->url?>" class="btn bg-warning text-dark">See More</a>
            </div>
        </div>
    </div>
<?php
endforeach
?>
    <!-- <div class="col-12 col-md-12 col-lg-4 gy-4">
        <div class="card  text-center bg-white pb-2">
            <div class="card-body text-dark">
            <div class="img-area mb-4">
                <img src="../global_assets/img/nasos.jpg" alt=""  width="100%" height="100%">
            </div>
            <h3 class="card-title">Nasos</h3>
            <p class="lead text-danger">20$</p>
            <a href="productdetails.html" class="btn bg-warning text-dark">See More</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-12 col-lg-4 gy-4">
    <div class="card  text-center bg-white pb-2">
        <div class="card-body text-dark">
        <div class="img-area mb-4">
            <img src="../global_assets/img/salad.jpg" alt=""  width="100%" height="100%">
        </div>
        <h3 class="card-title">Salad</h3>
        <p class="lead text-danger">15$</p>
        <a href="productdetails.html" class="btn bg-warning text-dark">See More</a>
        </div>
    </div>
    </div>
    
    <div class="col-12 col-md-12 col-lg-4 gy-4">
    <div class="card  text-center bg-white pb-2">
        <div class="card-body text-dark">
        <div class="img-area mb-4">
            <img src="../global_assets/img/rice.jpg" alt=""  width="100%" height="100%">
        </div>
        <h3 class="card-title">Rice</h3>
        <p class="lead text-danger">15$</p>
        <a href="productdetails.html" class="btn bg-warning text-dark">See More</a>
        </div>
    </div>
    </div>

    <div class="col-12 col-md-12 col-lg-4 gy-4">
    <div class="card  text-center bg-white pb-2">
        <div class="card-body text-dark">
        <div class="img-area mb-4">
            <img src="../global_assets/img/fruits.jpg" alt=""  width="100%" height="100%">
        </div>
        <h3 class="card-title">Fruits</h3>
        <p class="lead text-danger">15$</p>
        <a href="productdetails.html" class="btn bg-warning text-dark">See More</a>
        </div>
    </div>
    </div>
    <div class="col-12 col-md-12 col-lg-4 gy-4">
    <div class="card  text-center bg-white pb-2">
        <div class="card-body text-dark">
        <div class="img-area mb-4">
            <img src="../global_assets/img/donat.jpg" alt=""  width="100%" height="100%">
        </div>
        <h3 class="card-title">Donat</h3>
        <p class="lead text-danger">15$</p>
        <a href="productdetails.html" class="btn bg-warning text-dark">See More</a>
        </div>
    </div> -->
    </div>      
</div>