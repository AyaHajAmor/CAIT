$(document).ready(function() {
    
    /* ======= FAQ accordion ======= */
    function toggleIcon(e) {
    $(e.target)
        .prev('.card-header')
        .find('.card-title a')
        .toggleClass('active')
        .find("span.pe-icon")
        .toggleClass('pe-7s-plus pe-7s-less');
    }
    $('.card').on('hidden.bs.collapse', toggleIcon);
    $('.card').on('shown.bs.collapse', toggleIcon);
    
	
});



