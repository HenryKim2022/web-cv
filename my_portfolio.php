<?php

$_digitalent = array(
	array(
		'url' => "assets/img/portfolio/portfolio-digitalent-1_Page1.jpg",
		'title' => "BNSP: Junior Mobile Programmer [Aug 2020]",
		'alt' => "VSGA MOPROB 2020"
	),

	array(
		'url' => "assets/img/portfolio/portfolio-digitalent-2_Page1.jpg",
		'title' => "Digitalent: VSGA Computer Network Technician [June 2022]",
		'alt' => "VSGA TUJK 2022"
	),

	array(
		'url' => "assets/img/portfolio/portfolio-digitalent-3_Page1.jpg",
		'title' => "Digitalent: ITC English Softskill Training [Nov 2020]",
		'alt' => "VSGA ITC 2020"
	),

);

$_bnsp = array(
	array(
		'url' => "assets/img/portfolio/portfolio-bnsp-1_Page1.jpg",
		'title' => "BNSP: Junior Mobile Programmer [Aug 2020]",
		'alt' => "BNSP MOPROB 2020"
	),

	array(
		'url' => "assets/img/portfolio/portfolio-bnsp-2_Page1.jpg",
		'title' => "BNSP: Installing Automation Electricity Installation With PLC [Oct 2020]",
		'alt' => "BNSP El-POWER 2020"
	),

	array(
		'url' => "assets/img/portfolio/portfolio-bnsp-3_Page1.jpg",
		'title' => "BNSP: VSGA Computer Network Technician [June 2022]",
		'alt' => "BNSP TUJK 2022"
	),

);



foreach ($_digitalent as $value) {
	echo "<div class='col-lg-4 col-md-6 portfolio-item filter-digitalent' style='position: absolute; left: 0px; top: 0px;'>";
	echo "	<div class='portfolio-wrap'>";
	echo "		<img src='" . $value['url'] . "' class='img-fluid w-100' alt='' />";
	echo "		<div class='portfolio-links'>";
	echo "			<a href='" . $value['url'] . "' data-gallery='portfolioGallery' class='portfolio-lightbox' title='" . $value['title'] . "'><i class='bx bx-zoom-in'></i></a>";
	echo "			<a class='d-flex align-items-center justify-content-center' style='font-size: 1rem'>" . $value['alt'] . "</a>";
	echo "		</div>";
	echo "	</div>";
	echo "</div>";
}

foreach ($_bnsp as $value) {
	echo "<div class='col-lg-4 col-md-6 portfolio-item filter-bnsp' style='position: absolute; left: 0px; top: 0px;'>";
	echo "	<div class='portfolio-wrap '>";
	echo "		<img src='" . $value['url'] . "' class='img-fluid w-100' alt='' />";
	echo "		<div class='portfolio-links'>";
	echo "			<a href='" . $value['url'] . "' data-gallery='portfolioGallery' class='portfolio-lightbox' title='" . $value['title'] . "'><i class='bx bx-zoom-in'></i></a>";
	echo "			<a class='d-flex align-items-center justify-content-center' style='font-size: 1rem'>" . $value['alt'] . "</a>";
	echo "		</div>";
	echo "	</div>";
	echo "</div>";
}
