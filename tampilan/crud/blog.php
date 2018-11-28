<?php 
$hasil = $koneksi->prepare("SELECT * FROM artikel order by id DESC"); 

$hasil->execute(); 
?>  
<div style="clear:both">&nbsp;</div> 
<table class="blog"> 
	<thead style="font-family: sans-serif;">
		<?php $i = 1;
		foreach ($hasil as $key) {
		?>
		<tr>
			<td><p style="font-size: 20px; font-weight: bold;"><?php echo $key['judul'];?></p><br>
				Ditulis Oleh <?php echo $key['penulis'];?><br><br><p style="text-align: justify;"><?php echo $key['konten'];?></p><br><br><hr></td>
		</tr>
		<?php
		$i++;
	}
	?>

	</thead>
</table>
<footer style="text-align: center;">Copyright&copy; Adam Roxann Irsyad 2018</footer>
