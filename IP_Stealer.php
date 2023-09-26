// Prende l'indirizzo IP del pc che si connette al server e lo registra nel file  "output.txt"
// Ricorda di dare permessi di scrittura al file

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php      
        $output=$_SERVER['REMOTE_ADDR'];
        echo "\n\n\n\nip: " . $output;
        $file = '/var/www/html/sito/output.txt';
        file_put_contents($file, $output . "\n", FILE_APPEND); // FILE_APPEND aggiunge il contenuto al file esistente
    ?>
</body>
</html>
