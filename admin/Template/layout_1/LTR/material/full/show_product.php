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






<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once($partialAdmin . 'head.php');
?>

<body>

    <!-- Main navbar -->
    <?php
    include_once($partialAdmin . 'top_nav.php');
    ?>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                <span class="font-weight-semibold">Navigation</span>
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <?php
                include_once($partialAdmin . 'user_oparetions_and_avatar.php');
                ?>
                <!-- /user menu -->


                <!-- Main navigation -->
                <?php
                include_once($partialAdmin . 'main_side_nav.php');
                ?>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <?php
            // include_once($pageHeaderNav);
            ?>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <div class="">
                    <div class="card">
                        <div class="card-img-actions mx-1 mt-1">
                            <img class="card-img img-fluid" src="<?= filter_var($product->src, FILTER_VALIDATE_URL) ? $product->src : $webroot . 'uploads/' . $product->src ?>" alt="<?= $product->alt ?>"
                                style="height:500px; width=100%">
                        </div>

                        <div class="card-body">
                            <div class="d-flex align-items-start flex-nowrap">
                                <div>
                                    <div class="font-weight-semibold mr-2">
                                        <?= $product->title ?>
                                    </div>
                                    <span class="font-size-sm text-muted">
                                        <?= $product->price ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-3">
                            <a href="edit_product.php?id=<?= $product->id ?>"
                               class="btn border rounded-round mx-1"><i
                                        class="icon-pencil text-info"></i></a>
                            <form action="DeleteProductController.php" method="post" onclick="return confirm('Are you sure you want to delete this item')">
                                <input type="hidden" name="id"
                                       value="<?= $product->id ?>">
                                <input type="hidden" name="old_image"
                                       value="<?= $product->src ?>">
                                <button class="btn border rounded-round mx-1"><i
                                            class="icon-trash text-danger"></i></button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /content area -->


            <!-- Footer -->
            <?php
            include_once($partialAdmin . 'footer.php');
            ?>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>