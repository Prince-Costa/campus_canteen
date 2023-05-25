<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$slidersInJson = file_get_contents($dataResources . 'slider.json');
$sliders = json_decode($slidersInJson);
$id = $_GET['id'];
$slider = '';
foreach ($sliders as $key => $singleSlider) {
    if ($singleSlider->id == $id) {
        $slider = $singleSlider;
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
                <h3>Edit Slider</h3>

                <form action="EditSliderController.php" method="post" enctype="multipart/form-data">
                    <input name="id" type="hidden" class="form-control" value="<?= $slider->id ?>" />
                    <input name="uuid" type="hidden" class="form-control" value="<?= $slider->uuid ?>" />
                    <input name="old_image" type="hidden" class="form-control" value="<?= $slider->src ?>" />
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Title<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="title" class="form-control" value="<?= $slider->title ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Description<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="description" class="form-control"
                                value="<?= $slider->description ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Image ALT</label>
                        <div class="col-lg-10">
                            <input type="text" name="image_alt" class="form-control" value="<?= $slider->alt ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"></label>
                        <div class="col-lg-10">
                            <img src="<?= $slider->src ?>" alt="" height="100px">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Image</label>
                        <div class="col-lg-10">
                            <input type="file" name="new_image">
                        </div>
                    </div>

                    <button type="submit" class="btn bg-primary legitRipple">Save changes</button>

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