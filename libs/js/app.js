$(document).ready(function(){

	$('.item .btn-cart').on('click', function(){
		let pid = $(this).attr('data-pid');
		let uid = $(this).attr('data-uid');
				
		$.ajax({
			url: 'add_to_cart.php',
			type: 'post',
			data: {pid: pid, uid: uid},
			success: function(data){
				console.log(data); 
			}
		});		
	}); 
	
});