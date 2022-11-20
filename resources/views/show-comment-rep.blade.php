                    @foreach($comment_all as $comment_all)
                    <div class="show-comment-rep">
                        @foreach($comment_rep as $rep_comment)
                        @if($comment_all->comment_id == $rep_comment->comment_id)
                        <div class="comment-item">
                            <div class="content-comment">
                                <div class="info-comment">
                                    <div class="avatar-comment-rep">
                                        <img src="{{ asset ('img/avatar.jpg') }}" alt="">
                                    </div>
                                    <div class="name">
                                        <h2>{{  $rep_comment->name  }}</h2>
                                        <div class="content-comment">
                                            <p>{{ $rep_comment->comment_content }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endforeach