<!DOCTYPE html>
<html>
<body>
<form method="post">
<label for="Ad">Ad:</label>
<input type="text" name="Ad"><br><br>
<label for="Soyad">Soyad:</label>
<input type="text" name="Soyad"><br><br>

<label for="Qiymet1">Qiymet1:</label>
<input type="text" id="Qiymet1"><br><br>
<label for="Qiymet2">Qiymet2:</label>
<input type="text" id="Qiymet2"><br><br>
<label for="Qiymet3">Qiymet3:</label>
<input type="text" id="Qiymet3"><br><br>
<button type="button" onclick="calculate()">Hesabla</button> 
</form>

<?php

 function CalcAverage($Q1, $Q2, $Q3) {
        $average = ($Q1 + $Q2 + $Q3) / 3;
        return $average;
    }
if(isset($_POST['submit'])){
    $q1 = intval($_POST['Qiymet1']);
    $q2 = intval($_POST['Qiymet2']);
    $q3 = intval($_POST['Qiymet3']);
       echo '<p>Ortaqiymet: ' . CalcAverage($q1,$q2,$q3) . '</p>';
}
function RateAverage($average){
if($average>45)
{
echo "Tebrikler";
}
else
{
echo "cox teesuf kesildiniz";
}
}
?> 

</body>
</html>
