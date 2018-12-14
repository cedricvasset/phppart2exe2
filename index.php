<?php
$isEasy = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part2 exe2</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <p>
    <?php
    if($isEasy==true){
      echo 'C\'est facile!!';
    }else{
      echo 'C\'est difficile !!!';
    };
    ?>
  </p>
  <p id="secondSolution">
    <?php
    if($isEasy){
      echo 'C\'est facile!!';
    }else{
      echo 'C\'est difficile !!!';
    };
    ?>
  </p>
  <p id="thirdSolution">
    <?php
    if(! $isEasy){
      echo 'C\'est difficile !!!';
    }else{
      echo 'C\'est facile!!';
    };
    ?>
  </p>
</body>
</html>
