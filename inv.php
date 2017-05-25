<!DOCTYPE html>
<html>

  <head>
    
    
    <link rel="stylesheet" href="main2.css">
    <link rel="stylesheet" href="maininv.css">
    
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
          <li><a href="det.php">DETERMINANT</a></li>
          <li>|</li>
          
          <li><a href="info.php">INFO</a></li>
          <li>|</li>
          <li><a href="inv.php" class="act">INVERSE</a></li>
          <li>|</li>
          <li><a href="ech.php">ECHELON</a></li>
        
        </ul>
        <ul class="pull-right">
          <li><a href="gloss.html">GLOSSARY</a></li>
          <li>|</li>
          <li><a href="contacts.html">CONTACT</a></li>
        </ul>
      </div>
    </div>

 
        








 
    <div class="neighborhood-guides">
    <div class="container">
    <h1>Inverse</h1>

    
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
  <form action="ech.php" method="get">
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
  <br>
  <br>
  <br>
  <button type="submit" class="btn" style="font-size: ">See Echelon -}</button> 
    </div>


      
        </div>

        <div class="col-md-6">
       <h2>The Inverse is</h2>
       <br>
<?php
error_reporting(0);
function gcd( $n1,  $n2)
{
  
  if($n1==$n2 && $n2==1)
  return 1;
  else if($n1==$n2)
  return $n1;
  else
  {
      
    for($i=1; $i<=$n1/2||$i<=$n2/2;++$i)
    {
      if($n1%$i==0&&$n2%$i==0)
      $hcf=$i;
    }
  }
  return $hcf;
}

