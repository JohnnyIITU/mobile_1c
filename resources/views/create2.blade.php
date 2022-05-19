<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primer</title>
</head>
<body>

<style>
    * {
        box-sizing: border-box;
    }
    .rounded-input {
        padding:10px;
        border-radius:10px;
    }
    .container {
        max-width: 400px;
        width: 100%;
    }
    .mysubform {
        display: block;
        padding:10px;
        background:#e8eef0;
        border:1px solid #ccc;
        /*position:absolute;*/
    }
    .mysubform input, .mysubform button {
        display: block;
        width: 100%;
    }
    .mysubform button {
        margin: 0;
    }
    html, body {
        width: 100%;
        height: 100%;
    }
    body {
        background: url(https://html5book.ru/wp-content/uploads/2015/07/background39.png);
        min-height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .floating-button {
        text-decoration: none;
        display: inline-block;
        width: 140px;
        height: 45px;
        line-height: 45px;
        border-radius: 45px;
        margin: 10px 20px;
        font-family: 'Montserrat', sans-serif;
        font-size: 11px;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 3px;
        font-weight: 600;
        color: #524f4e;
        background: white;
        box-shadow: 0 8px 15px rgba(0, 0, 0, .1);
        transition: .3s;
    }
    .floating-button:hover {
        background: #2EE59D;
        box-shadow: 0 15px 20px rgba(46, 229, 157, .4);
        color: white;
        transform: translateY(-7px);
    }
</style>

<div class="container">
    <form class="mysubform" action={{route('store2')}} method="POST">
        @csrf
        <input name="name" placeholder="Аты" class="rounded-input" value=""><br>
        <input name="surname" placeholder="Жөні" class="rounded-input" value=""><br>
        <button class="floating-button">Жіберу</button>
    </form>
</div>

</body>
</html>
