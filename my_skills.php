<?php

$my_skills = [
	[
		'name' => 'Microsoft Office',
		'perc' => '80'
	],
	[
		'name' => 'Adobe Photoshop',
		'perc' => '85'
	],
	[
		'name' => 'Cisco (CPT)',
		'perc' => '69'
	],
	[
		'name' => 'Software & Hardware Troubleshooting',
		'perc' => '89'
	],
	[
		'name' => 'Python',
		'perc' => '88'
	],
	[
		'name' => 'Java',
		'perc' => '78'
	],
	[
		'name' => 'Visual Basic',
		'perc' => '78'
	],
	[
		'name' => 'C++',
		'perc' => '70'
	],
	[
		'name' => 'Microsoft Office',
		'perc' => '90'
	],
	[
		'name' => 'Programmable Logic Controller',
		'perc' => '45'
	],
	[
		'name' => 'HTML',
		'perc' => '74'
	],
	[
		'name' => 'CSS',
		'perc' => '74'
	],
	[
		'name' => 'Javascript',
		'perc' => '74'
	],
	[
		'name' => 'PHP',
		'perc' => '74'
	]

];


$RawGroup = count($my_skills);
$Group1 = ($RawGroup / 2);
$Group1_Floor = floor($Group1);
$Ctr = 1;
$animate = "";

$iCount = 1;
$iMax = 3;


foreach ($my_skills as $member) {
	if ($iCount < $iMax) {
		if ($Ctr <= $Group1_Floor) {
			$animate = "<div class='col-lg-6' data-aos='fade-right'>";
			$iCount += 1;
		} else {
			$animate = "<div class='col-lg-6' data-aos='fade-left' data-aos-delay='100'>";
			$iCount += 1;
		}
	} else {
		$iCount = 1;
	}

	echo $animate;
	echo "	<div class='my-skills'>";
	echo "		<div class='progress'>";
	echo "		<span class='skill'>" . $member['name'] . "<i class='val'>" . $member['perc'] . "%</i></span>";
	echo "			<div class='progress-bar-wrap'>";
	echo "				<div class='progress-bar' role='progressbar' aria-valuenow='" . $member['perc'] . "' aria-valuemin='0' aria-valuemax='100'></div>";
	echo "			</div>";
	echo "		</div>";

	echo "	</div>";
	echo "</div>";

	if ($Ctr <= $RawGroup) {
		$Ctr += 1;
	} else {
		$Ctr = 0;
	}
}
