<?php
// $items = [
// 	[
// 		"title" = "Reports",
// 		"tags" = "reports file"
// 	],
// 	[
// 		"title" = "Analytics",
// 		"tags" = "analytics graphs"
// 	],
// 	[
// 		"title" = "Export",
// 		"tags" = "export download"
// 	],
// 	[
// 		"title" = "Storage",
// 		"tags" = "storage"
// 	]
// ];

// output();


// task 2
$h = ['Privacy', 'Cookies and other similar technologies'];
$p = ['Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns. We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this). We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations. We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.', 'We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.'];
foreach (array_combine($p, $h) as $key) {
	$a = '<h2>'.$h[0].'</h2><p class="mb-g">'. $p[0] .'</p><h3>'.$h[1].'</h3><p>'. $p[1] .'</p>';
}
echo $a;



// foreach (array_combine($p, $h) as $key) {
// 	$a = '<h2>'.$h[0].'</h2><p class="mb-g">'. $p[0] .'</p><h3>'.$h[1].'</h3><p>'. $p[1] .'</p>';
// }
// echo $a;


// task 3
// $ol = ['Главная', 'PHP', 'Функции'];

// foreach ($ol as $key => $val) {
// 	if ($key != 2) {
// 		echo '<li class="breadcrumb-item"><a href="#">' . $val . '</a></li>';
// 	}
// }
// echo '<li class="breadcrumb-item active">' . $ol[2] . '</li>';


// task 4
// $span = ['130 / 500', '440 TB', '77%', '7 days'];
// $div = ['My Tasks', 'Transfered', 'Bugs Squashed', 'User Testing'];
// $width_valuenow = ['65', '34', '77', '84'];
// $bg = ['bg-fusion-400', 'bg-success-500', 'bg-info-400', 'bg-primary-300'];

// $i = 0;
// foreach (array_combine($div, $span) as $d => $s) {
//        foreach (array_combine($width_valuenow, $bg) as $wid => $bg) {
//               echo $div[$i] . ' ' . $span[$i];
//               echo $bg . ' ' . $wid;
//               echo '<div class="d-flex mt-2">'. $div[$i] .'<span class="d-inline-block ml-auto">'. $span[$i] .'</span></div>';
//               echo '<div class="progress progress-sm mb-3"><div class="progress-bar '. $bg .'" role="progressbar" style="width: '. $wid .'%;" aria-valuenow="'. $wid .'" aria-valuemin="0" aria-valuemax="100"></div></div>';
//               $i++;
//        }
// }


// task 5
 $arr = [
 	[
 		'img/demo/authors/sunny.png', 'img/demo/authors/josh.png', 'img/demo/authors/jovanni.png', 'img/demo/authors/roberto.png'
 	], 
 	[
 		'Sunny A.', 'Jos K.', 'Jovanni Lo', 'Jovanni Lo'
 	], 
 	[
 		'Sunny A. (UI/UX Expert)', 'Jos K. (ASP.NET Developer)', 'Jovanni L. (PHP Developer)', 'Roberto R. (Rails Developer)'
 	], 
 	[
 		'Lead Author', 'Partner &amp; Contributor', 'Partner &amp; Contributor', 'Partner &amp; Contributor'
 	], 
 	[
 		'https://twitter.com/@myplaneticket', 'https://twitter.com/@atlantez', 'https://twitter.com/@lodev09', 'https://twitter.com/@sildur'
 	], 
 	[
 		'https://wrapbootstrap.com/user/myorange', 'https://wrapbootstrap.com/user/Walapa', 'https://wrapbootstrap.com/user/lodev09', 'https://wrapbootstrap.com/user/sildur'
 	], 
 	[
 		'@myplaneticket', '@atlantez', '@lodev09', '@sildur'
 	], 
 	[
 		'Contact Sunny', 'Contact Jos', 'Contact Jovanni', 'Contact Roberto'
 	]
 ];
 

foreach ($arr as $v => $k) {
	echo $k[1].  $v[1];
}


 // echo '<div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0"><img src="'. $img .'" alt="'. $alt .'" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;"><div class="ml-2 mr-3"><h5 class="m-0">'. $h .'<small class="m-0 fw-300">'. $smal .'</small></h5><a href="'. $first_href .'" class="text-info fs-sm" target="_blank">'. $a .'</a> - <a href="'. $second_href .'" class="text-info fs-sm" target="_blank" title="'. $title_a .'"><i class="fal fa-envelope"></i></a></div></div>';















?>
