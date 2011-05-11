<?
$test = false;

if(isset($_POST['test'])) {
	$test = intval($_POST['test']);
}

$tests = Array(
	"Pass Test",//1
	"Fail Test"//2
);

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

class testSuite {
	public $titles = Array();

	//TEST 1
	//Title: Pass Test
	//Should just pass
	static function passTest() {
		return true; //just pass
	}

	//TEST 2
	//Title: Fail Test
	//Should just fail
	static function failTest() {
		return "This test was supposed to fail"; //just fail
	}
}
?>
