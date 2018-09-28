$(function() {
    $('.mediaconsent_wrapper').on('click', function(event) {
        var reloadUrl = $(this).attr('data-mcuri');
        var wrapper = $(this);
        $.get(reloadUrl, function(data) {
            wrapper.off('click');
            wrapper.html(data);
        }, 'html');
    });
});

