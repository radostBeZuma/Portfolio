let header = document.createElement('header');
header.className = "header";
header.innerHTML = ` <div class="header__size">
<div class="header-top">
    <div id="icon" class="header-top__wrap">
        <div class="header-top__container">
            <div class="icon">
                <div class="icon__wrap">WebLab</div>
            </div>
            <nav class="menu">
                <div class="menu__wrap">
                    <div class="button">
                        <a class="button__link" href='../html/text.html'>
                            <div class="button__wrap">Первый текст</div>
                        </a>
                    </div>
                    <div class="button">
                        <a class="button__link" href='../html/home page.html'>
                            <div class="button__wrap">Дом. страница</div>
                        </a>
                    </div>
                    <div class="button">
                        <a class="button__link" href='../html/personal info.html'>
                            <div class="button__wrap">Личные данные</div>
                        </a>
                    </div>
                    <div class="button">
                        <a class="button__link" href='../html/photoalbum.html'>
                            <div class="button__wrap">Фотоальбом</div>
                        </a>
                    </div>
                    <div class="button">
                        <a class="button__link" href='../html/tables.html'>
                            <div class="button__wrap">Таблицы</div>
                        </a>
                    </div>
                    <div class="button">
                        <a class="button__link" href='../html/video.html'>
                            <div class="button__wrap-last">Видео</div>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="header-bottom">
    <div class="header-bottom__wrap">
        <div class="header-bottom__container">
            <h1 class="header-bottom__text">Cветлана Эдуардовна Горобец</h1>
            <p class="header-bottom__desc">студентка ТулГу 4 курс</p>
        </div>
    </div>
</div> 
</div>`;


document.body.prepend(header);
