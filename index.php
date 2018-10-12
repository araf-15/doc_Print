<?php
	include 'profile.php';
?>

<script type="text/javascript">
	function printlayer(layer){
		var generator=window.open("m'name'");
		var layetext = document.getElementById(layer);
		generator.document.write(layetext.innerHTML.replace("Print Me"));

		generator.document.close();
		generator.print();
		generator.close();
	}
</script>

<div id="div-id-name">
	<table>
		<th>Serial</th>
		<th>Dapartment</th>
		<th>Age</th>
	<?php
		$user = new profile();
		$userdata = $user->getUserData();

		if ($userdata) {
			$i=0;

			foreach ($userdata as $sdata) {
				$i++;
	?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $sdata['name']; ?></td>
			<td><?php echo $sdata['dept'];?></td>
			<td><?php echo $sdata['age'];?></td>
		</tr>
	<?php
		} 
	}
	?>
	</table>
</div>

<h3>
	<button><a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print Report</a></button>
</h3>