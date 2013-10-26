jQuery(document).ready(function($){
	$('.wpscls-cate-post h4').on('click', 
		function(){
			$('.wpscls-cate-post ul').hide();
			$(this).next('ul').show();
		} 
	);
});