jQuery(document).ready(function($){
	$('.wpscls-cate-post h4').hover( 
		function(){
			$(this).next('ul').show();
		}, 
		function(){
			$(this).next('ul').hide();
		} 
	);
});