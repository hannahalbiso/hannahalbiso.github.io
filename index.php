<!DOCTYPE html>
<html>
<head>
	<title>Juice Bar</title>
	<link rel="shortcut icon" href="logo.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	b {
		font-family: Forte;
		font-size: 37px;
		align: center;
		color: Green;

	}
	.input [type="submit"] {
		width: 100px;
		height: 30px;
		padding: 50px;
	}
	</style>
</head>
<body>
	<b><center>JUICE BAR</b></center>
	<h2>JUICE</h2>
	<img src="ajuice.jpeg" alt="ajuice" width="110" height="110">
	<img src="gjuice.jpeg" alt="gjuice" width="110" height="110">
	<img src="ojuice.jpeg" alt="ojuice" width="110" height="110">
	<img src="kjuice.jpeg" alt="kjuice" width="110" height="110">
	<img src="wjuice.jpeg" alt="wjuice" width="110" height="110">
	<img src="ljuice.jpeg" alt="ljuice" width="110" height="110">
	
	<h2>SHAKES</h2>
	<img src="mshake.jpeg" alt="mshake" width="110" height="110">
	<img src="bananasplit.jpeg" alt="bsplit" width="110" height="110">
	<img src="berriesandcreamsmoothie.jpeg" alt="bcsmoothie" width="110" height="110">
	<img src="caramelmilkshake.jpeg" alt="cmshake" width="110" height="110">
	<img src="strawberrymilkshake.jpeg" alt="smshake" width="110" height="110">
	<img src="oreomilkshake.jpeg" alt="omshake" width="110" height="110">
	<img src="strawberrycheesemilkshake.jpeg" alt="scmshake" width="110" height="110">

	<h2>Add ons</h2>
	Black Pearl,
	Nata De Coco,
	Mango Bits,
	Rainbow Jelly,
	Honey,
	Sprinkles

	<form name="orderform" action="myindePHP.php" method="post">
	<h3>AVAILABLE</h3>
<p><input type="checkbox" name="drink[]" value="A" /> Apple Juice 
	<input type="checkbox" name="drink[]" value="G" /> Grape Juice
	<input type="checkbox" name="drink[]" value="O" /> Orange Juice 
	<input type="checkbox" name="drink[]" value="K" /> Kiwi Juice 
	<input type="checkbox" name="drink[]" value="W" /> Watermelon Juice 
	<input type="checkbox" name="drink[]" value="L" /> Lemon Juice </p>
	<input type="checkbox" name="drink[]" value="M" /> Mango Shake
	<input type="checkbox" name="drink[]" value="B" /> BananaSplit
	<input type="checkbox" name="drink[]" value="BC" /> berries and Cream smoothie
	<input type="checkbox" name="drink[]" value="CM" /> Caramel Milkshake
	<input type="checkbox" name="drink[]" value="SM" /> Strawberry Milkshake
	<input type="checkbox" name="drink[]" value="OM" /> Oreo Milkshake </p>
	<input type="checkbox" name="drink[]" value="SC" /> Strawberry Cheese Milkshake </p>
	<p><input type="submit" name="billbtn" value="Review Orders" /></p>
	</form>


</body>
</html>



