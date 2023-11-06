<?php
$mysqli = new mysqli("localhost", "root", "", "chatbot");

if ($mysqli->connect_error) {
    die("Error en la conexión a la base de datos: " . $mysqli->connect_error);
}

$userMessage = $_POST['userMessage'];

$query = "SELECT respuesta FROM base_de_conocimiento WHERE pregunta LIKE ?";
$stmt = $mysqli->prepare($query);
$keyword = "%" . $userMessage . "%";
$stmt->bind_param("s", $keyword);
$stmt->execute();
$stmt->bind_result($respuesta);
$stmt->fetch();

if (!empty($respuesta)) {
    echo $respuesta;
} else {
    echo "Lo siento, no puedo responder a esa pregunta en este momento.";
}

$mysqli->close();
?>
