let personas = [];

async function runFetch() {
    try {
        //PETICION A LA API
        let resultado = await fetch('http://127.0.1.1/usuarios.php', {
            method: 'POST',
        });
        //RESPUESTA DE LA API Y CONVERSION DE LOS DATOS A UN OBJETO
        let datos = await resultado.json();
        
        
        //SE MUESTRAN LOS DATOS
        personas = datos;
           

    //EN CASO QUE FALLE LA PETICION
    } catch (error) {
        console.log("Error al realizar la petición:", error)
    }
}



