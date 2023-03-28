<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-GTP 🤖</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <h1>Laravel - GPT 🤖</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/ingredientes">Gerador de Receitas 🍲</a>
            <a href="/copy">Gerador de Copy ©️</a>
            <a href="/movie">Encontrar Filme 🎬</a>
        </nav>
        </nav>
    </header>
    <main>
        <h2>Encontre o Filme</h2>
        <p>Digite suas lembranças a respeito do filme!</p>
        <article>
            <form id="movieForm" method="POST" action="{{route('movieSearch')}}">
                @csrf
                <input type="text" name='dados_movie'>
                <input type="submit" value="Pesquisar Filme">
            </form>
        </article>
        @if(!empty($movie))
        <code>
            {!! preg_replace("/\r\n|\n/", '<br>', $movie) !!}
        </code>
        @endif
    </main>
    <footer>
        Laravel - GPT (Trikx)
    </footer>
</body>
</html>
