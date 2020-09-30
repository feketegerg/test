//Select button and add an evenlistener
$('#save-list').click(function() {
    var positions = [];
    $('.updated').each(function() {
        positions.push([$(this).attr('element-index'), $(this).attr('element-position'), $(this).attr('side')]);
        $(this).removeClass('updated');
    });
    $.ajax({
        url: 'index.php',
        method: 'POST',
        dataType: 'text',
        data: {
            update: 1,
            positions: positions
        },
        success: function() {
            $('#save-message').html('Your list has been successful saved!');
        }
    });
});