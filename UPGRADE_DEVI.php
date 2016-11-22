<table border='1'>
	<tr>
	<th rowspan="2">INPUT</th>
	<th colspan="5">OUTPUT</th>
</tr>
</tr>
	<th>A</th>
	<th>E</th>
	<th>I</th>
	<th>U</th>
	<th>O</th>
</tr>
<tr>
  <td>
  	<?php
  	$n1="DEVI TIANA KARTIKA SARI" ;
	echo $n1;
  	?>
  	</td>
  	<td>
  	<?php
  	$SA = substr_count($n1,"A") ;
  	echo $SA;
  	?>
  	</td>
  	  <td>
  	<?php
  	$SE = substr_count($n1,"E") ;
  	echo $SE;
  	?>
  	</td>
  	  <td>
  	<?php
  	 $SI = substr_count($n1,"I") ;
  	 echo $SI;
  	?>
  	</td>
  	  <td>
  	<?php
  	 $SU = substr_count($n1,"U") ;
  	 echo $SU;
  	?>
  	</td>
  	  <td>
  	<?php
  	 $SO = substr_count($n1,"O") ;
  	 echo $SO;
  	?>
  	</td>
  </tr>
  </table>