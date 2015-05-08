<?php include('../includes/header.php'); ?>

	<?php for($i=0;$i<$currentRows;$i++): ?>
		<?php if($i == 0 || $i % 2 == 0): ?>
	<div class="row">
		<?php endif; ?>
		<div class="col">
			<iframe class="SC_player" src=<?php echo $current[$i]->url; ?>></iframe>
			<form action='updateCrunch.php' method='post'>
				<input type='hidden' name='id' value = <?php echo $current[$i]->id; ?>>
				<br>
				<input type='submit' value='Update Crunch Value'>
			</form>
			<p>Crunches: 52</p>
		</div>
		<?php if($i % 2 == 0 || $i == 0): ?>
			<div class="vsPic">
				<img src="images/vs.png">
			</div>
		<?php endif; ?>

		<?php if($i % 2 != 0 && $i != 0): ?>
	</div>
		<?php endif; ?>

	<?php endfor; ?>
	

	
<?php include('../includes/footer.php'); ?>