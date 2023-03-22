<?php

$my_work_exp = [
	[
		'work_major' => 'PT. Raja Listrik Indonesia [School Intern: Support Staff]',
		'work_years' => 'Sept 2019 - Dec 2019',
		'company_addr' => 'BSD City Ruko Golden Boulevard Blok C.18, Banten 15310',
		'wrk_list' => [
			'li1' => 'Assist or support staff',
			'li2' => 'Handling-estimation-management the manual books for the use of industrial',
			'li3' => 'And so on.'
		],
	],
	[
		'work_major' => 'PT. Angkasa Pura II - Depati Amir Airports [School Intern: IT Support Staff]',
		'work_years' => 'Jan 2016 - Mar 2016',
		'company_addr' => 'Dahlia Streets, Dul, Subdistric. Pangkalan Baru, Bangka Center Reg, Bangka Prov Island 33684',
		'wrk_list' => [
			'li1' => 'Perform maintenance',
			'li2' => 'Troubleshooting networks, cctv, internet networks, software errors, os performa',
			'li3' => 'And so on.'
		],
	]

];



foreach ($my_work_exp as $wrk) {
	echo "<div class='resume-item'>";
	echo "	<h4>" . $wrk['work_major'] . "</h4>";
	echo "	<h5>" . $wrk['work_years'] . "</h5>";
	echo "	<p><em>" . $wrk['company_addr']  . "</em></p>";
	echo "	<ul>";
	foreach ($wrk['wrk_list'] as $wrk_li) {
		echo "<li>" . $wrk_li . "</li>";
	}
	echo "	</ul>";
	echo "</div>";
}
