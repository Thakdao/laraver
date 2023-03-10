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

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600;1,700&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/014abb33b0.js" crossorigin="anonymous"></script>
    @vite(['resources/css/common.css', 'resources/js/common.js'])

</head>

<body>
    <div class="container">


        @include('layouts/header')
        <div class="con_login">
            <div class="box_login">
                <form action="{{ route('update-password') }}" method="POST">
                    @csrf
                    <h2>?????????????????????</h2>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="box_input">
                            <input name="old_password" type="password"
                                class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                placeholder="????????????????????????">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="box_input">
                            <input name="new_password" type="password"
                                class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                placeholder="????????????????????????">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="box_input">
                            <input name="new_password_confirmation" type="password" class="form-control"
                                id="confirmNewPasswordInput" placeholder="????????????????????????">
                        </div>

                    </div>

                    <div class="card-footer">
                        <button class="login_btn">??????</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
