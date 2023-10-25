<?php
 $paragraph = isset($_POST['paragraph']) ? $_POST['paragraph'] :  "NO TEXT TO CENSURE";

 $word_to_censure = $_POST['word_to_censure'] ?? 'NO WORD TO CENSURE';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>


  <title>Atterraggio Form POST</title>
</head>
<body>

<div class="container my-5">
  <div class="row">
    <div class="col-6">
      <h2>Atterraggio Form in POST</h2>
      <h2>Text sended: <?php echo $paragraph ?> has <?php echo  ?> words</h2>

    </div>
  </div>
</div>
  
</body>
</html>