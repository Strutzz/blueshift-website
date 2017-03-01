<?php
	if($_SERVER['HTTP_USER_AGENT'] == "Mozilla/5.0") {
		@error_reporting(0);
		@ini_set('display_errors', 'Off');
		header("Content-Type: application/json");

		$loginInfo = json_decode(file_get_contents("php://input"));
		$accountName = $loginInfo->{"accountname"};
		$password = $loginInfo->{"password"};

		if($accountName == "" || $password == "") {
			die('{"errorCode":3,"errorMessage":"Account name or password is incorrect."}');
		}

		$MySQL_Host = "127.0.0.1";
		$MySQL_User = "bshift";
		$MySQL_Password = "bxlFCq3nzYSI2WlG";
		$MySQL_DB = "blueshift";

		$SQL = new mysqli($MySQL_Host, $MySQL_User, $MySQL_Password, $MySQL_DB);

		if(mysqli_connect_error()) {
			die('{"errorCode":3,"errorMessage":"Internal error. Please try again later or contact customer support if the problem persists."}');
		}

		$AccountQuery = $SQL->query("SELECT * FROM `accounts` WHERE `name` = '".$SQL->real_escape_string($accountName)."' AND `password` = '".SHA1($SQL->real_escape_string($password))."'")->fetch_array(MYSQLI_ASSOC);
		if($AccountQuery["name"] != $accountName) {
			die('{"errorCode":3,"errorMessage":"Account name or password is incorrect."}');
		}

		$AccountID = $AccountQuery["id"];
		$Secret = $AccountQuery["secret"];
		$Premdays = $AccountQuery["premdays"];

		$CharacterQuery = $SQL->query("SELECT `name` FROM `players` WHERE `account_id` = '".$AccountID."'")->fetch_all(MYSQLI_ASSOC);

		$worldID = 0;
		$worldName = "Tibia11 Server";
		$serverAddress = $_SERVER["blueshift.strutzhq.net"];
		$serverPort = 7172;
		$freePremium = false;

		echo '{"session":{"sessionkey":"'.$accountName.'\n'.$password.'\n'.$secret.'\n'.(floor(time() / 30)).'","lastlogintime":0,"ispremium":'.($Premdays > 0 || $freePremium ? "true" : "false").',"premiumuntil":'.($freePremium ? "0" : time() + ($Premdays * 86400)).',"status":"active"},"playdata":{"worlds":[{"id":'.$worldID.',"name":"'.$worldName.'","externaladdress":"'.$serverAddress.'","externalport":'.$serverPort.',"previewstate":0}],"characters":[';
		foreach($CharacterQuery as $Character) {
			if($Character != $CharacterQuery[0]) {
				echo ',';
			}
			echo '{"worldid":'.$worldID.',"name":"'.$Character["name"].'"}';
		}
		echo ']}}';
	return;
	}
?>