<html>
<body>
<!-- Code by Jonathan J. Helmus (jjhelmus@gmail.com> --!>

<div id="Content">

<h1>Dipole Calculator Results</h1>

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
        "7Li" => 10.3977013e7
        );

?>
<p>
For a <?php echo $_POST['distance'];?> angstrom distance between 
<?php echo $_POST['gamma_1'];?> and <?php echo $_POST['gamma_2'];?> 

<!--
gamma are:
<?php echo(float) $arr[$_POST['gamma_1']];?> and <?php echo(float) $arr[$_POST['gamma_2']];?>

r^3 is <?php echo $_POST['distance']*$_POST['distance']*$_POST['distance']; ?>
-->
</p>
<p>The dipole-dipole coupling constant is:
<?php echo(float) 1.6784028298433e-12*(1/($_POST['distance']*$_POST['distance']*$_POST['distance']))*$arr[$_POST['gamma_1']]*$arr[$_POST['gamma_2']]; ?> Hz.

</div>

</body>
</html>
