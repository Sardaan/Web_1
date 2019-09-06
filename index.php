<!doctype html>

<html lang="ru">
<head>
    <title> Web1 </title>
    <meta charset = "UTF-8"/>
    <link rel="stylesheet" href="style.css"/>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
</head>


<body>

<header>
    <span><img src="img/logo.png" alt="logo" style="height: 80px; padding-left: 5%"></span>
    <p id="name">
        Григорьева Сардана P3100 <br>
        Вариант 200005
    </p>
</header>

<div class="content">

    <div class="wrapper">
    <div class="field">
        <img src="img/field.png" alt="Поле попадания" style="height: 300px">
    </div>


    <form class="form" id="form" method="post" onsubmit="return validate()" action="">

        <h2>Выбор координат точки и радиуса</h2>
            <!--onClick return content-->
        <p>
            <span>X:</span>
            <button type="button" class="x" value="-4">-4 </button>
            <button type="button" class="x" value="-3">-3 </button>
            <button type="button" class="x" value="-2">-2 </button>
            <button type="button" class="x" value="-1">-1 </button>
            <button type="button" class="x" value="0">0 </button>
            <button type="button" class="x" value="1">1 </button>
            <button type="button" class="x" value="2">2 </button>
            <button type="button" class="x" value="3">3 </button>
        </p>

        <p class="y">
            <span>Y:</span>
            <input id="y-value" name="y_value" type="text" value="" maxlength="6" placeholder="-3 ... 3" /> <br>
        </p>

        <p class="r">
            <span>R:</span>
            <input id="r-value" name="r_value" type="text" value="" maxlength="6" placeholder="2 ... 5" /> <br>
        </p>
        <div class="form-buttons">
            <button class="send-button" type="submit" id="submit-button">Send</button>
            <button class="clear-button" type="button" id="clear-button">Clear</button>
        </div>
        <span id="wrong-data" style="color: red"> </span>
        <div class="dora" >
            <img src="img/dora.png" id="dora" alt="Dora" style="width: 101px; height: 150px"/>
        </div>
    </form>
    </div>

    <table id="ans">
        <?php
            session_start();
            if (!isset($_SESSION['history'])) {
                $_SESSION['history'] = array();
            }
            include 'table.php';
        ?>
    </table>

</div>
<script src="validator.js"></script>
</body>
</html>


<!--todo   исправить время-->