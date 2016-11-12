
function load(content, page){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange=function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById(content).innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", page, true);
	xhttp.send();
}


function enableInput(){
	$("input").prop('disabled', false);
	$("form button").css("display","block");
}