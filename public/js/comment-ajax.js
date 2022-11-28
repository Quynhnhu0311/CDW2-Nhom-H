
    $('.btn-rep-comment').click(function() {
        $(this).parent().children().children('.rep-comment').css('display','block');
        $('.show-comment-rep').removeClass('active');
        $(this).parent().children('.show-comment-rep').addClass('active');
    });
    $('.rate').click(function(){
        $('.rate').removeAttr('id','rating');
        $(this).attr('id','rating');
    });
    function load_comment(){
        var product_id = $('#product_id').val();
        $.ajax({
            url: "show_comment/" + product_id,
            type : 'GET',
            success: function(show_comment) {
                $(".show-comment").html(show_comment);
            }
        });
    }
    function load_comment_rep(){
        var product_id = $('#product_id').val();
        $.ajax({
            url: "show_comment_rep/" + product_id,
            type : 'GET',
            success: function(show_comment_rep) {
                $(".show-comment").html(show_comment_rep);
            }
        });
    }
    $('#btn-comment').click(function() {
        var product_id = $('#product_id').val();
        var id_user_comment = $('#id_user_comment').val();
        var comment_content = $('#comment_content').val();
        var rating = $('#rating').val();

        if(id_user_comment == ""){
            swal({
                    title: "Login to comment !",
                });
        }
        if(rating == 0 || comment_content == ""){
            swal({
                    title: "You have not commented or rated yet !",
                });
        }else {
            var _token = $('input[name = _token]').val();
            $.ajax({
                url : "send-comment",
                method : "POST",
                data : {product_id: product_id, id_user_comment :id_user_comment, comment_content:comment_content, rating : rating , _token: _token},
                success: function(data) {
                    $('#test').html('<p>Comment successful</p>');
                    load_comment();
                }
            });
        }
        comment_content = '';
    });
    $('.btn-comment-rep').click(function() {
        const id = $(this).data('id');
        const comment_id = $('#comment_id-'+ id).val();
        const id_user_comment_rep = $('.id_user_comment_rep').val();
        const comment_content_rep = $('#comment_content_rep_' + id).val();
        alert(comment_id);
        if(id_user_comment_rep == ""){
            swal({
                    title: "Login to comment !",
            });
        }
        if(comment_content_rep == ""){
            swal({
                    title: "You have not commented !",
            });
        }else {
            var _token = $('input[name = _token]').val();
            $.ajax({
                url : "send-comment-rep",
                method : "POST",
                data : {id_user_comment_rep :id_user_comment_rep,
                    comment_id : comment_id,
                    comment_content_rep: comment_content_rep,
                      _token: _token
                    },
                success: function(data) {
                    $('#test').html('<p>Comment successful</p>');
                    load_comment_rep();
                }
            });
        }
        comment_content = '';
    });