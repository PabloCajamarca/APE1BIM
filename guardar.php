<?php
require_once "conexion.php";

$alerta ="";
$tipo ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $correo = filter_var(trim($_POST['correo']), FILTER_VALIDATE_EMAIL);
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    // VALIDAR NOMBRE
    if(strlen($nombre) < 3){

        echo "
        <script>
            alert('El nombre debe tener mínimo 3 caracteres');
            window.location = 'index.php';
        </script>
        ";

        exit;
    }

    // VALIDAR SOLO LETRAS
    if(!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/", $nombre)){

        echo "
        <script>
            alert('El nombre solo puede contener letras y espacios');
            window.location = 'index.php';
        </script>
        ";

        exit;
    }

    // VERIFICAR SI EL CORREO YA EXISTE
    $verificar = $conexion->prepare("SELECT id FROM formulario WHERE correo = ?");
    $verificar->bind_param("s", $correo);
    $verificar->execute();
    $verificar->store_result();

    if($verificar->num_rows > 0){

        echo "
        <script>
            alert('Correo ya ingresado, intente nuevamente');
            window.location = 'index.php';
        </script>
        ";

        exit;

    } else {

        $stmt = $conexion->prepare("INSERT INTO formulario (nombre, correo, mensaje) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $correo, $mensaje);

        if($stmt->execute()){

            echo "
            <script>
                alert('Mensaje enviado exitosamente');
                window.location = 'index.php';
            </script>
            ";

        } else {

            echo "
            <script>
                alert('Error al enviar el mensaje');
                window.location = 'index.php';
            </script>
            ";
        }

        $stmt->close();
    }

    $verificar->close();
    $conexion->close();
}

?>