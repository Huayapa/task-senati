function calculaMRU()
	 {
		 //declaramos las variables
		var tiempo, velocidad;
		//hacemos la llamada a los datos introducidos
		 tiempo=document.getElementById("tiempo").value;
		 velocidad=document.getElementById("velocidad").value;
		//calculamos el imc
		 distancia =tiempo * velocidad;
		//mediante if comparamos el resultado para determinar si es correcto el peso
        document.getElementById("result").value=distancia+"km";

	 }

	 function resultado() {
		var p1, p2, p3, p4,p5,p6,p7,p8,p9,p10, nota;
	
		if (document.getElementById('p12').checked==true)
			{p1=1}
		else
			{p1=0}
	
		if (document.getElementById('p23').checked==true)
			{p2=1}
		else
			{p2=0}
	
		if (document.getElementById('p31').checked==true)
			{p3=1}
		else
			{p3=0}
	
		if (document.getElementById('p43').checked==true)
			{p4=1}
		else
			{p4=0}
	
		if (document.getElementById('p51').checked==true)
			{p5=1}
		else
			{p5=0}
	
		if (document.getElementById('p62').checked==true)
			{p6=1}
		else
			{p6=0}
	
		if (document.getElementById('p71').checked==true)
			{p7=1}
		else
			{p7=0}
	
		if (document.getElementById('p83').checked==true)
			{p8=1}
		else
			{p8=0}
		if (document.getElementById('p93').checked==true)
			{p9=1}
		else
			{p9=0}
	
		if (document.getElementById('p101').checked==true)
			{p10=1}
		else
			{p10=0}
	
		nota=p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
		alert(" Aciertos: " + nota);
	
		location.reload();
	}
	function resultado2() {
		var p1, p2, p3, p4,p5,p6,p7,p8,p9,p10, nota;
	
		if (document.getElementById('p12').checked==true)
			{p1=1}
		else
			{p1=0}
	
		if (document.getElementById('p23').checked==true)
			{p2=1}
		else
			{p2=0}
	
		if (document.getElementById('p31').checked==true)
			{p3=1}
		else
			{p3=0}
	
		if (document.getElementById('p43').checked==true)
			{p4=1}
		else
			{p4=0}
	
		if (document.getElementById('p51').checked==true)
			{p5=1}
		else
			{p5=0}
	
		if (document.getElementById('p62').checked==true)
			{p6=1}
		else
			{p6=0}
	
		if (document.getElementById('p71').checked==true)
			{p7=1}
		else
			{p7=0}
	
		if (document.getElementById('p83').checked==true)
			{p8=1}
		else
			{p8=0}
		if (document.getElementById('p93').checked==true)
			{p9=1}
		else
			{p9=0}
	
		if (document.getElementById('p101').checked==true)
			{p10=1}
		else
			{p10=0}
	
		nota=p1+p2+p3+p4+p5+p6+p7+p8+p9+p10;
		//alert(" Aciertos: " + nota);
		document.getElementById("resultado").innerHTML="Calificacion"+nota;
		//console.log(nota);
		location.reload();
	}
	function prueba(){
		var contenido = "Texto";
		var p_nuevo = document.createElement('p');
		p_nuevo.innerHTML=contenido;
		var parrafo = document.getElementById('datos').getElementsByTagName('p')[0];
		document.getElementById('datos').insertBefore(p_nuevo,parrafo);
		
	}