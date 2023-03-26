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
    <main>
        <h2>Gerador de Copy</h2>
        <p>Digite as Informações do Produto!</p>
        <article>
            <form id="copyForm" method="POST" action="{{route('copySearch')}}">
                @csrf
                <p>
                    <label>Nome do Produto:</label>
                    <input type="text" name="nome_produto" required>
                </p>
                <p>
                    <label>Preço do Produto:</label>
                    <input type="number" name="preco_produto" required>
                </p>
                <p>
                    <label>Caracteristicas do Produto:</label>
                    <input type="text" name="caracteristicas_produto" required>
                </p>
                <p>
                    <label>Publico Alvo do Produto:</label>
                    <input type="text" name="publicoalvo_produto" required>
                </p>
                <p>
                    <label>Estilo da Copy:</label>
                    <select name="estilo_copy">
                        <option value="formal">Formal</option>
                        <option value="informal">Informal</option>
                    </select>
                </p>
                <p>
                    <input type="submit" value="Gerar Copy">
                </p>
            </form>
        </article>

    </main>
    <footer>
        Laravel - GPT (Trikx)
    </footer>
</body>
</html>
