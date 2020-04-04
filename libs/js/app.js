
$(document).ready(function(){

	let cartBtns = $('.item .btn-cart');

	cartBtns.on('click', function(){

		let currentBtn = $(this);
		let pid = currentBtn.attr('data-pid');
		let uid = currentBtn.attr('data-uid');

		if( currentBtn.hasClass('btn-active') ){
			$.ajax({
				url: 'add_to_cart.php', 
				type: 'post',
				data: {pid: pid, uid: uid},
				success: function(data){
					if(data == 'success'){
						currentBtn.removeClass('btn-active');
						currentBtn.html('<i class="fa fa-shopping-cart"></i> Already added')
						.addClass('btn-disabled'); 
					} 
				}
			});
		}	

				
	}); 

});