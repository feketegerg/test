$(document).ready(function() {
    $("#tbody-left,#tbody-right").sortable({
        connectWith: ".conn-tbody",
        update: function(event, ui) {
            $(this).children().each(function(index) {
                if ($(this).attr('element-position') != (index + 1)) {
                    $(this).attr('element-position', (index + 1)).addClass('updated');
                }
            });

        },
        receive: function(event, ui) {

            if (($(ui.item).attr('side')) === 'left') {
                $(ui.item).attr('side', 'right');

            } else if (($(ui.item).attr('side')) === 'right') {
                $(ui.item).attr('side', 'left');
            }
        }
    });
});