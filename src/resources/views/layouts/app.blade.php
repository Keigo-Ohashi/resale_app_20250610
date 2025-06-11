<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>フリマアプリ</title>
  <link rel="stylesheet" href="{{ asset('css/common/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common/common.css') }}" />
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__section">
      <a class="header__logo" href="/">
        <img src="{{ asset('images/logo.svg') }}" alt="サイトロゴ">
      </a>
    </div>
    <div class="header__section header__section--search">
      <form class="header__search-form" action="/" method="get">
        <div class="header__search-input">
          <input type="text" name="keyword" placeholder="なにをお探しですか？" value="{{ $keyword }}">
        </div>
      </form>
    </div>
    <nav class="header__section">
      <ul class="header__nav-list">
        <li class="header__nav-item"><a href="/login">ログイン</a></li>
        <li class="header__nav-item"><a href="/mypage">マイページ</a></li>
        <li class="header__nav-item header__nav-item--exhibition"><a href="/sell">出品</a></li>
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>
