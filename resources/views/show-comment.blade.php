@foreach($comment_all as $comment_all)
<div class="show-comment">
    <div class="comment-item">
        <div class="info-comment">
            <div class="avatar">
                <img src="{{ asset ('img/avatar.jpg') }}" alt="">
            </div>
            <div class="name">
                <h2>{{ $comment_all->name }}</h2>
                <div class="rating">
                    @for($i = 1; $i <= $comment_all->rating_value; $i++)
                    <i class="ratings fa fa-star-o"></i>
                    @endfor
                </div>
            </div>
        </div>
        <div class="content-comment">
            <p>{{ $comment_all->comment_content }}</p>
        </div>
    </div>
</div>
@endforeach