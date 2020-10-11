

$('#submit').click(function() {
    // alert('hello')
    $.ajax({
        url: 'submit.php',
        type: 'POST',
        data: {
            name: $('#name').val(),
            city: $('#city').val(),
            occupation:$('#occupation').val()
        },
        success: function(msg) {
            alert('Details Submitted');
        }               
    });
    return false;
});
