    $(document).ready(function(){

    
    var api1 = $('#api1').val();
    var api2 = $('#api1').val();
function Descripta(dados){
	var mensx="";
	var l;
	var i;
	var j=0;
	var ch;
	ch = "assbdFbdpdPdpfPdAAdpeoseslsQQEcDDldiVVkadiedkdkLLnm";	
	for (i=0; i<dados.length;i++){
		j++;
		l=(Asc(dados.substr(i,1))-(Asc(ch.substr(j,1))));
		if (j==50){
			j=1;
		}
		if (l<0){
			l+=256;
		}
		mensx+=(Chr(l));
	}	
	
}
function Asc(String){
	return String.charCodeAt(0);
}
 
function Chr(AsciiNum){
	return String.fromCharCode(AsciiNum);
}

api1 = Descripta(api1);
api2 = Descripta(api2);
document.getElementById("api1").value=api1;
document.getElementById("api2").value=api2;

});
