<?php
session_start();
require("db.php");

	if(!empty($_POST["getMoneyUser"])){
		
		$user = trim($_POST["getMoneyUserID"]);
		$query = "SELECT * FROM Users WHERE Login='$user'";
		$res = mysqli_query($link, $query);

		$bal = "";
		$date = date("d-m-Y H:i:s");
	    while($row=mysqli_fetch_array($res)){
	        $bal = $row['Money'];
	    }
	    
	    if($bal != "0"){
	    	$query ="INSERT INTO RequestMoney(Login, Date, Money, Status) VALUES('$user','$date', '$bal', 'В обработке')";	

		    $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		    $result = array(
		    	'res' => "true"
				);

		    $query ="UPDATE Users SET Money='0'WHERE Login='$user'";
		    $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	    }
		else{
			$result = array(
	    	'error' => "noCorrect"
			);
		}

		echo json_encode($result);
		exit;
	}

	if(!empty($_POST["adm_login"]) && !empty($_POST["adm_pass"])){
		$email = trim($_POST["adm_login"]);
		$pass = trim($_POST["adm_pass"]);

		if($email == "admin" && $pass == "admin"){
			$_SESSION['admin']= $email;
			$result = array(
	    	'res' => "true"
			);	
		}
		else{
			$result = array(
	    	'error' => "noCorrect"
			);
		}

		echo json_encode($result);
		exit;
	}

	if(!empty($_POST["addOfferName"]) && !empty($_POST["addOfferTarget"]) && !empty($_POST["addOfferCoun"]) && !empty($_POST["addOfferTag"])){

		$name = trim($_POST["addOfferName"]);
		$target = trim($_POST["addOfferTarget"]);
		$country = trim($_POST["addOfferCoun"]);
		$tag = trim($_POST["addOfferTag"]);

		$query ="INSERT INTO Offers(Name, Target, Country, Tag) VALUES('$name','$target', '$country', '$tag')";
			
		    $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		    $result = array(
		    	'res' => "true"
				);

		echo json_encode($result);
		exit;
	}

	if(!empty($_POST["accOfferID"]) && !empty($_POST["accOfferEmail"])){

		$idOffer = trim($_POST["accOfferID"]);
		$Email = trim($_POST["accOfferEmail"]);

		$query ="INSERT INTO accOffer(offerID, Email) VALUES('$idOffer','$Email')";
			
		    $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		    $result = array(
		    	'res' => "true"
				);

		echo json_encode($result);
		exit;
	}

	if(!empty($_POST["user_login"]) && !empty($_POST["user_pass"])){
		$email = trim($_POST["user_login"]);
		$pass = trim($_POST["user_pass"]);

		$queryReEmail = "SELECT * FROM Users WHERE Login='$email'";
		$resEmail = mysqli_query($link, $queryReEmail);
		$num_rows = mysqli_num_rows($resEmail);

		if($num_rows > 0){
			$_SESSION['user']= $email;
			$result = array(
	    	'res' => "true"
			);	
		}
		else{
			$result = array(
	    	'error' => "noCorrect"
			);
		}
		echo json_encode($result);
		exit;
	}

	if(!empty($_POST["addUserEmail"]) && !empty($_POST["addUserPass"])){
		$email = trim($_POST["addUserEmail"]);
		$pass = trim($_POST["addUserPass"]);

		$queryReEmail = "SELECT * FROM Users WHERE Login='$email'";
		$resEmail = mysqli_query($link, $queryReEmail);
		$num_rows = mysqli_num_rows($resEmail);

		if($num_rows > 0){
			$result = array(
	    	'error' => "Email"
			);	
			echo json_encode($result);
			exit;
		}
		else{
			$query ="INSERT INTO Users(Login, Pass) VALUES('$email','$pass')";
		    $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		    $result = array(
		    	'res' => "true"
				);
		}

		echo json_encode($result);
		exit;
	}
	else{
		$result = array(
	    	'error' => "noData"
		);
	}

	echo json_encode($result);
	mysqli_close($link);
?>