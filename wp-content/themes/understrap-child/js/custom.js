jQuery(document).ready(function($){
    var iframeElement = $('.iframe_lazy');
    var iframeURL = $(iframeElement).data('src');
    $(iframeElement).addClass('iframe_loading'); 
    setTimeout(function(){ 
        $(iframeElement).attr('src', iframeURL).removeClass('iframe_loading');  
    }, 2000);  
});