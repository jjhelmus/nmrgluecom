<?php include 'header.php'; ?>

<div id="contentwide">

<h2>Software</h2>
<p> See my <a href="http://github.com/jjhelmus">GitHub</a> page for open source software projects which I have created or contributed to.</p>

<h3><a href="https://github.com/ARM-DOE/pyart/">Py-ART</a></h3>
<p>
The Python-ARM Radar Toolkit (Py-ART) offers a powerful interpreted 
environment for reading radar data from a variety of formats, 
correcting for Doppler velocity aliasing and signal attenuation, 
mapping data to Cartesian grids, and performing a number of 
geophysical retrievals on the data. 
The package is capable of writing data to
<a href="http://cf-pcmdi.llnl.gov/">Climate and Forecast (CF) standard NetCDF</a>
files following the 
<a href="http://www.ral.ucar.edu/projects/titan/docs/radial_formats/cfradial.html">Cf/Radial convention</a>
for antenna coordinate data. Py-ART is written in the 
Python programming language, taking advantage of the 
powerful scientific libraries (NumPy, SciPy, matplotlib) 
available as well as interfacing with legacy 
C and FORTRAN radar codes. The package is freely available under a BSD license.
</p>

<h3><a href="http://code.google.com/p/nmrglue/">nmrglue</a></h3>
<p>nmrglue is a module for working with NMR data in <a href="http://python.org">Python</a>. 
When used with the <a href="http://numpy.scipy.org">NumPy</a>, <a href="http://www.scipy.org">SciPy</a>, and 
<a href="http://matplotlib.org/index.html">matplotlib</a> packages, nmrglue provides a robust environment for rapidly developing new methods for processing, analyzing, and visualizing NMR data. nmrglue also provides a framework for connecting existing NMR software packages </p>

<h3><a href="http://rnmrtk.uchc.edu/rnmrtk/RNMRTK.html">The Rowland NMR Toolkit</a></h3>
<p>The Rowland NMR Toolkit (RNMRTK) is a software package for processing multidimensional NMR data developed by Jeff Hoch, Alan Stern and many other contributers including myself.  The package provides tools for traditional NMR signal processing methods as well as a powerful general-purpose algorithm for computing maximum entropy reconstructions, which can be used to process non-uniformly sampled data.</p>

<h3>Other Software</h3>
<ul>
<li><a href="calcdist.php">NMR dipole coupling to distance calculator</a></li>
<li><a href="calcdipole.php">NMR distance to dipole coupling calculator</a></li>
<li><a href="https://github.com/jjhelmus/leastsqbound-scipy">leastsqbound - Contrained Least-squares optimization in Python</a>
</ul>


</div>
<?php include 'footer.php'; ?>
