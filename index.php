<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- подключаем файлы -->
    <link rel="stylesheet" href="/css/style.css">
    <script src='/js/app.js'></script>
    <title>Shelter</title>
</head>
<body>
    <header id="header">
        <form action="#about">
            <button class="header_button"><h3>О НАС</h3></button>
        </form>
        <form action="#animals">
            <button class="header_button"><h3>ЖИВОТНЫЕ</h3></button>
        </form>
        <form action="#inspection">
            <button class="header_button"><h3>ОСМОТР</h3></button>
        </form>
        <form action="#help">
            <button class="header_button"><h3>ПОМОЩЬ</h3></button>
        </form>
        <form action="#reviews">
            <button class="header_button"><h3>ОТЗЫВЫ</h3></button>
        </form>
        <form action="#footer">
            <button class="header_button"><h3>КОНТАКТЫ</h3></button>
        </form>
        <h3 class="header_text">МЫ ДЛЯ НИХ ВСЯ ЖИЗНЬ</h3>
        <div class="contact_ikons">
            <a href="https://yandex.ru/maps/-/CCUgBAUxtC">
                <img class="contact_img" src="/image/free-icon-russia-5635117.png" alt="map">
            </a>
            <br>
            <a href="#footer">
                <img class="contact_img" src="/image/free-icon-phone-call-3222644.png" alt="number">
            </a>
        </div>
        <div class="contact">
            <h3>УЛ. ВОЙСТРОЧЕНКО, Д.2</h3>
            <h3>ТЕЛ. 44-44-44</h3>
        </div>
    </header>
    <main>
        <div class="performance">
            <h3 class="perfomans_text_one">ЛЮБИМЫЕ ЖИВОТНЫЕ</h3>
            <h3 class="perfomans_text_two">приют для животных</h3>
            <br>
            <form action="#animals">
                <button class="performance_button_one"><h3>ЗАБРАТЬ ПИТОМЦА</h3></button>
            </form>
            <br>
            <form action="#help">
                <button class="performance_button_two"><h3>ПОЖЕРТВОВАТЬ</h3></button>
            </form>
        </div>
        <div id="about" class="about">
            <img class="about_img" src="/image/1649121603_46-vsegda-pomnim-com-p-koshka-i-sobaka-na-prirode-foto-52.jpg" alt="animals">
            <p class="about_text">Являясь временным домом для питомцев, наш приют ставит перед собой задачи 
            <br>    
            по оказанию необходимой помощи собакам и кошкам, находящимся у него на попечении,
            <br>
            такие как содержание, уход, кормление, и конечно пристройство в семьи или к людям,
            <br>
            готовым стать друзьями для хвостатых с непростой судьбой.</p>
        </div>
        <div id="animals" class="animals">
            <div class="animals_pictures">
                <h3 class="animals_h">Очень ждут хозяина</h3>
                <br>
                <img class="animals_img" src="/image/image-28-04-23-06-41-3.jpeg" alt="cats">
                <br>
                <p class="animals_p">Шотландские вислоухие мальчик и девочка</p>
                <br>
                <img class="animals_img" src="/image/image-28-04-23-06-41-2.jpeg" alt="cats">
                <br>
                <p class="animals_p">Шотландский вислоухий мальчик</p>
            </div>
            <div class="animals_form">
                <form action="/php/connection.php" method="post" name="animalsform" autocomplete="off" onsubmit="return validateForm()">
                    <h3 class="animals_form_h">Хочу забрать</h3>
                    <input class="animals_form_input" type="text" name="name" id="name" placeholder="Ваше имя">
                    <br>
                    <input class="animals_form_input" type="email" name="mail" id="mail" placeholder="E-mail">
                    <br>
                    <input class="animals_form_input" type="text" name="number" id="number" placeholder="Телефон">
                    <br>
                    <input class="animals_form_input" type="text" name="description" id="description" placeholder="Кого хочу забрать">
                    <br>
                    <input class="animals_form_button" type="reset" onclick="alert('Данные очищены')"
                    name="check_one" value="Очистить"></h3>
                    <input class="animals_form_button" type="submit" onclick="alert('Данные отправлены')"
                    name="check_two" value="Отправить">
                </form>
            </div>
        </div>
        <div id="inspection" class="inspection">
            <div class="inspection_text">
                <h3 class="inspection_text_h">ВЕТЕРИНАРНЫЙ ОСМОТР</h3>
                <p class="inspection_text_p">При поступлении фельдшер осматривает, 
                <br>
                обрабатывает от паразитов, вакцинирует, 
                <br>
                чипирует каждое животное.</p>
                <br>
                <h3 class="inspection_text_h_k">КАСТРАЦИЯ И СТЕРИЛИЗАЦИЯ</h3>  
                <p class="inspection_text_p">В этот период фотографы создают альбом 
                <br>    
                питомцу, животное выходит в пиар и уже 
                <br>
                может быть замечен будущими хозяевами.</p>  
            </div>
            <div class="inspection_text">
                <h3 class="inspection_text_h">КАРАНТИН</h3>
                <p class="inspection_text_p">Животное помещается в карантин 
                <br>
                продлолжительностью не менее 21 дня. 
                <br>
                За это время сотрудники выявляют 
                <br>
                особенности и его здоровья.</p>
                <br>
                <h3 class="inspection_text_h_v">ВСТРЕЧА С СЕМЬЕЙ</h3>
                <p class="inspection_text_p">После прохождения карантина питомец 
                <br>    
                отправляется в одну из выставочных комнат, 
                <br>
                где гости приюта выбирают себе новых членов
                <br>
                семьи.</p>
            </div>
            <img class="inspection_img" src="/image/spaniel-schenok-ryzhiy-son.jpg" alt="dog">
        </div>
        <div id="help" class="help">
            <div class="help_img_one">
                <h3 class="help_text_h">ПОМОГИТЕ ЖИВОТНЫМ</h3>
                <div class="helps">
                    <div>
                    <h3 class="helps_h">Помочь кормом</h3>
                    <br>
                    <p class="helps_p">Кормить животных не простая задача, а
                    <br>
                    голодными мы их не можем оставить,
                    <br>
                    поэтому собираем любые влажные корма
                    <br>
                    премиум и супер-премиум класса.</p>
                    </div>
                    <img class="help_img" src="/image/pngwing.com.png" alt="help_img">
                </div>
            </div>
            <div class="help_img_three">
                <div class="helps_three">
                    <div>
                    <h3 class="helps_h">Сделать подарки</h3>
                    <br>
                    <p class="helps_p">Для животных приюта бесценно любое
                    <br>
                    проявление внимания, они обожают
                    <br>
                    получать вкусные и полезные подарки.
                    <br>
                    Порадуйте котика не выходя их дома.</p>
                    </div>
                    <img class="help_img" src="/image/pngwing.com (2).png" alt="help_img">
                </div>
                <p class="helps_three_p">Чтобы помочь животным, свяжитесь с нами,
                    <br>    
                    по указанным контактам мы предоставим 
                    <br>
                    Вам всю необходимую информацию.</p>
            </div>
            <div class="help_img_two">
                <p class="help_text_p">Это проще, чем кажется</p>
                <div class="helps">
                    <div>
                    <h3 class="helps_h">Помочь лекарствами</h3>
                    <br>
                    <p class="helps_p">Мы оказываем всем животным 
                    <br>
                    профессиональную ветеринарную
                    <br> 
                    помощь. Список необходимых 
                    <br>
                    лекарств можно уточнить у нас. </p>
                    </div>
                    <img class="help_img" src="/image/pngwing.com (1).png" alt="help_img">
                </div>
            </div>
        </div>
        <div id="reviews" class="reviews">
            <div class="reviews_block">
                <h3 class="reviews_h">Смородинова Татьяна</h3>
                <p class="reviews_p">Очень понравился приют. Помогли с выбором.
                    <br>
                    Спасибо большое
                </p>
            </div>
            <div class="reviews_block">
                <h3 class="reviews_h">Мельников Николай</h3>
                <p class="reviews_p">Приют очень удорбно расположен. Вежливый
                    <br>
                    персонал.
                </p>
            </div>
            <div class="reviews_block">
                <h3 class="reviews_h">Капицкая Валентина</h3>
                <p class="reviews_p">Решила помочь приюту. Связалась,
                    <br>
                    все доступно объяснили.
                </p>
            </div>
            <div class="reviews_block">
                <h3 class="reviews_h">Смородинов Иван</h3>
                <p class="reviews_p">Хочу поблагодарить за помощь в 
                    <br>
                    выборе животного.
                </p>
            </div>
            <div class="reviews_block">
                <h3 class="reviews_h">Логвинова Инна</h3>
                <p class="reviews_p">Приятный персонал. В самом приюте 
                    <br>
                    очень чисто и аккуратно.</p>
            </div>
        </div>
    </main>
    <footer id="footer">
        <div class="footer_all">
            <a href="#header">
                <img class="ikon_up" src="/image/up-arrow.png" alt="vk">
            </a>
            <div class="contacts">
                <p class="contacts_p">Адрес: Брянск, ул. Войстроченко, д.2</p>
                <br>
                <p class="contacts_p">Телефон: 44-44-44</p>
                <br>
                <p class="contacts_p"><E-mail>E-mail: info@yandex.ru</E-mail></p>
            </div>
            <div class="operating_mode">
                <h3 class="operating_mode_h">Режим работы:</h3>
                <br>
                <p class="operating_mode_p">Понедельник-Воскресенье</p>
                <br>
                <p class="operating_mode_p">С 9:00 до 18:00</p>
            </div>
            <div class="socials">
                <p class="socials_p">Нас можно найти</p>
                <div class="socials_ikon">
                    <a href="https://vk.com/">
                        <img class="ikon" src="/image/free-icon-vk-logo-81893.png" alt="vk">
                    </a>
                    <a href="https://www.viber.com/ru/">
                        <img class="ikon" src="/image/free-icon-viber-2111757.png" alt="viber">
                    </a>
                    <a href="https://web.telegram.org/k/">
                        <img class="ikon" src="/image/free-icon-telegram-logo-87413.png" alt="telegram">
                    </a>
                    <a href="https://www.youtube.com/">
                        <img class="ikon" src="/image/free-icon-youtube-152810.png" alt="youtube">
                    </a> 
                </div>
            </div>
        </div>
        <br>
        <p class="copyrate">2023 Cмородинова Вероника Сергеевна</p>
    </footer>
</body>
</html>