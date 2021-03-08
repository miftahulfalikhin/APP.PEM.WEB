<html>
<head>
<title> Pemakaian Operator Aritmatika dalam PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form name="form1" method="post" action="OpAritmatika.php">
<div class="box">
	<h2 align="center">Kalkulator Sederhana</h2>
	<!-- Input Pertama -->
	<td> 
		<div>
		<p>
		<input type="text" name="operand1" placeholder="Silahkan Masukkan Angka">
		</p>
		</div>
	</td>
	<!--  -->
	<th>
	<div>
		<p>
		<select name="operator">
			<option>+</option>
			<option>-</option>
			<option>%</option>
			<option>*</option>
			<option>/</option>
		</select>
		</p>
	</div>
	</th>
	<!-- Input Ke Dua -->
	<td>
		<div>
		<p>
		<input type="text" name="operand2" placeholder="Masukkan Angka Berikutnya">
		</p>
	</div>
	</td>
	<!-- Tombol -->
	<td>
		<div>
		<input type="submit" name="Hitung" class="tombol">
		</div>
	</td>
</div>
</body>
</html>