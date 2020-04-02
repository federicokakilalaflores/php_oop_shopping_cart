
<ul class="pagination">
<?php

	if($current_page > 1){
		echo '<li class="page-item"><a href="' . $home_url . '/product.php?page=1" class="page-link">First</a></li>';
	}

	for ($i = $ctrl_init_range; $i < $ctrl_trail_range; $i++) {
		if($i > 0 && $i <= $total_pages){
			echo '<li class="page-item"><a href="' . $home_url . '/product.php?page=' . $i . '" class="page-link">' . $i . '</a></li>';
		}
	}


	if($current_page < $total_pages){
		echo '<li class="page-item"><a href="' . $home_url . '/product.php?page=' . $total_pages . '" class="page-link">Last</a></li>';
	}

?>
</ul>