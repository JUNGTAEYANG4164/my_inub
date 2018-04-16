$(document).ready(function() {
    
var menuheight = $('.body-header-all').height() + $('.body-all').height() - $('.sidebar-header').height();

$('.sidebar-body').height(menuheight);
    
});