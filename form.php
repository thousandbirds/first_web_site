<?php

require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital@1&family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <title>form</title>
</head>
<body>
    <div class="second__page">
        <img class="logo" src="" alt=""> 
        <p class="contact__form__title">Контактна<br>Форма</p>
        <div class="line"></div>
        <form action="create.php" method="post">
            <div class="form__container">
                <div class="form__container__left">
                    <input class="item" type="text" name="name" placeholder="Ім'я *">
                    <input class="item" type="text" name="surname" placeholder="Прізвище *">
                    <input class="item" type="text" name="mail" placeholder="Електрона пошта *">
                    <input class="item" type="text" name="number" placeholder="Номер телефону *">
                    <div class="form__container__inputs">
                        <input type="checkbox" name="item1" id="item1">
                        <label for="item1">* Я ознайомився(-лася) з Загальними положеннями й умовами та Політикою конфіденційності та приймаю їх.</label>
                        <br>
                        <br>
                    </div>
                    <input class="btn__submit" type="submit" value="Надіслати повідомлення">
                </div>
                <div class="form__container__right">
                    <textarea name="description" placeholder="Повідомлення *"></textarea> 
                    <div class="form__container__right__inner">
                        <p>Чим ми можемо допомогти?</p>
                        <select name="question" id="">
                            <option name="question" value="">Бізнес</option>
                            <option name="question" value="">Курси IT академії</option>
                            <option name="question" value="">Мовна школа</option>
                            <option name="question" value="">Співпраця</option>
                            <option name="question" value="">Перевірка працевлаштування</option>
                            <option name="question" value="">Кар'єрні можливості</option>
                        </select>
                    </div>  
                </div>
            </div>
        </form>
    </div>
</body>
</html>