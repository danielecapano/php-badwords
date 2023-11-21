<?php 
$censured_word = $_POST['censured_word'];
$text = $_POST['text'];
$text_censored = str_replace($censured_word, '***', $text)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa testo</title>
</head>
<body>
    <p>Parola da sostituire: <?php echo $censured_word ?></p>
    <p><?php echo $text ?></p>
    <p>Questo testo contiene <?php  echo strlen($text)?> caratteri</p>
    <p>Testo censurato:
    </p>
    <p><?php echo $text_censored?></p>
    <p>Il testo censurato contiene <?php  echo strlen($text_censored)?> caratteri</p>
</body>
</html>