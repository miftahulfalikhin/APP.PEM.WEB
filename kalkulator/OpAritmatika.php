<html>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="box2">
<p>
<?php 
// ambil isi form simpan variabel
$operand1=$_REQUEST['operand1'];
$operand2=$_REQUEST['operand2'];
$operator=$_REQUEST['operator'];


// rumus
$perhitungan= $operand1 . $operator . $operand2;
eval ("\$hasil=$perhitungan;");
echo "hasil perhitungan : <B>$hasil </B>";
?>
</p>
</div>
</html>