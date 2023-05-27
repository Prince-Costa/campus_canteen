<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');?>
<?php
$sliderInJson = file_get_contents($dataResources . 'slider.json');
$sliders = json_decode($sliderInJson);



$sliderHTMLStart =<<<SLIDER


<h1 style="display: flex; justify-content: center"> All Sliders </h1>

<table border="1" width="100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Image</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
SLIDER;

?>
<?php
	$sliderHTMLContent = null;
	$src = null;
    foreach($sliders as $key=>$slider):
		$ser = ++$key;
		$src = filter_var($slider->src, FILTER_VALIDATE_URL) ? $slider->src : $webroot."uploads/".$slider->src ;
		$sliderHTMLContent .=<<<TR
			<tr>
				<td title="$slider->uuid">$ser</td>
				<td>$slider->title</td>
				<td><img src="$src" style="width:100px;height:100px"></td>
				<td>$slider->status</td>
			</tr>
	TR;

	endforeach;

	$sliderHTMLEnd = <<<EOF
			</tbody>
			</table>
	EOF;


	$slideHTMLList = $sliderHTMLStart.$sliderHTMLContent.$sliderHTMLEnd;

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($slideHTMLList);
	$mpdf->Output();
    ?>