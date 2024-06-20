<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXO: Code Morse</title>
</head>
<body>
  
<h1 style="text-align:center; color:#FF0000"> Bienvenue sur ma page de traduction de texte </h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
  <div class="col-md-6">
                <label for="nom" class="form-label"><strong>Saisissez votre texte à traduire </strong></label>
                <input type="text" class="form-control inputcontact" id="text" name="text" placeholder="traduire" required >        
</div>

<button type="submit" class="btn btn-primary">Traduire</button>
</form>





<?php

if (isset ($_POST['text']))
{                 // Début "post"

$string = $_POST ['text'];

function stringToMorse($string) {
  $morseCode = array(
    'A' => '.-', 
    'B' => '-...', 
    'C' => '-.-.', 
    'D' => '-..', 
    'E' => '.',
    'F' => '..-.', 
    'G' => '--.', 
    'H' => '....', 
    'I' => '..', 
    'J' => '.---',
    'K' => '-.-', 
    'L' => '.-..', 
    'M' => '--', 
    'N' => '-.', 
    'O' => '---',
    'P' => '.--.', 
    'Q' => '--.-', 
    'R' => '.-.', 
    'S' => '...', 
    'T' => '-',
    'U' => '..-', 
    'V' => '...-', 
    'W' => '.--', 
    'X' => '-..-', 
    'Y' => '-.--',
    'Z' => '--..', 
    '0' => '-----', 
    '1' => '.----', 
    '2' => '..---', 
    '3' => '...--',
    '4' => '....-', 
    '5' => '.....', 
    '6' => '-....', 
    '7' => '--...', 
    '8' => '---..',
    '9' => '----.', ' ' => '/'
  );

  $string= iconv ('UTF-8', 'ASCII//TRANSLIT', $string);   // pour traduire les accents
  $result = '';

  for ($i = 0; $i < strlen($string); $i++) {
    $char = strtoupper($string[$i]);

    if (array_key_exists($char, $morseCode)) {
      $result.= $morseCode[$char]. ' ';
    }
  }

  return trim($result);
}


$morse= stringToMorse ($string);

echo  "Votre mot ou phrase à traduire est:($string). <br>";
echo  "Voici la traduction:($morse)";



}       // fin méthod post


?>





</body>
</html>