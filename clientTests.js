var clientTests = [];

//Add testing functions below here//

//Simply push a new object literal onto the clientTests array.
//The object MUST have a title parameter (the title of your test)
//and a test parameter, which is the function you are going to test
//If the function is a success, return true.  If not return an
//error message.
clientTests.push({
	title: "Pass Test",
	test: function() {
		return true;
	}
});

clientTests.push({
	title: "Fail Test",
	test: function() {
		return "This test was supposed to fail";
	}
});