function det($n1, $n2, $n3, $n4)
{
return ($n1*$n4-$n2*$n3);
}


  
    
    

  $arr[0][0] = $_GET["one"];
  $arr[0][1] = $_GET["two"];
  $arr[0][2] = $_GET["three"];
  $arr[1][0] = $_GET["four"];
  $arr[1][1] = $_GET["five"];
  $arr[1][2] = $_GET["six"];
  $arr[2][0] = $_GET["seven"];
  $arr[2][1] = $_GET["eight"];
  $arr[2][2] = $_GET["nine"];
  

  
  $dett=$arr[0][0]*(det($arr[1][1],$arr[2][1],$arr[1][2],$arr[2][2]))-$arr[0][1]*(det($arr[1][0],$arr[2][0],$arr[1][2],$arr[2][2]))+$arr[0][2]*(det($arr[1][0],$arr[2][0],$arr[1][1],$arr[2][1]));


  if($dett!=0)
  {
    for($i=0; $i<3; $i++)
    {
      for($j=0;$j<3;$j++)
      {
        if($dett<0)
        $invd[$i][$j]=-1*$dett;
        else
        $invd[$i][$j]=$dett;
      }
    }

    for($i=0;$i<3;$i++)
    {
      for($j=0;$j<3;$j++)
      {
        if($i==0 AND $j==0)
        $cof[$i][$j]=pow(-1, ($i+$j))*det($arr[1][1],$arr[2][1],$arr[1][2],$arr[2][2]);
        else if($i==0 && $j==1)
        $cof[$i][$j]=pow(-1, ($i+$j))*det($arr[1][0],$arr[2][0],$arr[1][2],$arr[2][2]);
        else if($i==0 && $j==2)
        $cof[$i][$j]=pow(-1, ($i+$j))*det($arr[1][0],$arr[2][0],$arr[1][1],$arr[2][1]);
        else if($i==1 && $j==0)
        $cof[$i][$j]=pow(-1, ($i+$j))*det($arr[0][1],$arr[2][1],$arr[0][2],$arr[2][2]);
        else if($i==1 && $j==1)
        $cof[$i][$j]=pow(-1, ($i+$j))*det($arr[0][0],$arr[2][0],$arr[0][2],$arr[2][2]);
        else if($i==1 && $j==2)
        $cof[$i][$j]=pow(-1, ($i+$j))*det($arr[0][0],$arr[2][0],$arr[0][1],$arr[2][1]);
        else if($i==2 && $j==0)
        $cof[$i][$j]=pow(-1, ($i+$j))*det($arr[0][1],$arr[1][1],$arr[0][2],$arr[1][2]);
        else if($i==2 && $j==1)
        $cof[$i][$j]=pow(-1, ($i+$j))*det($arr[0][0],$arr[1][0],$arr[0][2],$arr[1][2]);
        else if($i==2 && $j==2)
        $cof[$i][$j]=pow(-1, ($i+$j))*det($arr[0][0],$arr[1][0],$arr[0][1],$arr[1][1]);
        if($dett<0)
        {
          $invn[$j][$i]=-1*$cof[$i][$j];
        }
        else
        $invn[$j][$i]=$cof[$i][$j];

      }
    }
    for($i=0;$i<3;$i++)
    {
      for($j=0;$j<3;$j++)
      {
        $t=gcd(abs($invn[$i][$j]), abs($invd[$i][$j]));
        $invn[$i][$j]=$invn[$i][$j]/$t;
        $invd[$i][$j]=$invd[$i][$j]/$t;
      }
    }
  }
    ?>

    <form >
  <div class="matrix1">
  <input type="text" name="one0" value="<?php if ($dett!=0){      if($invn[0][0]==0){echo 0;
      $invd[0][0]=1;}
      if($invd[0][0]==1)
      echo $invn[0][0];
      else
      echo $invn[0][0]."/".$invd[0][0];}else{echo "X";} ?>" required>
    <input type="text" name="four0" value="<?php if ($dett!=0){           if($invn[0][1]==0){echo 0;
      $invd[0][1]=1;}
      if($invd[0][1]==1)
      echo $invn[0][1];
      else
      echo $invn[0][1]."/".$invd[0][1];}else{echo "X";} ?>" required>
      <input type="text" name="seven0" value="<?php if ($dett!=0){          if($invn[0][2]==0){echo 0;
      $invd[0][2]=1;}
      if($invd[0][2]==1)
      echo $invn[0][2];
      else
      echo $invn[0][2]."/".$invd[0][2];}else{echo "X";} ?>" required>


  <br>
    <input type="text" name="two0" value="<?php if ($dett!=0){        if($invn[1][0]==0){echo 0;
      $invd[1][0]=1;}
      if($invd[1][0]==1)
      echo $invn[1][0];
      else
      echo $invn[1][0]."/".$invd[1][0];}else{echo "X";} ?>" required>
      <input type="text" name="five0" value="<?php if ($dett!=0){           if($invn[1][1]==0){echo 0;
      $invd[1][1]=1;}
      if($invd[1][1]==1)
      echo $invn[1][1];
      else
      echo $invn[1][1]."/".$invd[1][1];}else{echo "X";} ?>" required>
        <input type="text" name="eight0" value="<?php if ($dett!=0){ 
          if($invn[1][2]==0){echo 0;
      $invd[1][2]=1;}
      if($invd[1][2]==1)
      echo $invn[1][2];
      else
      echo $invn[1][2]."/".$invd[1][2];}else{echo "X";} ?>" required>



  <br>
    <input type="text" name="three0" value="<?php if ($dett!=0){        if($invn[2][0]==0){echo 0;
      $invd[2][0]=1;}
      if($invd[2][0]==1)
      echo $invn[2][0];
      else
      echo $invn[2][0]."/".$invd[2][0];}else{echo "X";} ?>" required>

  <input type="text" name="six0" value="<?php if ($dett!=0){          if($invn[2][1]==0){echo 0;
      $invd[2][1]=1;}
      if($invd[2][1]==1)
      echo $invn[2][1];
      else
      echo $invn[2][1]."/".$invd[2][1];}else{echo "X";} ?>" required>
  <input type="text" name="nine0" value="<?php if ($dett!=0){           if($invn[2][2]==0){echo 0;
      $invd[2][2]=1;}
      if($invd[2][2]==1)
      echo $invn[2][2];
      else
      echo $invn[2][2]."/".$invd[2][2];}else{echo "X";} ?>" required>
  <br><br>
 
    </div>
    </form>
       
  <div class="blink">
  <h2><a href="gloss.html" style="color: black"><?php if($dett==0){echo "Not-Invertible!";}else{echo "Invertible";}?></a></h2>
   
  </div>
  </form>
      
      </div>
      
      </div>
    </div>
  </div>

<br>
<br>



<hr width="50%" align="centre" size="10px">
<p id="copy">  BRĀKETS PVT LTD</p>
        


  </body>

</html>