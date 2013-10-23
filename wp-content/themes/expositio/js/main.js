jQuery(document).ready(function($){
	$('.wpscls-cate-post h4').hover( 
		function(){
			$('.wpscls-cate-post ul').hide();
			$(this).next('ul').show();
		}, 
		function(){
			// $(this).next('ul').hide();
		} 
	);
});