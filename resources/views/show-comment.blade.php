
           <div class="show-comment">
                @foreach($comment_all as $comment_all)
                <div class="comment-item">
                    <div class="info-comment">
                        <div class="avatar">
                            <img src="{{ asset ('img/avatar.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            @foreach($comment_all->customers as $comment_name)
                            <h2>{{ $comment_name->name }}</h2>
                            @endforeach
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
                    <?php
                         $id = Session::get('id');
                    ?>
                </div>
                <div class="line-comment"></div>
                @endforeach
            </div>
