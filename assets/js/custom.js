$(document).ready(function(){
	var $modal = $('#ajax-modal');
    $(document).on('click', '[data-toggle="ajax-modal"]', function(e){
        e.preventDefault();
        $('#myModal').hide();
        var url = $(this).attr('href');
        let urlLink = $(this);
        $(this).html('<img src="/assets/img/loading/loading2.gif"/>');

        if (url.indexOf('#') === 0) {
            $('#mainModal').modal('open');
        } else {
            $.get(url, function(data) {
                $modal.modal();
                $modal.html(data);
                urlLink.html('ReadMore');
            });
        } 
    });
});