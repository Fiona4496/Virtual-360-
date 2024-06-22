// verifica si se ha enviado el formulario
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexion a la base de datos
    $servername = "127.0.0.1"
    $username = "root"
    $password = "admin"
    $dbname = "login_sena"

    $conn = new mysgli($servername, $username, $password, $dbname);

    //verifica la Conexion
    if ($conn->connection.error){
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    //obtiene los datos del formulario
    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];

    //Inserta los datos de la base de datos
    $sql = "INSERT INTO tu_tabla (nombre, apellido, cedula, correo, fecha_nacimiento) VALUES ('$first', '$last', '$cedula', '$email', '$fecha_nacimiento', '$dob')";
    
    if ($conn->query($sql) == TRUE){
        echo "Registro exitoso";
    }else {
        echo "Error" .$squl. "<br>" .$conn->error;
    }

    // Cierra la Conexión
    $conn->close();
}