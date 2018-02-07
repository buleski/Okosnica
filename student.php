<?php 
include 'header.html'; 
include 'data/data.php';
$index = intval($_GET['id']);
 ?>
	<div class="topLine">
		<div id="back"><a href="pocetna.php"><img src="images/back.png"></a>
		</div>
	</div>
	<figure><img src="<?php print($data[$index]['img']) ?>"></figure>
	<table>
		<tr>
			<th><h1>
			<?php print($data[$index]['ime'] . " " . $data[$index]['prezime']) ?>
			</h1></th>
		</tr>
		<tr>
			<td>
				Mail:
			</td>
			<td>
				<?php print($data[$index]['mail']) ?>
			</td>
		</tr>
		<tr>
			<td>
				Telefon:
			</td>
			<td>
				<?php print($data[$index]['mob']) ?>
			</td>
		</tr>
		<tr>
			<td>
				Wakatime:
			</td>
			<td><a href="$data[$index]['wakatime']" target="_blank">
				<?php print($data[$index]['wakatime']) ?></a>
			</td>
		</tr>
		<tr>
			<td>
				Facebook:
			</td>
			<td><a href="$data[$index]['facebook']" target="_blank">
				<?php print($data[$index]['facebook']) ?></a>
			</td>
		</tr>
	</table>






		<!-- <span><p><?php print($data[$index]['ime'] . " " . $data[$index]['prezime']) ?></p></span> -->
				
	


<?php 
include 'footer.php';
 ?>
