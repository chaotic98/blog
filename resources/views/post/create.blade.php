<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت نام</title>
</head>
<style>


    * {
        box-sizing: border-box;
        outline: none;
    }

    body {
        background: #f5f6fa;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: 'Montserrat', sans-serif;
        height: 100vh;
        margin: -20px 0 50px;
    }
    select {
        width: 285px;
        cursor:pointer;
        display:inline-block;
        position:relative;
        font:normal 11px/22px Arial, Sans-Serif;
        color:black;
        border:1px solid #ccc;
        padding: 4px;
    }

    h1 {
        font-weight: bold;
        margin: 0;
    }

    h2 {
        text-align: center;
        color: #f5f6fa;
    }

    p {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
    }

    span {
        font-size: 12px;
    }

    a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
    }

    button {
        border-radius: 20px;
        border: 1px solid #2ecc71;
        background-color: #2ecc71;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        box-sizing: border-box;
        cursor: pointer;
    }






    form {
        background-color: #2f3640;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;

    }

    input {
        background-color: #eee;
        border: none;
        padding: 12px 15px;
        margin: 8px 0;
        width: 100%;
        border-radius: 6px;
    }

    .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25),
        0 10px 10px rgba(0,0,0,0.22);
        position: relative;
        overflow: hidden;
        width: 768px;
        max-width: 100%;
        min-height: 480px;


    }
    .container:hover{
        box-shadow: 5px 5px 5px #7f8c8d;
    }

    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .container.right-panel-active .sign-in-container {
        transform: translateX(100%);
    }

    .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .container.right-panel-active .sign-up-container {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
    }



    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .container.right-panel-active .overlay-container{
        transform: translateX(-100%);
    }

    .overlay {
        background: #FF416C;
        background: -webkit-linear-gradient(to right, #273c75, #192a56);
        background: linear-gradient(to right, #273c75, #192a56);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #FFFFFF;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .container.right-panel-active .overlay {
        transform: translateX(50%);
    }

    .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
        transform: translateX(-20%);
    }

    .container.right-panel-active .overlay-left {
        transform: translateX(0);
    }

    .overlay-right {
        right: 0;
        transform: translateX(0);
    }

    .container.right-panel-active .overlay-right {
        transform: translateX(20%);
    }

    .inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    .inputfile + label {
        font-size: 1.25em;
        font-weight: 700;
        color: white;
        background-color: #095e09;
        display: inline-block;
        border-radius: 5px;
        padding: 4px;
    }

    .inputfile:focus + label,
    .inputfile + label:hover {
        background-color: #1115ff;
    }
    .inputfile + label {
        cursor: pointer; /* "hand" cursor */
    }

    .inputfile:focus + label {
        outline: 1px dotted #000;
        outline: -webkit-focus-ring-color auto 5px;
    }
    textarea {
        resize: none;
        padding: 3px;
        border: 1px solid #888;
        border-radius: 4px;
    }

    .active {

        display: block;
        font-size: 14px;
        font-family: sans-serif;
        font-weight: 700;
        color: #444;
        line-height: 1.3;
        padding: 3px;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        margin: 0;
        border: 1px solid #aaa;
        box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
        border-radius: .5em;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        background-color: #fff;
        linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
        background-repeat: no-repeat, repeat;
        background-position: right .7em top 50%, 0 0;
        background-size: .65em auto, 100%;
    }
    .select-css::-ms-expand {
        display: none;
    }
    .select-css:hover {
        border-color: #888;
    }
    .select-css:focus {
        border-color: #aaa;
        box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
        box-shadow: 0 0 0 3px -moz-mac-focusring;
        color: #222;
        outline: none;
    }
    .select-css option {
        font-weight:normal;
    }

    }
</style>
<body>
<h2>ثبت نام کنید</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">

    </div>
    <div class="form-container sign-in-container">
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h2>فرم های زیر را پرکنید</h2>

            <input type="text" name="name" placeholder="نام و نام خانوادگی" />
{{--
            <input type="file" name="img" placeholder="تصویر" />
--}}
            <input type="file" name="img" id="file" class="inputfile" />
            <label for="file">انتخاب عکس</label>
            <textarea name="description" cols="36" rows="10" placeholder="مشخصات خود را بنویسید"></textarea>
            <br>
            <select name="active" style="height: 30px" class="active">
                <option value="0" selected>غیرفعال</option>
                <option value="1">فعال</option>
            </select>

            {{-- <input type="file" size="60">--}}
            <a href="#"><b>فراموشی رمز عبور</b></a>
            <button>ثبت نام</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">

            </div>
            <div class="overlay-panel overlay-right">
                <h1>زیر یک دقیقه در سایت ما عضو شوید</h1>
                <p><font size="4">با وارد کردن اطلاعات خود به جمع ما از همه جای جهان بپیوندید </font> </p>

            </div>
        </div>
    </div>
</div>
<br><br>

</body>
</html>
