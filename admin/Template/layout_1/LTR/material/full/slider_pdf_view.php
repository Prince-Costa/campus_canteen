<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$sliderInJson = file_get_contents($dataResources . 'slider.json');
$sliders = json_decode($sliderInJson);
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once($partialAdmin . 'head.php');
?>

    <body>
        <h1 class="text-center">Sliders</h1>
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
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1"
                        aria-label="Last Name: activate to sort column ascending">Image
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1"
                        aria-label="Status: activate to sort column ascending">Status
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
                        <td>
                            <img src="<?=filter_var($slider->src, FILTER_VALIDATE_URL)?  $slider->src : $webroot.'uploads/'. $slider->src ?>" alt="<?= $slider->alt ?>"
                                style="height:100px; width: auto;">
                        </td>

                        <td><span
                                class="badge <?php echo ($slider->status ? 'badge-success' : 'badge-danger') ?>"><?php echo ($slider->status ? 'Active' : 'Inective') ?></span>
                        </td>
                    </tr>
                    <?php
                endforeach
                ?>
            </tbody>
        </table>
    </body>

</html>