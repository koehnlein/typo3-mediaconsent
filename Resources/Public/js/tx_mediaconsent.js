var mcNsp = (function namespace() {

    var reloadItem = function(item) {
       $.get(item.attr('data-mcuri'), function(data) {
            item.off('click');
            item.html(data);
       }, 'html');
    };

    return {
        reloadItem: reloadItem
    };
}());

$(function() {
    $('.mediaconsent_wrapper').on('click', function(event) {

        // Walk over list of items matching the type in attr('data-mctype')
        var scpType = $(this).attr('data-mctype');
        $('.mediaconsent_wrapper[data-mctype=' + scpType + ']').each(function() {
            mcNsp.reloadItem($(this));
        });

    });
});