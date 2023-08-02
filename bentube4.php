![tv-627876_1280-1](https://github.com/ARTBEN18/ARTBEN18/assets/140777730/e3c2ee6d-1309-42d3-9b7e-0e09a55166d1)
![download telephone](https://github.com/ARTBEN18/ARTBEN18/assets/140777730/3a28c475-c3fd-48ae-8c61-2af8f023fc70)
![download tablette](https://github.com/ARTBEN18/ARTBEN18/assets/140777730/bddb15d5-989c-4aee-88df-dd476f69ab05)
![download laptop](https://github.com/ARTBEN18/ARTBEN18/assets/140777730/d62c6ba7-13a1-4f4b-b3a3-8d1d5b8dc769)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site d'achat</title>
</head>
<body>
       <p> television</p><br>
        <div class="tet1">
          <img src="tv-627876_1280-1.jpg">
            <form action="" method="get"> 
              <input type="submit" name="bouton" value="achter">
              <input type="hidden" name="hidden1">
            </form>
        </div>
        <?php
if(isset($_GET['hidden1'])) {?>
<html>
    <head>
<link rel="stylesheet" href="index.css">
<meta charset="UTF-8">
</head>
<body>
<div class="comand">
   <form>
    <input type="number" name="prix1" placeholder="prix television">
    <br>
    <br>
    <input type="number" name="quantite1" placeholder="entrer la quantite">
    <br>
    <br>
    <input type="hidden" name="hidden1_1" value="suivant">
    <input type="submit" name="bouton" value="suivant">
  </form>
</div>
</body>
<?php } ?>

<?php
if(isset($_GET['prix1']) and isset($_GET['quantite1'])){
$prix1=$_GET['prix1'];
$quantite1=$_GET['quantite1'];
$total1= $prix1 * $quantite1;
echo"la somme est:$"."$total1";
echo"<br>";
}
if(isset($_GET['hidden1_1'])){?>
<form action="" method="get">
<input type="number" name="argent_recu1" placeholder="quantite d'argent recu" step="any">
    <input type="hidden" name="total1" value="<?= $total1 ?>">
    <input type="submit" name="bouton" value="suivant"> 
</form>
<?php }?>
<?php
    if(isset($_GET['argent_recu1'])){
    $argent_recu1=$_GET['argent_recu1'];
    $monnaie1= $argent_recu1 - $_GET["total1"];
    echo "<h4>la quantite de monnaie restant <br>sur la television est:$"."$monnaie1</h4>";
}?>

    <div class="tet2">
    <p> tablette</p><br>
        <img src="download tablette.jpeg">
        <form action="" method="get"> 
           <input type="submit" name="bouton" value="achter">
           <input type="hidden" name="hidden2">
        </form>
    </div>
    <?php
    if(isset($_GET['hidden2'])) {?>
<html>
    <head>
<link rel="stylesheet" href="index.css">
<meta charset="UTF-8">
</head>
<body>
<div class="comand">
   <form>
    <input type="number" name="prix2" placeholder=" prix tablette">
    <br>
    <br>
    <input type="number" name="quantite2" placeholder="entrer la quantite">
    <br>
    <br>
    <input type="hidden" name="hidden1_2" value="suivant">
    <input type="submit" name="bouton" value="suivant">
  </form>
</div>
</body>
<?php } ?>
<?php
if(isset($_GET['prix2']) and isset($_GET['quantite2'])){
$prix2=$_GET['prix2'];
$quantite2=$_GET['quantite2'];
$total2= $prix2 * $quantite2;
echo"la somme est:$"."$total2";
echo"<br>";
}
if(isset($_GET['hidden1_2'])){?>
<form action="" method="get">
<input type="number" name="argent_recu2" placeholder="quantite d'argent recu" step="any">
    <input type="hidden" name="total2" value="<?= $total2 ?>">
    <input type="submit" name="bouton" value="suivant"> 
</form>
<?php }?>
<?php
    if(isset($_GET['argent_recu2'])){
    $argent_recu2=$_GET['argent_recu2'];
    $monnaie2= $argent_recu2 - $_GET["total2"];
    echo "<h4>la quantite de monnaie restant <br>sur le tablette est:$"."$monnaie2</h4>";
}?>
    <p> ordinateur </p><br>
    <div class="tet3">
       <img src="download laptop.jpeg">
       <form action="" method="get"> 
          <input type="submit" name="bouton" value="achter">
          <input type="hidden" name="hidden3">
       </form>
    </div>
    <?php
    if(isset($_GET['hidden3'])) {?>
<html>
    <head>
<link rel="stylesheet" href="index.css">
<meta charset="UTF-8">
</head>
<body>
<div class="comand">
   <form>
    <input type="number" name="prix3" placeholder="prix ordinateur">
    <br>
    <br>
    <input type="number" name="quantite3" placeholder="entrer la quantite">
    <br>
    <br>
    <input type="hidden" name="hidden1_3" value="suivant">
    <input type="submit" name="bouton" value="suivant">
  </form>
</div>
</body>
<?php } ?>
<?php
if(isset($_GET['prix3']) and isset($_GET['quantite3'])){
$prix3=$_GET['prix3'];
$quantite3=$_GET['quantite3'];
$total3= $prix3 * $quantite3;
echo"la somme est:$"."$total3";
echo"<br>";
}
if(isset($_GET['hidden1_3'])){?>
<form action="" method="get">
<input type="number" name="argent_recu3" placeholder="quantite d'argent recu" step="any">
    <input type="hidden" name="total3" value="<?= $total3 ?>">
    <input type="submit" name="bouton" value="suivant"> 
</form>
<?php }?>
<?php
    if(isset($_GET['argent_recu3'])){
    $argent_recu3=$_GET['argent_recu3'];
    $monnaie3= $argent_recu3 - $_GET["total3"];
    echo "<h4>la quantite de monnaie restant <br>sur l'ordinateur est:$"."$monnaie3</h4>";
}?>
    <div class="tet4">
    <p> telephone</p><br>
      <img src="download telephone.jpeg">
      <form action="" method="get"> 
        <input type="submit" name="bouton" value="achter">
        <input type="hidden" name="hidden4">
    </form>
    </div>
    <?php
    if(isset($_GET['hidden4'])) {?>
<html>
    <head>
<link rel="stylesheet" href="index.css">
<meta charset="UTF-8">
</head>
<body>
<div class="comand">
   <form>
    <input type="number" name="prix4" placeholder=" prix telephone">
    <br>
    <br>
    <input type="number" name="quantite4" placeholder="entrer la quantite">
    <br>
    <br>
    <input type="hidden" name="hidden1_4" value="suivant">
    <input type="submit" name="bouton" value="suivant">
  </form>
</div>
</body>
<?php } ?>
<?php
if(isset($_GET['prix4']) and isset($_GET['quantite4'])){
$prix4=$_GET['prix4'];
$quantite4=$_GET['quantite4'];
$total4 = $prix4 * $quantite4;
echo"la somme est:$"."$total4";
echo"<br>";
}
if(isset($_GET['hidden1_4'])){?>
<form action="" method="get">
<input type="number" name="argent_recu4" placeholder="quantite d'argent recu" step="any">
    <input type="hidden" name="total4" value="<?= $total4 ?>">
    <input type="submit" name="bouton" value="suivant"> 
</form>
<?php }?>
<?php
    if(isset($_GET['argent_recu4'])){
    $argent_recu4=$_GET['argent_recu4'];
    $monnaie4= $argent_recu4 - $_GET["total4"];
    echo "<h4>la quantite de monnaie restant sur le telephone est:$"."$monnaie4</h4>";
}?>
</body>
</html>



img{
    width: 300px;
    height: 200px;
}

.tet1 img{
    border: 2px solid blue;
}
.tet2 img{
    border: 2px solid blue;
}
.tet3 img{
    border: 2px solid blue;
}
.tet4 img{
    border: 2px solid blue;
}
.tet2{
   margin-left: 25%; 
   margin-top:-23%;
}
.tet4{
    margin-left: 25%; 
    margin-top:-23%;
} 
body .comand{
    background-color: bisque;
    border-radius: 10px;
    border:2px solid blue;
    margin-right: 80%;
    padding: 15px 15px 15px 15px;
}
