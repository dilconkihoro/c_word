<h1>Loops</h1>
<h4>While Loop</h4>
<?php
//While loop
$init=0;
while($init <7){
    print $init . "<br>";
    $init++;
}

?>
<?php
//do-While loop
$i=11;
do{
    print $i . "br";
    $i++;
}while($i<16);
?>
<h4>for Loop</h4>
<?php
     //for loop
    for($s=45; $s,55; $s++){
      print $s . "<br>"
      $s++;
    }
    ?>
   <h4>forehack</h4>
<?php 
   $months = ["Janary","February","March","April","May","June","July","October","November","December"];
   
   forearch(4months AS $month)
   
   ?>
   <form action=""
       <select name="id"
       <option value="">--Months--</option>
       <?php
    forearch($months AS $month){
        echo "<option value=''>$month</option>";
    }
    ?>
    </select>
    <select name=""id"">
        <option value="">--Years--</option>
        <?php
         $y = 2015;
         while($y < 2030){
            print"<option value=''>$y</option>"
            $y++;
         }