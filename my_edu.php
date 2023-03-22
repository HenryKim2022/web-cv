<?php

$my_edu = [
    [
        'edu_major' => 'S1 Indonesia Institute Of Technology [Informatics]',
        'edu_years' => '2021 - Present',
        'institu_addr' => $Addr,
        'edu_desc' => 'Focus in informatics sectors, programming, and so on.',
    ],
    [
        'edu_major' => 'Manufacturing Polytechnic of Babel [Electro]',
        'edu_years' => '2017 - 2020',
        'institu_addr' => 'Air Kantung Industrial Area Streets, Sungailiat, Bangka Reg, Bangka Belitung Prov 33215',
        'edu_desc' => 'Focus in electricity sectors, programming, and so on.',
    ],
    [
        'edu_major' => 'Vocational High School 1 Toboali [TKJ]',
        'edu_years' => '2014 - 2017',
        'institu_addr' => 'Air Benar Streets No.33183, Teladan, Toboali City, South Bangka Reg, Bangka Belitung Prov 33783',
        'edu_desc' => 'Focus in informatics sectors, networking installation, software-hardware troubleshooting and its installations',
    ]

];


foreach ($my_edu as $edu) {
    echo "<div class='resume-item'>";
    echo "	<h4>" . $edu['edu_major'] . "</h4>";
    echo "	<h5>" . $edu['edu_years'] . "</h5>";
    echo "	<p><em>" . $edu['institu_addr']  . "</em></p>";
    echo "	<p>" . $edu['edu_desc'] . "</p>";
    echo "</div>";
}
