<?
//This is where you set up the titles for your tests.
//The index of the the title element MUST match the
//index of the test function in the testSuite class.
//Otherwise, your title will be matched with a nonexistant
//test. 
//I'm putting a comment of the index after each title, and before
//each test function so that I can easily make sure that my title/function match
$tests = Array(
	"Pass Test",//1
	"Fail Test"//2
);

//This is where you create your actual test functions.  Read the comment above
//about the importance of matching your indexes between titles and functions.
//
//Note: your functions CAN NOT require any parameters, and MUST be static.
//The intent of a unit test is that you will manually set the preconditions
//and manually calculate the final output.  So, all of that should actually
//be inside of the function.
//
//You can name the functions whatever you want.  They don't need to match
//the title, I just think it is easier to read if you do it that way.
class testSuite {
	public $titles = Array();

	//TEST 1
	//Title: Pass Test
	//Should just pass
	static function passTest() {
		sleep(5);
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

