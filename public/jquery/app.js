/**
 * Created by DeLL1440 on 25/05/2017.
 */
var postId = 0;

$('.post').find('.interaction').find('.edit').on('click', function (event) {
    event.preventDefault();

    var postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
    postId = event.target.parentNode.parentNode.dataset['postid'];
    $('#post-body').val(postBody);
    $('#edit-modal').modal();
});

$('#modal-save').on('click', function() {
    $.ajax({
        method: 'POST',
        url: url,
        data: {
            body: $('#post-body').val(),
            postId: postId,
            _token: token
        }
    })
        .done(function(msg){
            console.log(msg['message']);
        });
});