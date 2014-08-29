<html>
    <head>
        <link rel="stylesheet" href="/files/css/style.css" />
        <script src="/files/js/jquery/jquery.1.9.1.js"></script>
        <script src="/files/js/menu.js"></script>
        <script src="/files/js/popup.js"></script>
        <script src="/files/js/up-down.js"></script>
    </head>
    <body>
        <div id="main">
            <div id="line">
                <?php
                    include_once('components/line.php');
                ?>
            </div>
            <div id="header">
                <?
                    include_once('components/header.php')
                ?>
            </div>
            <div id="menu">
                <?php
                    include_once('components/menu.php');
                ?>
            </div>
            <div id="content">
                <div class="left">
                    <?php
                        include_once('components/left.php');
                    ?>
                </div>
                <div class="cont">
                    <?php
                        include_once('components/cont.php');
                    ?>
                </div>
                <div class="hold"></div>
            </div>
            <div id="footer">
                <?php
                    include_once('components/footer.php');
                ?>
            </div>
        </div>
        <div class="popup-window" id="popup1" onclick="location.href='javascript:PopUpHide()'">
            <div class="popup-content">
                <? include_once('components/form/auth.php') ?>
            </div>
        </div>
        <div class="go-up" title="Вверх" id='ToTop'>
            <img src="/files/image/up.png" />
        </div>
    </body>
</html>
