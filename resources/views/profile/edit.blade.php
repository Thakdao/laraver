<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style rel="stylesheet" media="all">
        /* default.css */
        html,
        article,
        aside,
        audio,
        blockquote,
        body,
        dd,
        dialog,
        div,
        dl,
        dt,
        fieldset,
        figure,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        hgroup,
        input,
        li,
        mark,
        menu,
        nav,
        ol,
        p,
        pre,
        section,
        td,
        textarea,
        th,
        time,
        ul,
        video,
        main {
            margin: 0;
            padding: 0;
            word-wrap: break-word;
            overflow-wrap: break-word;
            -webkit-font-feature-settings: "palt";
            font-feature-settings: "palt"
        }

        address,
        caption,
        cite,
        code,
        dfn,
        em,
        strong,
        th,
        var {
            font-style: normal;
            word-wrap: break-word;
            overflow-wrap: break-word
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        caption,
        th {
            text-align: left
        }

        q:after,
        q:before {
            content: ""
        }

        embed,
        object {
            vertical-align: top
        }

        hr,
        legend {
            display: none
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: 100%
        }

        abbr,
        acronym,
        fieldset,
        img {
            border: 0
        }

        li {
            list-style-type: none
        }

        sup {
            vertical-align: super;
            font-size: 0.5em
        }

        img {
            vertical-align: top
        }

        i {
            font-style: normal
        }

        svg {
            vertical-align: middle
        }

        article,
        aside,
        dialog,
        figure,
        footer,
        header,
        hgroup,
        nav,
        section,
        main {
            display: block
        }

        nav,
        ul {
            list-style: none
        }
    </style>
    @vite(['resources/css/common.css', 'resources/js/common.js'])

    <!-- jquery-3.4.1　-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0cdf9d3e9e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        @include('layouts/header')
      
        <div class="con_login">
            <div class="box_login box_profile">
                <form class="form_avat" action="{{route('profile.upload-avatar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h2 class="">
                        ユーザーアバター変更
                    </h2>
                    <p class="line">
                    </p>
                    <div class="inner">
                        <p class="avat2"><img src="{{ auth()->user()->avatarUrl }}" alt=""></p>
                        <div class="box_input">
                            <label for="files" class="btn2">画像を選択</label> 
                            <input type="file" id="files" name="avatar" style="visibility:hidden;" >
                            <input class="btn" type="submit" value="変更"></div>
                      
                    </div>
                  
        
        
                </form>
                @include('profile.partials.update-profile-information-form')
            </div>

        </div>
    </div>

</body>

</html>
