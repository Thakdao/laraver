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
   


    <!-- jquery-3.4.1　-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0cdf9d3e9e.js" crossorigin="anonymous"></script>
    @vite(['resources/css/common.css'])

</head>

<body>
    <div class="con_login">

        <div class="overlay">
            <div class="box_reg">
                <p class="btn_close"><a href="/login">x</a></p>
                <form method="POST" action="{{ route('register') }}" class="reg_form">
                    @csrf
                    <h2>Sign Up</h2>
                    <p>It's quick and easy.</p>
                    <p class="line"></p>
                    <div class="box_input">
                        <x-text-input placeholder="Name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="box_input">
                        <x-text-input placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="box_input">

                        <x-text-input id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="box_input">

                        <x-text-input id="password_confirmation" placeholder="Password confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <button class="reg_btn signup__signInButton"><span>
                           
                                {{ __('Register') }}
                          
                        </span></button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>