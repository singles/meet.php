(function () {
	var mobile = document.getElementById("mobile-menu");

	if (document.addEventListener) {
	    mobile.addEventListener("change", function (event) {
	    	window.location = event.target.options[event.target.selectedIndex].value;
	    }, false);
	}
})();