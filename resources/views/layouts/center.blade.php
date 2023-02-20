<div class="box_center">
    <div class="box_post">
        <p class="avat"><img src="{{ 'images/img_avata.jpg' }}" alt=""></p>
        <p class="pop_post">
            Bạn đang nghĩ gì ?
        </p>
        <div class="form_post">
            <form action="{{ route('post.store') }}" method="POST"> {{-- gọi name từ route ra  --}}
                @csrf
                <h2> Tạo bài viết </h2>
                <p class="btn_close">x</p>
                <div class="box_input">
                    <textarea class="input-post" type="text" name="content" placeholder="Bạn đang nghĩ gì ?"
                        aria-label="Bạn đang nghĩ gì ?"></textarea>
                    <button type="submit" class="login_btn">Đăng</button>
                </div>
            </form>
        </div>

    </div>

    @foreach ($posts2 as $item)
        <div class="box_content">
            <div class="box_user">
                <p class="avat"><img src="{{ 'images/img_avata.jpg' }}" alt=""></p>
                <p class="user">
                    <span class="name"> {{ $item->user->name }}</span>
                    <span class="time"> {{ $item->updated_at }}<i class="fa-solid fa-earth-americas"></i></span>
                </p>
            </div>
            <div class="post">
                {{ $item->content }}
            </div>
            <div class="box_like">

                <p class="like">
                    <span class="">{{ $item->likes()->count() }} người đã thích</span>
                </p>
                <p class="cmt">{{ $item->comment()->count() }} bình luận</p>
            </div>
            <div class="box_btn">
                <form action="{{ route('like.store', $item) }}" method="post">
                    @csrf
                    <button type="submit" class="btn_like">
                        <span> Like</span>
                    </button>
                </form>

                <p class="btn_cmt">
                    <span>Comment</span>
                </p>
            </div>
            @foreach ($item->comment as $cmt)
                <div class="text_comment box_comment">
                    <p class="avat"><img src="{{ 'images/img_avata.jpg' }}" alt=""></p>
                    @foreach ($post->comment as $cmt)
                        <p>{{ $cmt->user->username }}</p>
                    @endforeach
                    <p>{{ $cmt->content }}</p>

                </div>
            @endforeach
            <div class="box_comment">
                <p class="avat"><img src="{{ 'images/img_avata.jpg' }}" alt=""></p>

                <form action="{{ route('comment.store', $item) }}" method="POST">
                    @csrf
                    <div class="box_input"><input class="input-post" type="text" name="content"
                            placeholder="Viết bình luận ..." aria-label="Viết bình luận ..."></div>
                    <button type="submit" class="d-none" style="display: none;"> up</button>
                </form>
            </div>
        </div>
    @endforeach

</div>
