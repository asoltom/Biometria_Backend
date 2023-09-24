// ---------------------------------------------------
//
// versión fake de una función de la lógica
//
// usuario:Texto -> diHola() -> (nombre:Texto, saludo:Texto) | error:Texto
//
// usuario: se enviará de forma implícita en la sesión
// (nombre:Texto, saludo:Texto) | error:Texto : devuelto via callback( err, res )
//
// ---------------------------------------------------
function diHola( cb ) {

	// preparar la llamada remota
	var xmlhttp = new XMLHttpRequest()
	xmlhttp.onreadystatechange = function() {
		// callback para cuando llegue la respuesta
		// de la petición que haremos más abajo

		if( this.readyState == 4 && this.status == 200 ){
			// este es el texto JSON recibido la llamada a
			// demo_file.php, pasado a objeto JSON 
			console.log( "recibo: " + this.responseText )
			var resultado = JSON.parse(this.responseText)

			if ( resultado.error != 0 ) {
				cb( resultado.error, null )
				return
			}

			// no hay error, devuelvo el resultado
			cb( null, resultado ) 
		}
	}
	
	// llamamos *remotamente* al fichero diHola.php
	// (la verdadera función de la lógica)
	xmlhttp.open("GET", "../rest/diHola.php", true)
	xmlhttp.send()

} // ()
