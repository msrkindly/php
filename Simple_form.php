<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form</h1>
<form method="post" >
    <label for="user">Label</label>
    <input type="text" name="user" id="username">
    <input type="submit" value="submitta">
    <?php 
    //Se il parametro user nel body della richiesta POST e` impostato allora  la variabile utente diventa il valore della richiesta post e ouput prende il valore dell ip dell utente connesso e lo stampa a video 
    if (isset($_POST['user'])){
        
        $utente=$_POST['user'] ;
        echo "\nIl nome utente e` " . $utente . "  ||||   ";
        $output=$_SERVER['REMOTE_ADDR'];
        echo "\n\n\n\nip: " . $output;
        $file = '/var/www/html/sito/output.txt';
        file_put_contents($file, $output . "\n", FILE_APPEND); // FILE_APPEND aggiunge il contenuto al file esistente
    }

    ?>
</body>
</html>
