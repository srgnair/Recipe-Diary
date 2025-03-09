<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="料理レシピを公開するサイトです。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <title>Recipe Diary</title>
</head>

<body>
    <main>
        <div class="main-visual">
            <img src="{{ asset('images/mainvisual.jpg') }}" alt="main-visual">
        </div>
        <section class="title">
            <h1>Recipe Diary</h1>
            <p>日々の料理レシピをまとめています。</p>
            <p>和食や洋食、中華、お菓子までいろいろな料理レシピをアップしていますので、</p>
            <p>みなさんの献立にお役立てくださいね！</p>
        </section>
        <section class="main">
            <ul>
                <li><a href="{{ route('main') }}"><img src="{{ asset('images/recipe1.jpg') }}" alt="レシピ1"></a></li>
                <li><a href="{{ route('main') }}"><img src="{{ asset('images/recipe2.jpg') }}" alt="レシピ2"></a></li>
                <li><a href="{{ route('main') }}"><img src="{{ asset('images/recipe3.jpg') }}" alt="レシピ3"></a></li>
            </ul>
            <a class="main__list-link" href="#">レシピ一覧を見る</a>
        </section>
    </main>

    <footer>
        <div class="footer__link">
            <a href="#">instagram</a>
            <a href="#">X</a>
            <a href="#">Facebook</a>
        </div>
        <p>&copy; 2021 Recipe Diary</p>
    </footer>
</body>
</html>