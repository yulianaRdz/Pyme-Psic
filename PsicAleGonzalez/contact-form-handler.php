<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'usuario@gmail.com';
    $email_subject = "Nuevo mensaje de formulario de contacto";
    $email_body = "Nombre del usuario: $name\n".
                  "Correo electrónico del usuario: $visitor_email\n".
                  "Asunto: $subject\n".
                  "Mensaje del usuario:\n$message\n";

    $to = "tu_correo@example.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: contacto.html?success=true");
    } else {
        header("Location: contacto.html?success=false");
    }
} else {
    header("Location: contacto.html");
}
?>
