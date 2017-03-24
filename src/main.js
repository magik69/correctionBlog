$(document).ready(function() {

    $("#form1").submit(function(e) {
        e.preventDefault()
        var values = $(this).serialize();

        $.ajax({
            url: 'add_comment.php',
            type: 'POST',
            data: values,
            dataType: 'html',
            // timeout: 3000,
            success: function(html) {
                alert(html);
                // $('ul.comment-list').append(html);
            }
            // error: function(html) {
            //     console.log(html + ' a bien foiré');
            // },
            // complete: function() {
            //     $('input#nickName').val('').focus();
            //     $('textarea#contents').val('');
            // }
        });
    });
});
