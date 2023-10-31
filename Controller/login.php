<?php
include("conex.php");
// Definir las credenciales de usuario 
$usuarios = [
    'admin' => 'admin123',
    'root' => 'root123',
];

// Recibir los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar las credenciales
    if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
        // Las credenciales son válidas, redirigir al usuario a una página de éxito
        header('Location: ./../inicio.html');
    } else {
        // Las credenciales son inválidas, mostrar un mensaje de error
        echo 'Credenciales incorrectas. Por favor, inténtalo de nuevo.';
    }
}
?>