<?
var $test = false;

if(isset($_POST['test'])) {
	$test = intval($_POST['test']);
}

var $tests = Array();

array_push($tests, new test("Pass Function", "pass");
array_push($tests, new test("Fail Function", "fail");

if($test) {
	return call_user_func($tests[$test]->tester);
} else {
	
}


function pass() {
	return true;
}
function fail() {
	return "This function was supposed to fail";
}
class test {
	public var $titl;
	public var $tester;
	function __construct($ttl, $funct) {
		$this->titl = $ttl;
		$this->tester = $funct;
	}
}
?>
