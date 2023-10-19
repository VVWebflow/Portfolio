<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST["name"];
    $email = $_POST["email"];
    $telefon = $_POST["telephone"];
    $poruka = $_POST["message"];

    $to = "vvwebflow@gmail.com";
    $subject = "Kontakt forma - Poruka od: $ime";
    $message = "Ime: $ime\nEmail: $email\nTelefon: $telefon\nPoruka:\n$poruka";

    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    
    if (mail($to, $subject, $message, $headers)) {
        echo "Vaša poruka je uspešno poslata.";
    } else {
        echo "Došlo je do greške prilikom slanja poruke.";
    }
}
?>
