<?php
echo "La materia preferita di ", $_GET ["fname"];
echo " ", $_GET ["cognome"];
if (isset($_GET['materia'])) {
    $materia = $_GET['materia'];
    echo " è  $materia";
} else {
    echo "Nessuna materia selezionata.";
}
?>