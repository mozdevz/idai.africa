var cont = 0;	
var cont1 =0;	
var cont2=0;

	function local() {	
		if (cont == 0) {
			document.getElementById("local").style.display = "block";
			document.getElementById("remote").style.display = "none";
			document.getElementById("need").style.display = "none";				
			cont = 1;
		}else{
			document.getElementById("local").style.display = "none";
			cont = 0;
		}
	}

	function remote(){
		if (cont1 == 0) {
			document.getElementById("local").style.display = "none";
			document.getElementById("remote").style.display = "block";
			document.getElementById("need").style.display = "none";				
			cont1 = 1;
		}else{
			document.getElementById("remote").style.display = "none";
			cont1 = 0;
		}	
	}

	function need(){
		if (cont2== 0) {
			document.getElementById("local").style.display = "none";
			document.getElementById("remote").style.display = "none";
			document.getElementById("need").style.display = "block";				
			cont2=1;
		}else{
			document.getElementById("need").style.display = "none";
			cont2 = 0;
		}
	}