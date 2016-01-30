$(document).ready(function(){
	//開啟BootstrapTootip功能
  $('[data-toggle="tooltip"]').tooltip();
	//控制GitHub gist的樣式
	$('.gist-file').css('margin','0px');
	$('.gist-file').css('border','0px');
	$('.gist-file').css('border-top-left-radius','0px');
	$('.gist-file').css('border-top-right-radius','0px');
	$('.gist-meta').css('background-color','#F5F5F5');
});