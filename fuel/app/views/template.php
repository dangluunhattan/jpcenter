<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <?php echo Asset::css('bootstrap.css'); ?>
        <style>
            body { margin-top: 50px; }
        </style>
        <?php
        echo Asset::js(array(
            'http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js',
            'bootstrap.js',
        ));
        ?>
        <?php echo Asset::css('template.css'); ?>
        <?php if (isset($css)) : ?>
            <?php echo Asset::css($css); ?>
        <?php endif; ?>
        <?php if (isset($js)) : ?>
            <?php echo Asset::js($js); ?>
        <?php endif; ?>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="622776844450-orrkbjd3r1ecem79n2c9kslftc2n9efu.apps.googleusercontent.com">
        <!--webfonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <!--//webfonts-->
        <!--FB Login API -->
    <div id="fb-root"></div>
    <script>
        $(function () {
            $('.topbar').dropdown();
        });
    </script>
</head>
<body>

    <div class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <div class="button-outside">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="/">FOIS SMILE</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">紹介</a>
                        <ul class="dropdown-menu multi-level">
                            <li><a href="#">Foisとは？</a></li>
                            <li><a href="#">施設</a></li>
                            <li><a href="#">教師たち</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ニュース</a>
                        <ul class="dropdown-menu multi-level">
                            <li><a href="#">お知らせ</a></li>
                            <li><a href="#">プロモーション</a></li>
                            <li><a href="#">Nghỉ, học bù</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">コース</a>
                        <ul class="dropdown-menu multi-level">
                            <li><a href="#">新しい登録</a></li>
                            <li><a href="#">開けたコース</a></li>
                            <li><a href="/schedule">教授スケジュール</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/contact" class="dropdown-toggle">お問い合わせ</a>
                    </li>
                </ul>
                <hr>
                <ul class="nav navbar-nav pull-right">
                    <?php if (!isset($current_user)): ?>
                        <li>
                            <a href="/login" class="login-button">ログイン</a>
                        </li>

                        <li>
                            <a href="#" class="reg-button">登録</a>
                        </li>
                    <?php endif; ?>


                    <?php if (isset($current_user)): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $current_user->username; ?></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="#">ユーザ情報</a></li>
                                <li><a href="#">時刻表</a></li>
                                <li><a href="#">ヒストリ</a></li>
                                <li><a href="/logout">ログアウト</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

    <?php echo $content; ?>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ul class="list-inline">
                        <li><a href="">ホームページ</a></li>
                        <li><a href="#feature2">センータ紹介</a></li>
                        <li><a href="mailto:dangluunhattan@gmail.com">登録</a></li>
                    </ul>
                    <p>COPYRIGHT © 2017 FOIS Inc. ALL RIGHTS RESERVED.</p>

                </div>
            </div>
        </div>
    </div> <!-- End footer -->
</body>
</html>
