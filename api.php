<?php
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/function.php");


$offerID = getUrlQuery($_SERVER['REQUEST_URI'], "oid");
$userID = getUrlQuery($_SERVER['REQUEST_URI'], "uid");
$ip = getUrlQuery($_SERVER['REQUEST_URI'], "ip");

if ($_GET['action'] == "reg") {
	
}

if ($_GET['action'] == "dep") {
	
}


if ($_GET['action'] == "visit") {
	$query = "SELECT * FROM statOffer WHERE offerID='$offerID' AND userID='$userID' AND ip='$ip'";
	$res = mysqli_query($link, $query);

	if(countDB($res) > 0){
		$query ="UPDATE statOffer SET view=view+1 WHERE offerID='$offerID' AND userID='$userID' AND ip='$ip'";
		$result_sql = mysqli_query($link, $query);
	}
	else{
		$query ="INSERT INTO statOffer(offerID, userID, ip, view) VALUES('$offerID','$userID', '$ip', 1)";
		$result_sql = mysqli_query($link, $query);
	}
}

mysqli_close($link);
?>