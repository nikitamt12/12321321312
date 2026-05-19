<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: Arial;
        }

        header{
            background:black;
            padding:20px;
        }

        nav{
            display:flex;
            gap:20px;
        }

        nav a{
            color:white;
            text-decoration:none;
        }

        main{
            padding:40px;
        }

        main img{
            width:400px;
            display:block;
            margin-bottom:20px;
        }

        footer{
            background:black;
            color:white;
            padding:20px;
            text-align:center;
        }

    </style>

</head>
<body>

<header>

    <nav>
        <a href="{{ route('home') }}">Главная</a>
        <a href="{{ route('array') }}">Массивы</a>
    </nav>

</header>

<main>

    <img src="/img/1.webp" alt="">

    <p>
        гггггггггггггггггггггггггггггггггг
    </p>

</main>

<footer>

    © Лихачев 2026

</footer>

</body>
</html>