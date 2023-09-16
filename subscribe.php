<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];
    // Hier kun je de code toevoegen om het e-mailadres op te slaan in een database of een bestand.
    // Verstuur ook een bevestigingsmail naar de gebruiker als dat nodig is.

    // Voorbeeld: Sla het e-mailadres op in een tekstbestand.
    file_put_contents("subscribers.txt", $email . PHP_EOL, FILE_APPEND);
}
?>
