<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header></header>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="empresa.html">Empresa</a>
        <a href="servicios.html">Servicios</a>
        <a href="clientes.html">Clientes</a>
        <a href="contacto.html">Contacto</a>
    </nav>
    <main>

        <h1>Contáctenos</h1>

        <p>
        <?php
            //capturamos datos enviados por el form
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $comentarios = $_POST['comentarios'];
            //configuramos email de destino
            $destinatario = 'ACA PONÉ TU EMAIL';
            $asunto = 'Email enviado desde mi sitio';
            $cuerpo = '<div style=" background-color: #fbc2ad;padding: 20px;border: #5d3529 1px solid;color: #5d3529;font-size: 20px;">';
            $cuerpo .= 'Nombre: '.$nombre.'<br>';
            $cuerpo .= 'Email: '.$email.'<br>';
            $cuerpo .= 'Comentarios: '.$comentarios;
            $cuerpo .= '</div>';
            $headers[] = 'MIME-Version: 1.0'."\r\n";
            $headers[] = 'Content-type: text/html; charset=utf-8'."\r\n";
            // enviamos el email
            mail($destinatario, $asunto, $cuerpo, $headers);
            //mensaje personalizado
            echo 'Gracias '.$nombre.' por contactarnos.'
        ?>
        </p>
        

    </main>
    <footer></footer>
</body>
</html>