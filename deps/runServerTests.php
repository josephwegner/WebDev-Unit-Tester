<?
$test = false;

if(isset($_POST['test'])) {
	$test = intval($_POST['test']);
}

include("serverTests.php");

if(is_numeric($test)) {
	$methods = get_class_methods('testSuite');
	$testval = call_user_func('testSuite::'.$methods[$test]);
	$msg = Array();
	$msg['pass'] = ($testval === true) ? true : false;
	$msg['err'] = $testval;

	echo json_encode($msg);
	die();
} else {
	echo json_encode($tests);
	die();
}


?>
