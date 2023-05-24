<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

$productsInJson = file_get_contents($dataResources . 'products.json');
$products = json_decode($productsInJson);



$productsHTMLStart =<<<PRODUCT


<h1> All Sliders </h1>

<table border="1">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Src</th>
									<th>Alt</th>
									<th>Price</th>
									
								</tr>
							</thead>
							<tbody>



PRODUCT;

?>
<?php
	$productHTMLContent = null;
	$src = null;
    foreach($products as $key=>$product):
		$ser = ++$key;
		$src = $webroot."uploads/".$product->src;
		$productHTMLContent .=<<<TR

			<tr>
				<td title="$product->uuid">$ser</td>
				<td><$product->title</td>
				<td><img src="$src" style="width:100px;height:100px"></td>
				<td>$product->alt</td>
				<td>$product->price</td>
			</tr>

	TR;
	
	endforeach;
	
	$productHTMLEnd = <<<EOF
			</tbody>
			</table>
	

	EOF;


	$slideHTMLList = $productsHTMLStart.$productHTMLContent.$productHTMLEnd;

	echo $slideHTMLList;



	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($slideHTMLList);
	$mpdf->Output();
    ?> 