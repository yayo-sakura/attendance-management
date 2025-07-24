<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>attendance-management</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/general_user.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header__logo">
        <h1>
            <img src="../image/logo.png" alt="COACHTECH">
        </h1>
      </div>
    </div>
    <nav class="header__nav">
      <ul class=header__list>
          <li class="header__list-link">
              <a class="btn" href="/attendance">勤怠</a>
          </li>
          <li class="header__list-link">
              <a class="btn" href="/attendance/list">勤怠一覧</a>
          </li>
          <li class="header__list-link">
              <a class="btn" href="/stamp_correction_request/list">申請</a>
          </li>
          <li class="header__list-link">
              <a class="btn" href="/admin/login">ログアウト</a>
          </li>
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>