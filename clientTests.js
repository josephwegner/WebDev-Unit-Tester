var clientTests = [];

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
