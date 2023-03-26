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
            <a href="/ingredientes">Gerador de Receitas</a>
            <a href="/copy">Gerador de Copy</a>
        </nav>
        </nav>
    </header>
    <main id="receita">
        <h2>Gerador de Receitas</h2>
        <p>Crie receitas utilizando os ingredientes que você tem na sua geladeira!</p>
        <article>
            <label>Digite, seprado por virgula os ingredientes que você tem na sua geladeira.</label>
            <form method="POST" action="{{route('ingredientes')}}">
                @csrf
                <input type="text" name='ingredientes'>
                <input type="submit" value="Consultar Receita">
            </form>
        </article>
        @if(!empty($receita))
        <code>
            {!! preg_replace("/\r\n|\n/", '<br>', $receita) !!}
        </code>
        @endif
    </main>
    <footer>
        Laravel - GPT (Trikx)
    </footer>
</body>
</html>
