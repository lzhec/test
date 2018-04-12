$(document).ready(function(){
	$('li>a').click(function(){
		if($(this).parent().find('a').length){
			$(this).parent().find('li').slideToggle(300);
			return false;
		}
	});
});