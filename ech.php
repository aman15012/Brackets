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
          <li><a href="inv.php">INVERSE</a></li>
          <li>|</li>
          <li><a href="ech.php" class="act">ECHELON</a></li>

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
    <h1>Reduced Echelon</h1>

    
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
  </div>
  </form>
  


      
        </div>

        <div class="col-md-6">
       <h2>The <a href="gloss.html" style="color: black">RREF</a> is</h2>
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

  $checkd=array(1, 1);
  $tempd=1;
  $f=0;
  $s=0;
  
  for($i=0; $i<3; $i++)
  {
    $fd[$i]=1;
    $sd[$i]=1;
    $td[$i]=1;
  }
  


  $fn[0] = $_GET["one"];
  $fn[1] = $_GET["two"];
  $fn[2] = $_GET["three"];
  $sn[0] = $_GET["four"];
  $sn[1] = $_GET["five"];
  $sn[2] = $_GET["six"];
  $tn[0] = $_GET["seven"];
  $tn[1] = $_GET["eight"];
  $tn[2] = $_GET["nine"];
  
  if($fn[0]==0 && $fn[1]==0 && $fn[2]==0 && $sn[0]==0 && $sn[1]==0 && $sn[2]==0 && $tn[0]==0 && $tn[1]==0 && $tn[2]==0)
    {

        $fd[0]=$fd[1]=$fd[2]=$sd[0]=$sd[1]=$sd[2]=$td[0]=$td[1]=$td[2]=1;
        $f=1;$s=1;
    }
  if($fn[0]==0 && $sn[0]!=0 && $s!=1)
  {
      
    for($i=0;$i<3;$i++)
    {
      $tempfn[$i]=$fn[$i];
      $fn[$i]=$sn[$i];
      $sn[$i]=$tempfn[$i];
      $tempfd[$i]=$fd[$i];
      $fd[$i]=$sd[$i];
      $sd[$i]=$tempfd[$i];

    }

  }
  else if($s!=1 && $fn[0]==0)
  {
      
    for($i=0;$i<3;$i++)
    {
      $tempfn[$i]=$fn[$i];
      $fn[$i]=$tn[$i];
      $tn[$i]=$tempfn[$i];
      $tempfd[$i]=$fd[$i];
      $fd[$i]=$td[$i];
      $td[$i]=$tempfd[$i];

    }

  }
  if($s!=1)
    {


  $checkn[0]=$sn[0];
  $checkd[0]=$fn[0];
  $checkn[1]=$tn[0];
  $checkd[1]=$fn[0];
  $sn[0]=0;
  $tn[0]=0;


  for($i=1;$i<3;$i++)
  {
    $tempn=$fn[$i]*$checkn[0];
    $tempd=$fd[$i]*$checkd[0];
    $sd[$i]*=$tempd;
    $sn[$i]*=$tempd;
    $sn[$i]-=$tempn;

  }

  for($i=1;$i<3;$i++)
  {
    $tempn=$fn[$i]*$checkn[1];
    $tempd=$fd[$i]*$checkd[1];
    $td[$i]*=$tempd;
    $tn[$i]*=$tempd;
    $tn[$i]-=$tempn;

  }
    }
  if($f!=1 && $s!=1)
    {


  if($sn[1]==0 && $tn[1]!=0)
  {
      
    for($i=0;$i<3;$i++)
    {
      $tempfn[$i]=$sn[$i];
      $sn[$i]=$tn[$i];
      $tn[$i]=$tempfn[$i];
      $tempfd[$i]=$sd[$i];
      $sd[$i]=$td[$i];
      $td[$i]=$tempfd[$i];

    }
  }
  if($sn[1]==0 && $tn[1]==0 && $sn[2]!=0)
  {
    $fn[2]=$tn[2]=0;
    $sn[2]=1;
    $f=1;
  }

  if($sn[1]!=0 && $tn[1]==0 && $tn[2]==0)
  {
    $checkn[0]=$fn[1];
    $checkd[0]=$sn[1];

    $tempn=$sn[2]*$checkn[0];
    $tempd=$sd[2]*$checkd[0];
    $fn[2]*=$checkd[0];
    $fd[2]*=$checkd[0];
    $fn[2]-=$tempn;
    $fn[1]=0;
    $t=gcd(abs($fn[2]), abs($fd[2]));
    $fn[2]=$fn[2]/$t;
    $fd[2]=$fd[2]/$t;
    if($sn[2]!=0)
    {
      $t=gcd(abs($sn[1]), abs($sn[2]));
      $sn[1]=$sn[1]/$t;
      $sn[2]=$sn[2]/$t;
    }
    $f=1;
  }


  if($sn[1]!=0 && ($tn[1]!=0 || $tn[2]!=0))
  {
    $checkn[0]=$tn[1];
    $checkd[0]=$sn[1];
    $tn[1]=0;
    $f=0;
    $tempn=$sn[2]*$checkn[0];
    $tempd=$sd[2]*$checkd[0];
    $tn[2]*=$checkd[0];
    $td[2]*=$checkd[0];
    $tn[2]-=$tempn;
    if($fd[0]!=1)
    {

      $t=gcd(abs($fn[0]), abs($fd[0]));
      $fn[0]=$fn[0]/$t;
      $fd[0]=$fd[0]/$t;
    }
    if($fd[1]!=1)
    {
      $t=gcd(abs($fn[1]), abs($fd[1]));
      $fn[1]=$fn[1]/$t;
      $fd[1]=$fd[1]/$t;
    }
    if($fd[2]!=1)
    {
      $t=gcd(abs($fn[2]), abs($fd[2]));
      $fn[2]=$fn[2]/$t;
      $fd[2]=$fd[2]/$t;
    }
    if($sd[0]!=1)
    {
      $t=gcd(abs($sn[0]), abs($sd[0]));
      $sn[0]=$sn[0]/$t;
      $sd[0]=$sd[0]/$t;
    }
    if($sd[1]!=1)
    {
      $t=gcd(abs($sn[1]), abs($sd[1]));
      $sn[1]=$sn[1]/$t;
      $sd[1]=$sd[1]/$t;
    }
    if($sd[2]!=1)
    {
      $t=gcd(abs($sn[2]), abs($sd[2]));
      $sn[2]=$sn[2]/$t;
      $sd[2]=$sd[2]/$t;
    }
    if($td[0]!=1)
    {
      $t=gcd(abs($tn[0]), abs($td[0]));
      $tn[0]=$tn[0]/$t;
      $td[0]=$td[0]/$t;
    }
    if($td[1]!=1)
    {
      $t=gcd(abs($tn[1]), abs($td[1]));
      $tn[1]=$tn[1]/$t;
      $td[1]=$td[1]/$t;
    }
    if($td[2]!=1)
    {
      $t=gcd(abs($tn[2]), abs($td[2]));
      $tn[2]=$tn[2]/$t;
      $td[2]=$td[2]/$t;
    }
    if($sn[2]!=0)
    {
      $t=gcd(abs($sn[1]), abs($sn[2]));
      $sn[1]=$sn[1]/$t;
      $sn[2]=$sn[2]/$t;

    }
      }
    }

    if($f!=1 && $s!=1)
    {
      if($sn[1]==0 && $tn[1]!=0)
      {
          
        for($i=0;$i<3;$i++)
        {
          $tempfn[$i]=$sn[$i];
          $sn[$i]=$tn[$i];
          $tn[$i]=$tempfn[$i];
          $tempfd[$i]=$sd[$i];
          $sd[$i]=$td[$i];
          $td[$i]=$tempfd[$i];

        }
      }
      if($sn[1]==0 && $tn[1]==0 && $sn[2]!=0)
      {
        $fn[2]=$tn[2]=0;
        $sn[2]=1;
        $f=1;
      }

      if($sn[1]!=0 && $tn[1]==0 && $tn[2]==0)
      {
        $checkn[0]=$fn[1];
        $checkd[0]=$sn[1];

        $tempn=$sn[2]*$checkn[0];
        $tempd=$sd[2]*$checkd[0];
        $fn[2]*=$checkd[0];
        $fd[2]*=$checkd[0];
        $fn[2]-=$tempn;
        $fn[1]=0;
        $t=gcd(abs($fn[2]), abs($fd[2]));
        $fn[2]=$fn[2]/$t;
        $fd[2]=$fd[2]/$t;
        if($sn[2]!=0)
        {
          $t=gcd(abs($sn[1]), abs($sn[2]));
          $sn[1]=$sn[1]/$t;
          $sn[2]=$sn[2]/$t;
        }
        $f=1;
      }


      if($sn[1]!=0 && ($tn[1]!=0 || $tn[2]!=0))
      {
        $checkn[0]=$tn[1];
        $checkd[0]=$sn[1];
        $tn[1]=0;
        $f=0;
        $tempn=$sn[2]*$checkn[0];
        $tempd=$sd[2]*$checkd[0];
        $tn[2]*=$checkd[0];
        $td[2]*=$checkd[0];
        $tn[2]-=$tempn;
        if($fd[0]!=1)
        {
          $t=gcd(abs($fn[0]), abs($fd[0]));
          $fn[0]=$fn[0]/$t;
          $fd[0]=$fd[0]/$t;
        }
        if($fd[1]!=1)
        {
          $t=gcd(abs($fn[1]), abs($fd[1]));
          $fn[1]=$fn[1]/$t;
          $fd[1]=$fd[1]/$t;
        }
        if($fd[2]!=1)
        {
          $t=gcd(abs($fn[2]), abs($fd[2]));
          $fn[2]=$fn[2]/$t;
          $fd[2]=$fd[2]/$t;
        }
        if($sd[0]!=1)
        {
          $t=gcd(abs($sn[0]), abs($sd[0]));
          $sn[0]=$sn[0]/$t;
          $sd[0]=$sd[0]/$t;
        }
        if($sd[1]!=1)
        {
          $t=gcd(abs($sn[1]), abs($sd[1]));
          $sn[1]=$sn[1]/$t;
          $sd[1]=$sd[1]/$t;
        }
        if($sd[2]!=1)
        {
          $t=gcd(abs($sn[2]), abs($sd[2]));
          $sn[2]=$sn[2]/$t;
          $sd[2]=$sd[2]/$t;
        }
        if($td[0]!=1)
        {
          $t=gcd(abs($tn[0]), abs($td[0]));
          $tn[0]=$tn[0]/$t;
          $td[0]=$td[0]/$t;
        }
        if($td[1]!=1)
        {
          $t=gcd(abs($tn[1]), abs($td[1]));
          $tn[1]=$tn[1]/$t;
          $td[1]=$td[1]/$t;
        }
        if($td[2]!=1)
        {
          $t=gcd(abs($tn[2]), abs($td[2]));
          $tn[2]=$tn[2]/$t;
          $td[2]=$td[2]/$t;
        }

      }


      if($tn[2]!=0)
      {
        $fn[0]=1;$sn[1]=1;$tn[2]=1;$fn[1]=0;$fn[2]=0;$sn[0]=0;$sn[2]=0;$tn[0]=0;$tn[1]=0;
        $fd[0]=$fd[1]=$fd[2]=$sd[0]=$sd[1]=$sd[2]=$td[0]=$td[1]=$td[2]=1;
      }
    }
    if($fn[0]==0 && $fn[1]!=0 && $fn[2]!=0)
    {
      $t=gcd(abs($fn[1]),abs($fn[2]));
      $fn[1]=$fn[1]/$t;
      $fn[2]=$fn[2]/$t;

    }
    else if($fn[0]!=0 && $fn[1]==0 && $fn[2]!=0)
    {
      $t=gcd(abs($fn[0]),abs($fn[2]));
      $fn[0]=$fn[0]/$t;
      $fn[2]=$fn[2]/$t;
    }
    else if($fn[0]!=0 && $fn[1]!=0 && $fn[2]==0)
    {
      $t=gcd(abs($fn[1]),abs($fn[0]));
      $fn[1]=$fn[1]/$t;
      $fn[0]=$fn[0]/$t;
    }
    if($s!=1 && ($fn[0]!=1 || $fd[0]!=1))
    {
      $fd[1]*=$fn[0];
      $fd[2]*=$fn[0];
      $fn[1]*=$fd[0];
      $fn[2]*=$fd[0];
      $fn[0]=1;
      $fd[0]=1;
      $t=gcd(abs($fn[2]), abs($fd[2]));
      $fn[2]=$fn[2]/$t;
      $fd[2]=$fd[2]/$t;
      $t=gcd(abs($fn[1]), abs($fd[1]));
      $fn[1]=$fn[1]/$t;
      $fd[1]=$fd[1]/$t;

    }
    if($sn[0]==0 && $sn[1]!=0)
    {
      if($sn[1]!=1 || $sd[1]!=1)
        {
        $sd[2]*=$sn[1];
        $sn[1]=1;
        $sn[2]*=$sd[1];
        $sd[1]=1;
        $t=gcd(abs($sn[2]), abs($sd[2]));
        $sn[2]=$sn[2]/$t;
        $sd[2]=$sd[2]/$t;

        }
    }
        
    for($a=0; $a<3; $a++)
    {
      if($fn[$a]==0)
      $fd[$a]=1;
      if($fd[$a]<0)
      {
        $fn[$a]*=-1;
        $fd[$a]*=-1;
      }
      if($sn[$a]==0)
      $sd[$a]=1;
      if($sd[$a]<0)
      {
        $sn[$a]*=-1;
        $sd[$a]*=-1;
      }
      if($tn[$a]==0)
      $td[$a]=1;
      if($td[$a]<0)
      {
        $tn[$a]*=-1;
        $td[$a]*=-1;
      }
    }

    

