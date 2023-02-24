<div class="box_center">
    <div class="box_post">
        {{-- {{dd(auth()->user()->avatarUrl)}} --}}
        <p class="avat"><img src="{{ auth()->user()->avatarUrl}}" alt=""></p>
        
        <p class="pop_post">
            {{ Auth::user()->name }}さん、その気持ち、シェアしよう
        </p>
        <div class="form_post">
            <form action="{{ route('post.store') }}" method="POST"> {{-- gọi name từ route ra  --}}
                @csrf
                <h2> 投稿を作成 </h2>
                <p class="btn_close">x</p>
                <div class="box_input">
                    <textarea class="input-post" type="text" name="content" placeholder=" {{ Auth::user()->name }}さん、その気持ち、シェアしよう"
                        aria-label="Bạn đang nghĩ gì ?"></textarea>
                    <button type="submit" class="login_btn">投稿</button>
                </div>
            </form>
        </div>

    </div>

    @foreach ($posts2 as $item)
        <div class="box_content">
            <div class="box_user">
                {{-- {{dd($item->user->avatarUrl)}} --}}
                <p class="avat"><img src="{{ $item->user->avatarUrl}}" alt=""></p>
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
                    <span class="">{{ $item->likes()->count() }} いいね！</span>
                </p>
                <div class="pop_like">
                    @foreach ($item->likes as $like)
                   <ul class="list_like">
                    <li>{{ $like->user->name }}</li>
                   </ul>
                   @endforeach
                </div>
                <p class="cmt">コメント{{ $item->comment()->count() }} 件</p>
            </div>
            <div class="box_btn">
                <form action="{{ route('like.store', $item) }}" method="post">
                    @csrf
                    @if($item->liked)
                    <div class="liked">
                        <button type="submit" class="btn_like">
                            <span>いいね！</span>
                        </button>
                    </div>
                    @else
                    <div >
                        <button type="submit" class="btn_like">
                            <span>いいね！</span>
                        </button>
                    </div>
                    @endif
                </form>

                <p class="btn_cmt">
                    <span>コメント</span>
                </p>
            </div>
            @foreach ($item->comment as $cmt)
                <div class="text_comment box_comment">
                    <div class="inner_cmt">
                        <p class="avat"><img src="{{ auth()->user()->avatarUrl}}" alt=""></p>
                        <p class="name">{{ $cmt->user->name }}</p>
                    </div>
                    <p>{{ $cmt->content }}</p>

                </div>
            @endforeach
            <div class="box_comment">
                <p class="avat"><img src="{{ auth()->user()->avatarUrl}}" alt=""></p>

                <form action="{{ route('comment.store', $item) }}" method="POST">
                    @csrf
                    <div class="box_input"><input class="input-post" type="text" name="content" placeholder="回答を入力…"
                            aria-label="回答を入力…"></div>
                    <button type="submit" class="d-none" style="display: none;"></button>
                </form>
            </div>
        </div>
    @endforeach

</div>
