<html>
<body>
<!-- Code by Jonathan J. Helmus (jjhelmus@gmail.com> --!>

<div id="Content">

<h1>Dipole Coupling Calculator</h1>

<FORM action="dipole.php" method="post">

<p>Distance (in angstroms): <input type="text" name="distance" /> </p>
<p>Nucleus 1:  
	  <SELECT size="1" name="gamma_1">
      <OPTION selected value="1H">1H</OPTION>
      <OPTION  value="13C">13C</OPTION>
	  <OPTION  value="15N">15N</OPTION>
	  <OPTION  value="19F">19F</OPTION>
	  <OPTION  value="29Si">29Si</OPTION>
	  <OPTION  value="31P">31P</OPTION>
	  <OPTION  value="107Au">107Au</OPTION>
	  <OPTION  value="109Au">109Au</OPTION>
	  <OPTION  value="129Xe">129Xe</OPTION>
	  <OPTION  value="207Pb">207Pb</OPTION>
      <OPTION  value="7Li">7Li</OPTION>
	  </SELECT>
<p>Nucleus 2:
	  <SELECT size="1" name="gamma_2">
	  <OPTION selected value="1H">1H</OPTION>
      <OPTION  value="13C">13C</OPTION>
	  <OPTION  value="15N">15N</OPTION>
	  <OPTION  value="19F">19F</OPTION>
	  <OPTION  value="29Si">29Si</OPTION>
	  <OPTION  value="31P">31P</OPTION>
	  <OPTION  value="107Au">107Au</OPTION>
	  <OPTION  value="109Au">109Au</OPTION>
	  <OPTION  value="129Xe">129Xe</OPTION>
	  <OPTION  value="207Pb">207Pb</OPTION>
      <OPTION  value="7Li">7Li</OPTION>
	  </SELECT>
<p><input type="submit" value="Calculate">
</FORM>
</div>
</body>
</html>
