
$(document).ready(function(){

	// variables
	let cartBtns = $('.item .btn-cart');
	let cartRemoveBtn = $('.mycart .btn-remove');

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
					var data = JSON.parse(data);
					if( data.message == 'success' ){

						currentBtn.removeClass('btn-active');
						currentBtn.html('<i class="fa fa-shopping-cart"></i> Already added')
						.addClass('btn-disabled'); 
						$('#inCart').text(data.inCart);

					} 
				}
			});
		}	
				
	}); // end of add to cart btns


	cartRemoveBtn.on('click', function(){

		let cid = $(this).attr('data-cid');
		let btnConfirmYes = $('#btn-confirm-yes'); 
		let base_url = btnConfirmYes.attr('data-base_url');
		let deleteUrl = '/delete_from_cart.php?cid=' + cid; 

		btnConfirmYes.click(function(){
			window.location.replace(base_url + deleteUrl);
		}); 

		console.log(base_url);
		console.log(cid);
 
	}); // end if cart remove btns

});