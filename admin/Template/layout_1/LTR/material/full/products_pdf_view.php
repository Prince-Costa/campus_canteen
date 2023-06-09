<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$productsInJson = file_get_contents($dataResources . 'products.json');
$products = json_decode($productsInJson);
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once($partialAdmin . 'head.php');
?>

    <body>
        <h1 class="text-center">Products</h1>
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
                        aria-label="Last Name: activate to sort column ascending">
                        Category</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1"
                        aria-label="Job Title: activate to sort column ascending">Price
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1"
                        aria-label="DOB: activate to sort column ascending">Date</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1"
                        aria-label="Job Title: activate to sort column ascending">E-sale
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1"
                        aria-label="Job Title: activate to sort column ascending">
                        Outdore</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1"
                        aria-label="Status: activate to sort column ascending">Status
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($products as $key => $product):
                    ?>
                    <tr role="row" class="odd">
                        <td class="">
                            <?= ++$key ?>
                        </td>
                        <td class="sorting_1">
                            <?= $product->title ?>
                        </td>
                        <td>
                            <img src="<?=filter_var($product->src, FILTER_VALIDATE_URL)?  $product->src : $webroot.'uploads/'. $product->src ?>" alt="<?= $product->alt ?>"
                                style="height:60px; width: auto;">
                        </td>
                        <td>
                            <?= $product->type ?>
                        </td>
                        <td>
                            <?= $product->price ?>
                        </td>
                        <td>
                            <?= $product->date ?>
                        </td>
                        <td><span
                                class="badge <?php echo ($product->e_sale ? 'badge-success' : 'badge-danger') ?>"><?php echo ($product->e_sale ? 'Active' : 'Inective') ?></span>
                        </td>
                        <td><span
                                class="badge <?php echo ($product->outdore ? 'badge-success' : 'badge-danger') ?>"><?php echo ($product->outdore ? 'Active' : 'Inective') ?></span>
                        </td>
                        <td><span
                                class="badge <?php echo ($product->status ? 'badge-success' : 'badge-danger') ?>"><?php echo ($product->status ? 'Active' : 'Inective') ?></span>
                        </td>
                    </tr>
                    <?php
                endforeach
                ?>
            </tbody>
        </table>
    </body>

</html>