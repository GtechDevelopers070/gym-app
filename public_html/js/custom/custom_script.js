

//hiding the navbar when opening from mobiles (we need to hide this, when opening from our app only)


if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
	document.getElementById('navbar').style.display = 'block'; 
}


//other custom js 

	function w3_open() {
		document.getElementById("main").style.marginLeft = "75%";
		document.getElementById("mySidebar").style.width = "75%";
		document.getElementById("mySidebar").style.display = "block";
		document.getElementById("openNav").style.display = 'none';
	}
	function w3_close() {
		document.getElementById("main").style.marginLeft = "0%";
		document.getElementById("mySidebar").style.display = "none";
		document.getElementById("openNav").style.display = "inline-block";
	}

