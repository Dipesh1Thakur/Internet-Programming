<?php

$id = $_GET["id"];
$leaving = $_GET["leaving"];
$going = $_GET["going"];
$depart = $_GET["depart"];
$contact = $_GET["contact"];
$passenger=$_GET["passenger"];



if(isset($_GET["id"]))
{
	require 'dompdf-0.5.1/dompdf_config.inc.php';
	$obj_dom=new DOMPDF();
    // $pdf_content='demo';
	$pdf_content="<table border='1px'><tr><th>ID</th><th>Leave</th><th>Going</th><th>Depart</th><th>contact</th><th>passenger</th></tr><tr><th>$id</th><th>$leaving</th><th>$going</th><th>$depart</th><th>$contact</th><th>$passenger</th>";
	echo $pdf_content;
	$obj_dom->load_html($pdf_content);
	$obj_dom->render();
	$obj_dom->stream('dom_pdf.pdf');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>File Download</title>
</head>
<body>


</body>
</html>