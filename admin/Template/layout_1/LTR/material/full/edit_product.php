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
                <h3>Edit Product</h3>

                <form method="post" action="EditProductController.php" enctype="multipart/form-data">
                    <input name="id" type="hidden" class="form-control" value="<?= $product->id ?>" />
                    <input name="uuid" type="hidden" class="form-control" value="<?= $product->uuid ?>" />
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Title<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="title" class="form-control" placeholder="Enter product title..."
                                value="<?= $product->title ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Type<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="type" class="form-control" placeholder="Enter product type..."
                                value="<?= $product->type ?>">
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label class="col-form-label col-lg-2">Description</label>
                        <div class="col-lg-10">
                            <textarea type="text" name="description" class="form-control">"</textarea>
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Cost Price<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="cost_price" class="form-control"
                                placeholder="Enter product cost price..." value="<?= $product->cost_price ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Sale Price<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="price" class="form-control"
                                placeholder="Enter product sell price..." value="<?= $product->price ?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Image alt<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="image_alt" class="form-control"
                                placeholder="Enter product image url..." value="<?= $product->alt ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"></label>
                        <div class="col-lg-10">
                            <img src="<?= $webroot . "uploads/" . $product->src ?>" alt="<?= $product->alt ?>"
                                height="100px">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Image</label>
                        <div class="col-lg-10">
                            <input type="file" name="new_image" class="form-control">
                            <input type="hidden" name="old_image" value="<?=$product->src?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">E-sale Enabled</label>
                        <div class="col-lg-10">
                            <div class="form-check form-check-switchery form-check-switchery-double">
                                <label class="form-check-label">
                                    Enable
                                    <input type="checkbox" name="e_sale" class="form-check-input-switchery"
                                        <?= $product->e_sale ? 'checked' : "" ?> data-fouc="" data-switchery="true"
                                        style="display: none;">
                                    Disable
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Outdoor Enabled</label>
                        <div class="col-lg-10">
                            <div class="form-check form-check-switchery form-check-switchery-double">
                                <label class="form-check-label">
                                    Enable
                                    <input type="checkbox" name="outdoor" class="form-check-input-switchery"
                                        <?= $product->outdore ? 'checked' : "" ?> data-fouc="" data-switchery="true"
                                        style="display: none;">
                                    Disable
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="ps-5">
                        <div class="text-start">
                            <button type="submit" class="btn btn-primary legitRipple">Save</button>
                        </div>
                    </div>
                </form>
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