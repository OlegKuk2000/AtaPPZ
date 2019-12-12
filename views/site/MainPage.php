<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<!DOCTYPE html>
<p>
    <head>
        <meta charset="utf-8">
        <title>background-size</title>
        <style>
            body {
                height: 200px; /* Высота блока */
                background: url(../../web/Дорога.jpg) 100% 100%; /* Добавляем фон */
                background-size: cover; /* Масштабируем фон */
            }
        </style>
        <style>
            #user {
                width: 300px; /* Ширина поля в пикселах */
                height: 50px;
            }
        </style>
        <style type="text/css">
            #copyright {
                position: [I]justfily[/I];
                bottom: 1em;
                right: 1em;
                text-align: center;
                color: white;
                position: absolute;
                left: 1em;
            }
        </style>
    </head>
    <>
<p><img src="../../web/Logo.png" width="100" height="85"></p>
<p align="center" , style="color:#ffffff; font-size:30px"  > ЗАКАЗ БИЛЕТОВ ОНЛАЙН </p>
</p>
<center>
    <select id="user" style="margin-right: auto; margin-left: auto";  >
        <option>Токмак-Запорожье</option>
        <option>Мелитополь-Запорожье</option>
    </select>
    <input id="user" value="Дата отправления">
</center>
<br>
<br>
<center>
    <div class="form-group">
        <div>
            <?= Html::submitButton('Заказать билет', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</center>

<div id="copyright">© 2019-2019 Компания "БАСПАСС". Все права защищены.</div>
</body>
</html>