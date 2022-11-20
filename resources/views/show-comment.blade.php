<div class="show-comment">
                @foreach($comment_all as $comment_all)
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
                    <?php
                         $id = Session::get('id');
                    ?>
                    @if($id != $comment_all->id)
                    <button class="btn-rep-comment">Rep Comment</button>
                    @endif
                    <div class="comment-items">
                        <div class="comment-item  rep-comment">
                            <div class="info-comment">
                                <div class="avatar-rep-comment">
                                    <img src="{{ asset ('img/avatar.jpg') }}" alt="">
                                </div>
                                <div class="name">
                                    <?php 
                                    $name = Session::get('name');
                                    ?>
                                    <h2><?php echo $name ?></h2>
                                </div>
                            </div>
                            <div class="content-comment">
                                @foreach($detail as $product_detail)
                                <form action=""  enctype="multipart/form-data">
                                @endforeach
                                    <?php 
                                    $id = Session::get('id');
                                    ?>
                                    <input type="hidden" id="id_user_comment_rep" name="id_comment_rep" value="<?php echo $id ?>">
                                    <input type="text" id="comment_id" name="comment_id" value="{{$comment_all->comment_id }}">
                                    <textarea placeholder="" name="comment_content_rep" id="comment_content_rep" cols="90%" rows="1"></textarea>
                                    <button type="button" name="submit-comment" id="btn-comment-rep">Gửi Bình Luận</button>
                                </form>
                                <div id="test"></div>
                                <?php 
                                $message_cmt = Session::get('message_cmt');
                                if($message_cmt){
                                    echo '<span class="text-alert" style="color:red;">'.$message_cmt.'</span>';
                                    Session::put('message_cmt',null);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line-comment"></div>
                @endforeach
            </div>