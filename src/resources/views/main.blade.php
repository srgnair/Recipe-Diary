<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="ひよこ豆とアボガドのタコス">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <title>Recipe Diary</title>
</head>

<body>
    <main>
        <div class="wrapper">
            <div class="image">
                <img src="{{ asset('images/recipe.jpg') }}" alt="料理の画像">
            </div>
            <div class="container">
                <section class="recipe-header">
                    <h2>ひよこ豆とアボガドのタコス</h2>
                    <p>たっぷりのひよこ豆とレンズ豆にアボガドとトマトを添えて、少しライムを絞ったらおいしいタコスのできあがりです。</p>
                </section>
                <section class="ingredients-list">
                    <h3>材料（2人分）</h3>
                    <dl>
                        <dt>テキストテキスト</dt>
                        <dd>1個</dd>
                        <dt>テキストテキスト</dt>
                        <dd>1個</dd>
                        <dt>テキストテキスト</dt>
                        <dd>1個</dd>
                        <dt>テキストテキスト</dt>
                        <dd>1個</dd>
                        <dt>テキストテキスト</dt>
                        <dd>1個</dd>
                    </dl>
                </section>
                <section class="steps">
                    <h3>作り方</h3>
                    <ol>
                    <li>テキストテキストテキストテキスト</li>
                    <li>テキストテキストテキストテキスト</li>
                    <li>テキストテキストテキストテキスト</li>
                    <li>テキストテキストテキストテキスト</li>
                    <li>テキストテキストテキストテキスト</li>
                    </ol>
                </section>
            </div>
        </div>
        <div class="link">
            <a href="#">レシピ一覧を見る</a>
        </div>
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