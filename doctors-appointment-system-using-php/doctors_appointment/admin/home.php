<style>
   @import url('https://fonts.googleapis.com/css2?family=Acme&family=Courgette&family=Dancing+Script:wght@600&family=Lobster&family=Nova+Script&family=Praise&family=Sansita+Swashed&family=Satisfy&display=swap');
</style>

<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
			<div class="card">
				<div class="card-body" style="font-family: 'Acme', sans-serif;">
				<?php echo "Welcome back ".($_SESSION['login_type'] == 3 ? "Dr. ".$_SESSION['login_name'].','.$_SESSION['login_name_pref'] : $_SESSION['login_name'])."!"  ?>
									
				</div>
				<hr>
				<div class="row">
				
				</div>
			</div>
			
		</div>
		</div>
	</div>

</div>
<script>
	
</script>