
	<div class="row">
		<div class="col-md-8">
			<h2 class="tex-primary text-uppercase"><?php echo $page_title ?></h2>
		</div> 
		<div class="col-md-4">
			<form action="search.php" method="post">
				<div class="input-group">
					<input type="text" class="form-control" name="search_str" placeholder="Search Product...">
					<div class="input-group-append">
						<button type="submit" name="search_btn" class="btn btn-primary">
							<i class="fa fa-search"></i> 
						</button>
					</div>
				</div>	 
			</form>
		</div> 	
	</div>
		<!-- end search bar -->