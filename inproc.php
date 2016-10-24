<?php

//generate merchant and session token
function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = // "{"
            substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
        return $uuid;
    }
}
$GUID = getGUID();
if (isset($_SERVER['HTTP_X_PFI_SESSIONTOKEN'])) {
    header("X-PFI-SessionToken: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN']);
    $set = 'Yes';
}else{
    header("X-PFI-SessionToken: ".$GUID);
    $set = 'not set';
};

// options

$response1 = '{
	"Error":null,
	"Script":"wrong()",
	"InProcessUrl":null,
	"ShowMarketingOptIn":true
}';

$response2 = '{
	"Error":null,
	"Script":"correct()",
	"InProcessUrl":null,
	"ShowMarketingOptIn":true
}';

$response3 = '{
	"Error":null,
	"Script":"maybe()",
	"InProcessUrl":null,
	"ShowMarketingOptIn":true
}';


//respond

if ($_SERVER['HTTP_X_PFI_CALLERID'] == "a3" && $_SERVER['HTTP_X_PFI_STATUS'] == 'PfiPurchaseButtonShown') {
    $response = $response2;
}elseif($_SERVER['HTTP_X_PFI_CALLERID'] != "a3" && $_SERVER['HTTP_X_PFI_STATUS'] == 'PfiPurchaseButtonShown'){
    $response = $response1;
}else{
    $response = $response3;
}




echo $response;

$data_json = json_decode($response, true);


?>
<?php
$username = "root";
$password = "Imimobile1!";
$hostname = "104.199.52.29";
$today1 = date("Y-m-d H:i:s");
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

mysql_select_db("test") or die(mysql_error());
$r1 = array();
// chart1
$result1 = mysql_query('INSERT INTO `test`.`inproc` (`inbound`, `response`)
VALUES
("'.$_SERVER.'",
"'.$data_json.'");')
or die(mysql_error());




mysql_close($dbhandle);
?>