?>
    <form >
  <div class="matrix1">
  <input type="text" name="one0" value="<?php if($fd[0]==1){printf("%d ",$fn[0]);}else
  {
  printf("%d/%d ", $fn[0],$fd[0]);} ?>" required>
    <input type="text" name="four0" value="<?php if($fd[1]==1)
      printf("%d ",$fn[1]);
      else
      printf("%d/%d ", $fn[1],$fd[1]); ?>" required>
      <input type="text" name="seven0" value="<?php if($fd[2]==1)
      printf("%d ",$fn[2]);
      else
      printf("%d/%d ", $fn[2],$fd[2]); ?>" required>


  <br>
    <input type="text" name="two0" value="<?php   if($sd[0]==1)
      printf("%d ",$sn[0]);
      else
      printf("%d/%d ", $sn[0],$sd[0]); ?>" required>
      <input type="text" name="five0" value="<?php if($sd[1]==1)
      printf("%d ",$sn[1]);
      else
      printf("%d/%d ", $sn[1],$sd[1]); ?>" required>
        <input type="text" name="eight0" value="<?php if($sd[2]==1)
      printf("%d ",$sn[2]);
      else
      printf("%d/%d ", $sn[2],$sd[2]); ?>" required>



  <br>
    <input type="text" name="three0" value="<?php   if($td[0]==1)
      printf("%d ",$tn[0]);
      else
      printf("%d/%d ", $tn[0],$td[0]); ?>" required>

  <input type="text" name="six" value="<?php if($td[1]==1)
      printf("%d ",$tn[1]);
      else
      printf("%d/%d ", $tn[1],$td[1]); ?>" required>
  <input type="text" name="nine" value="<?php if($td[2]==1)
      printf("%d ",$tn[2]);
      else
       printf("%d/%d ", $tn[2],$td[2]); ?>" required>
  <br><br>
  <h2><a href="gloss.html" style="border: 1px dashed; padding: 5px">Proceed to Glossary</a></h2>
 
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




<hr width="50%" align="centre" size="10px">
<p id="copy">  BRĀKETS PVT LTD</p>
        


  </body>
</html>