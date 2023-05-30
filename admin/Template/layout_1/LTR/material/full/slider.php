<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');

    use \BITM\SEIP12\Slider;
	$slider = new Slider();
	$sliders = $slider->index();
?>

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
                <?php
                $message = flush_session('success');
                if ($message):
                    ?>
                    <div class="alert alert-success">
                        <?= $message ?>
                    </div>
                <?php endif ?>

                <div class="card-body">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Slider Images</h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-light legitRipple" data-toggle="modal"
                            data-target="#modal_create"><i class="icon-plus2 ml-2"></i> Add Slider </button>
                    </div>




                    <ul class="nav nav-tabs mb-0">
                        <li class="nav-item"><a href="#basic-tab1" class="nav-link active" data-toggle="tab">List
                                View</a></li>
                        <li class="nav-item"><a href="#basic-tab2" class="nav-link" data-toggle="tab">Grid View</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="basic-tab1">
                            <div class="d-flex mb-0 justify-content-end">
                                <a href="slider_pdf_view.php" class="btn border" target="_blank"><i class="icon-eye"></i>
                                    Pdf View</a>
                                <a href="sliders_pdf_download.php" class="btn border"><i class="icon-download"></i>
                                    Pdf</a>
                                <a href="sliders_excel_download.php" class="btn border"><i class="icon-download"></i>Excl</a>
                            </div>
                            <div class="card p-3">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="datatable-header">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                            <label><span>Filter:</span>
                                                <input type="search" class="" placeholder="Type to filter..."
                                                    aria-controls="DataTables_Table_0"></label>
                                        </div>
                                        <div class="dataTables_length" id="DataTables_Table_0_length">
                                            <label><span>Show:</span>
                                                <select name="DataTables_Table_0_length"
                                                    aria-controls="DataTables_Table_0" class="select2-hidden-accessible"
                                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                    <option value="10" data-select2-id="3">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--default"
                                                    dir="ltr" data-select2-id="2" style="width: auto;"><span
                                                        class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-DataTables_Table_0_length-g1-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-DataTables_Table_0_length-g1-container"
                                                                role="textbox" aria-readonly="true"
                                                                title="10">10</span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper"
                                                        aria-hidden="true"></span></span></label>
                                        </div>
                                    </div>
                                    <div class="datatable-scroll">
                                        <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0"
                                            role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="First Name: activate to sort column descending">#
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="First Name: activate to sort column descending">Name
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="First Name: activate to sort column descending">
                                                        Description
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Last Name: activate to sort column ascending">Image
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending">Status
                                                    </th>
                                                    <th class="text-center sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="Actions" style="width: 100px;">Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($sliders as $key => $slider):
                                                    ?>
                                                    <tr role="row" class="odd">
                                                        <td class="">
                                                            <?= ++$key ?>
                                                        </td>
                                                        <td class="sorting_1">
                                                            <?= $slider->title ?>
                                                        </td>
                                                        <td class="sorting_1">
                                                            <?= $slider->description ?>
                                                        </td>
                                                        <td>
                                                            <img src="<?= filter_var($slider->src, FILTER_VALIDATE_URL) ? $slider->src : $webroot . 'uploads/' . $slider->src ?>"
                                                                alt="<?= $slider->alt ?>" style="height:60px; width: 60%;">
                                                        </td>

                                                        <td>
                                                            <span
                                                                class="badge <?php echo ($slider->status ? 'badge-success' : 'badge-danger') ?>"><?php echo ($slider->status ? 'Active' : 'Inective') ?></span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="d-flex">
                                                                <a class="btn border rounded-round mx-1"
                                                                    href="show_slider.php?id=<?= $slider->id ?>"><i
                                                                        class="icon-eye text-primary"></i></a>

                                                                <a href="edit_slider.php?id=<?=$slider->id?>" class="btn border rounded-round mx-1">
                                                                    <i class="icon-pencil text-info"></i> </a>
                                                                <form action="DeleteSliderController.php" method="post"
                                                                    onclick="return confirm('Are you sure you want to delete this item')">
                                                                    <input type="hidden" name="id"
                                                                        value="<?= $slider->id ?>">
                                                                    <input type="hidden" name="old_image"
                                                                        value="<?= $slider->src ?>">
                                                                    <button class="btn border rounded-round mx-1"><i
                                                                            class="icon-trash text-danger"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                endforeach
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="datatable-footer">
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                            aria-live="polite">
                                            Showing 1 to 10 of 15 entries
                                        </div>
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="DataTables_Table_0_paginate"><a
                                                class="paginate_button previous disabled"
                                                aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                                id="DataTables_Table_0_previous">←</a><span><a
                                                    class="paginate_button current" aria-controls="DataTables_Table_0"
                                                    data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
                                                    aria-controls="DataTables_Table_0" data-dt-idx="2"
                                                    tabindex="0">2</a></span><a class="paginate_button next"
                                                aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0"
                                                id="DataTables_Table_0_next">→</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /basic datatable -->
                        </div>

                        <!-- Grid View -->
                        <div class="tab-pane fade" id="basic-tab2">
                            <div class="d-flex mb-0 justify-content-end">
                                <a href="slider_pdf_view.php" class="btn border" target="_blank"><i class="icon-eye"></i>
                                    Pdf View</a>
                                <a href="sliders_pdf_download.php" class="btn border"><i class="icon-download"></i>
                                    Pdf</a>
                                <a href="sliders_excel_download.php" class="btn border"><i class="icon-download"></i> Excel</a>
                            </div>
                            <div class="row mx-o">
                                <?php foreach ($sliders as $key => $slider): ?>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-img-actions mx-1 mt-1">
                                                <img class="card-img img-fluid"
                                                    src="<?= filter_var($slider->src, FILTER_VALIDATE_URL) ? $slider->src : $webroot . 'uploads/' . $slider->src ?>"
                                                    alt="<?= $slider->alt ?>" style="height:300px; width=100%">
                                            </div>

                                            <div class="card-body">
                                                <div class="d-flex align-items-start flex-nowrap">
                                                    <div>
                                                        <div class="font-weight-semibold mr-2">
                                                            <?= $slider->title ?>
                                                        </div>
                                                        <span class="font-size-sm text-muted">
                                                            <?= $slider->description ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between p-3">
                                                <a class="btn border rounded-round mx-1"
                                                    href="show_slider.php?id=<?= $slider->id ?>"><i
                                                        class="icon-eye text-primary"></i></a>
                                                <a href="edit_slider.php?id=<?=$slider->id?>" class="btn border rounded-round mx-1">
                                                    <i class="icon-pencil text-info"></i> </a>
                                                <form action="DeleteSliderController.php" method="post"
                                                    onclick="return confirm('Are you sure you want to delete this item')">
                                                    <input type="hidden" name="id" value="<?= $slider->id ?>">
                                                    <input type="hidden" name="old_image" value="<?= $slider->src ?>">
                                                    <button class="btn border rounded-round mx-1"><i
                                                            class="icon-trash text-danger"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <!-- Grid View End -->
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

    <div id="modal_create" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="CreateSliderController.php" method="post" enctype="multipart/form-data">

                    <div class="modal-header">
                        <h5 class="modal-title">Add Slider</h5>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Title<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" name="title" class="form-control"
                                    placeholder="Enter slider title...">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Description<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="text" name="description" class="form-control"
                                    placeholder="Enter slider description...">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Image ALT</label>
                            <div class="col-lg-10">
                                <input type="text" name="image_alt" class="form-control"
                                    placeholder="Enter slider image alt...">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Image</label>
                            <div class="col-lg-10">
                                <input type="file" name="image">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link legitRipple" data-dismiss="modal">Close<div
                                class="legitRipple-ripple"
                                style="left: 50.5862%; top: 54.5641%; transform: translate3d(-50%, -50%, 0px); width: 225.28%; opacity: 0;">
                            </div>
                            <div class="legitRipple-ripple"
                                style="left: 64.2294%; top: 44.0378%; transform: translate3d(-50%, -50%, 0px); width: 225.28%; opacity: 0;">
                            </div>
                        </button>
                        <button type="submit" class="btn bg-primary legitRipple">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>