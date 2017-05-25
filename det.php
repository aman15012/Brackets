<!DOCTYPE html>
<html>

  <head>
    
    
    <link rel="stylesheet" href="main2.css">
    <link rel="stylesheet" href="maind.css">
    
  </head>

  <body>
    <div class="nav">
              <div id="i"><a href="navigbar.html">
      <img src="brack.png" id="p"/></a>
      </div>
      <div class="container">
        <ul class="pull-left" >
          <li><a href="navigbar.html" >HOME</a></li>
               <li>|</li>
          <li><a href="det.php" class="act">DETERMINANT</a></li>
          <li>|</li>
          
          <li><a href="info.php">INFO</a></li>
          <li>|</li>
          <li><a href="inv.php">INVERSE</a></li>
          <li>|</li>
          <li><a href="ech.php" >ECHELON</a></li>
     
        </ul>
        <ul class="pull-right">
          <li><a href="gloss.html">GLOSSARY</a></li>
          <li>|</li>
          <li><a href="contacts.html">CONTACT</a></li>
        </ul>
      </div>
    </div>
    <?php

error_reporting(0); // Turn off all error reporting

?>

 
        








 
    <div class="neighborhood-guides">
    <div class="container">
    <h1>Determinant</h1>

    
    </div>
    </div>
<br>
<br>

<br>

<br>

    <div class="container">
    <div class="row">
        <div class="col-md-6">
       <h2>Your matrix was</h2>
       <br> 
  <form action="info.php" method="get">
  <div class="matrix">
  <input type="number" name="one" value="<?php $one = $_GET["one"]; ?><?php echo $one ?>" required>
  <input type="number" name="two" value="<?php $two =$_GET["two"]; ?><?php echo $two ?>" required>
  <input type="number" name="three" value="<?php $three = $_GET["three"]; ?><?php echo $three ?>" required>
  <br>
  <input type="number" name="four" value="<?php $four =$_GET["four"]; ?><?php echo $four ?>" required>
  <input type="number" name="five" value="<?php $five = $_GET["five"]; ?><?php echo $five ?>" required>
  <input type="number" name="six" value="<?php $six =$_GET["six"]; ?><?php echo $six ?>" required>
  <br>
  <input type="number" name="seven" value="<?php $seven = $_GET["seven"]; ?><?php echo $seven ?>" required>
  <input type="number" name="eight" value="<?php $eight =$_GET["eight"]; ?><?php echo $eight ?>" required>
  <input type="number" name="nine" value="<?php $nine = $_GET["nine"]; ?><?php echo $nine ?>" required>
  <br><br>
  <button type="reset" class="btn">Reset to Default</button>
    </div>


      
        </div>
      <div class="col-md-3">
  <div class="det">
  <h2>The associated <a href="gloss.html" style="color: black">determinant</a> value is:</h2>
  <br>
  <br>
  <p style="border: 2px dashed; font-size: 60px"><?php $one = $_GET["one"]; ?><?php $two =$_GET["two"]; ?><?php $three = $_GET["three"]; ?><?php $four =$_GET["four"]; ?><?php $five = $_GET["five"]; ?><?php $six =$_GET["six"]; ?><?php $seven = $_GET["seven"]; ?><?php $eight =$_GET["eight"]; ?><?php $nine = $_GET["nine"]; ?><?php $det = $one*($five*$nine-$eight*$six)-$two*($four*$nine-$seven*$six)+$three*($four*$eight-$seven*$five); ?><?php echo $det ?></p>
  <br>
  <br><div class="blink">
  <h2><a href="info.php"></a></h2>
  <button type="submit" class="btn">Get Information -}</button>  
  </div>
  </form>
      
      </div>
      
      </div>
    </div>
  </div>

<br>
<br>
<br>
<br>

<br>
<br>

<hr width="50%" align="centre" size="10px">
<p id="copy">  BRĀKETS PVT LTD</p>
        


  </body>
</html>