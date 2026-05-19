<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>

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

        .buttons{
            padding:20px;
            display:flex;
            gap:20px;
        }

        .buttons a{
            padding:10px 20px;
            background:black;
            color:white;
            text-decoration:none;
        }

        .products{
            padding:40px;
            display:grid;
            grid-template-columns: repeat(4,1fr);
            gap:20px;
        }

        .card{
            border:1px solid black;
            padding:20px;
        }

        .card img{
            width:100%;
            height:200px;
            object-fit:cover;
            margin-bottom:10px;
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

<div class="buttons">

    <a href="{{ route('shuffle') }}">Перемешать массив</a>

    <a href="{{ route('sort') }}">Сортировать массив</a>

    <a href="{{ route('filter') }}">Фильтр > 1000</a>

</div>

<div class="products">

    @foreach($array as $item)

        <div class="card">

            <img src="{{ $item['path'] }}" alt="{{ $item['title'] }}">

            <h3>{{ $item['title'] }}</h3>

            <p>{{ $item['price'] }} ₽</p>

        </div>

    @endforeach

</div>

<footer>

    © Лихачев 2026

</footer>

</body>
</html>