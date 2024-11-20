<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nom']);
        $dni = htmlspecialchars($_POST['edat']);
        $edad = htmlspecialchars($_POST['dni']);

        echo "Nombre: $nombre";
        echo "DNI: $dni";
        echo "Edad: $edad";
}
?>
