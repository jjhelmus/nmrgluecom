<html>
<body>
<!-- Code by Jonathan J. Helmus (jjhelmus@gmail.com> --!>

<?php
$arr = array(
		"1H" =>  2.67522e8,
		"13C" => 6.7283e7,
		"15N" => 2.7126e7,
		"19F" => 251.815e6,
		"29Si" => 53.190e6,
        "31P" => 1.08394e8,
		"107Au" => 10.889e6,
		"109Au" => 12.518e6,
		"129Xe" => 74.521e6,
		"207Pb" => 55.805e6,
        "7Li" => 10.3977013e7);

?>

<div id="Content">

<h1>Dipole Calculator Results</h1>

<p>
A <?php echo $_POST['constant'];?> Hz coupling between
<?php echo $_POST['gamma_1'];?> and <?php echo $_POST['gamma_2'];?> 
corresponds to a 
<?php echo(float) pow( 1.6784028298433e-12*$arr[$_POST['gamma_1']]*$arr[$_POST['gamma_2']]/$_POST['constant'],.333333333333333); ?> 
angstrom distance
</p>
</div>

</body>
</html>
