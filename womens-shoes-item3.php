<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $today = date("j.m.Y");
        $now = date("G:i:s");
        $name = trim($_POST['user-name']);
        $tel = trim($_POST['tel']);
        $region = trim($_POST['region']);
        $town = trim($_POST['user-town']);
        $number_post = trim($_POST['user-number']);
        $size = $_POST['size'];
        $model = $_POST['model'];

        $token = "856008473:AAFTCGJfub7CoaTvO0IEXtRnGghiBm1p42U";
        $chat_id = "-328962600";

        $order_data = array(
            "Дата замовлення: " => $today,
            "Час: " => $now,
            "Прізвище та ім'я: " => $name,
            "Номер телефону: " => $tel,
            "Область: " => $region,
            "Місто: " => $town,
            "Номер відділення: " => $number_post,
            "Модель: " => $model,
            "Розмір: " => $size,
        );
        foreach($order_data as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

        if ($sendToTelegram) {
            echo "Thank you";
        } else {
            echo "Error";
        }
    }
?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <!--Slider-styles-->
        <link rel="stylesheet" href="slider/dist/css/slider-pro.min.css"/>
        <!--/Slider-styles-->
        <title>HypeShop</title>
        <link rel="shortcut icon" href="images/nav-img.png" type="image/x-icon">    
        <meta name="description" content="Великий асортимент взуття та одягу, яке ми доставимо в будь-яке місто України!">
        <meta name="title" content="Полюбляєш ходити в стильному взутті та одязі? Тоді тобі до нас! | HypeShop">
        <meta name="keywords" content="кроссовки Украина,кроссовки украина, купить кроссовки Украина, купить кроссовки украина, купить кроссовки, кроссовки купить, стильные кроссовки Украина, стильные кроссовки купить, 
        взуття Україна, взуття україна, купити взуття Україна, купити взуття україна, купити взуття, взуття купити, модне взуття купити, 
        hypeshop, hypeshop кроссовки, hypeshop купить, hypeshop штаны, hypeshop кофты, hypeshop куртки, hypeshop кроссовки купить, hypeshop купить, hypeshop штаны купить, hypeshop кофты купить, hypeshop куртки купить,
        HypeShop, HypeShop кроссовки, HypeShop купить, HypeShop штаны, HypeShop кофты, HypeShop куртки, HypeShop кроссовки купить, HypeShop купить, HypeShop штаны купить, HypeShop кофты купить, HypeShop куртки купить,
        hypeshop кросівки, hypeshop купити, hypeshop штани, hypeshop кофти, hypeshop куртки, hypeshop кросівки купити, hypeshop взуття купити, hypeshop штани купити, hypeshop кофти купити, hypeshop куртки купити,
        HypeShop кросівки, HypeShop купити, HypeShop штани, HypeShop кофти, HypeShop куртки, HypeShop кросівки купити, HypeShop взуття купити, HypeShop штани купити, HypeShop кофти купити, HypeShop куртки купити,
        штани Україна, штани україна, штани україна купити, штани Україна купити, штани купити Україна, штани купити україна, штаны Украина, штаны Украина, штаны украина купить, штаны Украина купить, штаны купить Украина, штаны купить украина,
        кофти Україна, кофти Україна, кофти україна купити, кофти Україна купити, кофти купити Україна, кофти купити україна, кофты Украина, кофты Украина, кофты украина купить, кофты Украина купить, кофты купить Украина, кофты купить украина,
        кофта Україна, кофта Україна, кофта україна купити, кофта Україна купити, кофта купити Україна, кофта купити україна, кофта Украина, кофта Украина, кофта украина купить, кофта Украина купить, кофта купить Украина, кофта купить украина,
        толстовка Україна, толстовка Україна, толстовка україна купити, толстовка Україна купити, толстовка купити Україна, толстовка купити україна, толстовка Украина, толстовка Украина, толстовка украина купить, толстовка Украина купить, толстовка купить Украина, толстовка купить украина,
        куртки Україна, куртки Україна, куртки україна купити, куртки Україна купити, куртки купити Україна, куртки купити україна, куртки Украина, куртки Украина, куртки украина купить, куртки Украина купить, куртки купить Украина, куртки купить украина,
        куртка Україна, куртка Україна, куртка україна купити, куртка Україна купити, куртка купити Україна, куртка купити україна, куртка Украина, куртка Украина, куртка украина купить, куртка Украина купить, куртка купить Украина, куртка купить украина,
        футболка україна, футболка Україна, футболка україна купити, футболка Україна купити, футболка купити Україна, футболка купити україна, футболка Украина, футболка Украина, футболка украина купить, футболка Украина купить, футболка купить Украина, футболка купить украина,
        футболки Україна, футболки Україна, футболки україна купити, футболки Україна купити, футболки купити Україна, футболки купити україна, футболки Украина, футболки Украина, футболки украина купить, футболки Украина купить, футболки купить Украина, футболки купить украина,
        nike, кроссовки nike,кросівки nike, взуття nike, взуття nike Україна, взуття nike Україна, взуття nike україна купити, взуття nike Україна купити, взуття nike купити Україна, взуття nike купити україна, обувь nike Украина, обувь nike Украина, обувь nike украина купить, обувь nike Украина купить, обувь nike купить Украина, обувь nike купить украина,
        кросівки nike україна, кросівки nike Україна, кросівки nike україна купити, кросівки nike Україна купити, кросівки nike купити Україна, кросівки nike купити україна, кроссовки nike Украина, кроссовки nike Украина, кроссовки nike украина купить, кроссовки nike Украина купить, кроссовки nike купить Украина, кроссовки nike купить украина,
        adidas, кроссовки adidas,кросівки adidas, взуття adidas, взуття adidas Україна, взуття adidas Україна, взуття adidas україна купити, взуття adidas Україна купити, взуття adidas купити Україна, взуття adidas купити україна, обувь adidas Украина, обувь adidas Украина, обувь adidas украина купить, обувь adidas Украина купить, обувь adidas купить Украина, обувь adidas купить украина,
        кросівки adidas україна, кросівки adidas Україна, кросівки adidas україна купити, кросівки adidas Україна купити, кросівки adidas купити Україна, кросівки adidas купити україна, кроссовки adidas Украина, кроссовки adidas Украина, кроссовки adidas украина купить, кроссовки adidas Украина купить, кроссовки adidas купить Украина, кроссовки adidas купить украина,
        puma, кроссовки puma,кросівки puma, взуття puma, взуття puma україна, взуття puma Україна, взуття puma україна купити, взуття puma Україна купити, взуття puma купити Україна, взуття puma купити україна, обувь puma Украина, обувь puma Украина, обувь puma украина купить, обувь puma Украина купить, обувь puma купить Украина, обувь puma купить украина,
        кросівки puma україна, кросівки puma Україна, кросівки puma україна купити, кросівки puma Україна купити, кросівки puma купити Україна, кросівки puma купити україна, кроссовки puma Украина, кроссовки puma Украина, кроссовки puma украина купить, кроссовки puma Украина купить, кроссовки puma купить Украина, кроссовки puma купить украина,
        reebok, кроссовки reebok,кросівки reebok, взуття reebok, взуття reebok україна, взуття reebok Україна, взуття reebok україна купити, взуття reebok Україна купити, взуття reebok купити Україна, взуття reebok купити україна, обувь reebok Украина, обувь reebok Украина, обувь reebok украина купить, обувь reebok Украина купить, обувь reebok купить Украина, обувь reebok купить украина,
        кросівки reebok україна, кросівки reebok Україна, кросівки reebok україна купити, кросівки reebok Україна купити, кросівки reebok купити Україна, кросівки reebok купити україна, кроссовки reebok Украина, кроссовки reebok Украина, кроссовки reebok украина купить, кроссовки reebok Украина купить, кроссовки reebok купить Украина, кроссовки reebok купить украина,
        fila, кроссовки fila,кросівки fila, взуття fila, взуття fila україна, взуття fila Україна, взуття fila україна купити, взуття fila Україна купити, взуття fila купити Україна, взуття fila купити україна, обувь fila Украина, обувь fila Украина, обувь fila украина купить, обувь fila Украина купить, обувь fila купить Украина, обувь fila купить украина,
        кросівки fila україна, кросівки fila Україна, кросівки fila україна купити, кросівки fila Україна купити, кросівки fila купити Україна, кросівки fila купити україна, кроссовки fila Украина, кроссовки fila Украина, кроссовки fila украина купить, кроссовки fila Украина купить, кроссовки fila купить Украина, кроссовки fila купить украина">
    </head>
  <body>
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/nav-img.png" class="d-inline-block align-top" alt="brand-img">
                        <a class="navbar-brand" href="index.html">HypeShop</a>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbar1">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="https://hypeshop.herokuapp.com/index.html#Новинки">Новинки</a>
                            </li>
                            <li class="nav-item active">
                                    <a class="nav-link" href="https://hypeshop.herokuapp.com/index.html#Популярні_моделі">Популярні моделі</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Категорії
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="https://hypeshop.herokuapp.com/index.html#Взуття">Чоловіче взуття</a>
                                    <a class="dropdown-item" href="https://hypeshop.herokuapp.com/index.html#Взуття">Жіноче взуття</a>
                                    <a class="dropdown-item" href="https://hypeshop.herokuapp.com/index.html#Одяг1">Куртки</a>
                                    <a class="dropdown-item" href="https://hypeshop.herokuapp.com/index.html#Одяг1">Штани</a>
                                    <a class="dropdown-item" href="https://hypeshop.herokuapp.com/index.html#Одяг2">Кофти</a>
                                    <a class="dropdown-item" href="https://hypeshop.herokuapp.com/index.html#Одяг2">Футболки</a>
                                    <a class="dropdown-item" href="https://hypeshop.herokuapp.com/index.html#Аксесуари">Рюкзаки</a>
                                    <a class="dropdown-item" href="https://hypeshop.herokuapp.com/index.html#Аксесуари">Кепки</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                    <a class="nav-link" href="https://hypeshop.herokuapp.com/index.html#Про_нас">Зв'язатися з нами</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Корзина</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="arrival-container arrival-col">
                    <div class="all-photo">
                        <div class="bph">
                            <div class="slider-pro" id="my-slider">
                                <div class="sp-slides">
                                    <div class="sp-slide">
                                        <img class="sp-image womens-shoes-img" src="images/womens-shoes/item3/1.jpg" alt="womens-shoes-item3"/>
                                        <img class="sp-thumbnail" src="images/womens-shoes/item3/1.jpg" alt="womens-shoes-item3-thumb"/>
                                    </div>
                                    <div class="sp-slide">
                                        <img class="sp-image womens-shoes-img" src="images/womens-shoes/item3/2.jpg" alt="womens-shoes-item3"/>
                                        <img class="sp-thumbnail" src="images/womens-shoes/item3/2.jpg" alt="womens-shoes-item3-thumb"/>
                                    </div>
                                    <div class="sp-slide">
                                        <img class="sp-image womens-shoes-img" src="images/womens-shoes/item3/3.jpg" alt="womens-shoes-item3"/>
                                        <img class="sp-thumbnail" src="images/womens-shoes/item3/3.jpg" alt="womens-shoes-item3-thumb"/>
                                    </div>
                                    <div class="sp-slide">
                                        <img class="sp-image womens-shoes-img" src="images/womens-shoes/item3/4.jpg" alt="womens-shoes-item3"/>
                                        <img class="sp-thumbnail" src="images/womens-shoes/item3/4.jpg" alt="womens-shoes-item3-thumb"/>
                                    </div>
                                    <div class="sp-slide">
                                        <img class="sp-image womens-shoes-img" src="images/womens-shoes/item3/5.jpg" alt="womens-shoes-item3"/>
                                        <img class="sp-thumbnail" src="images/womens-shoes/item3/5.jpg" alt="womens-shoes-item3-thumb"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col info">
                <div class="arrival-container arrival-col">
                    <p class="green">В наявності</p>
                    <h1 class="model">Dior Homme Sneaker</h1>
                    <p class="amazed">Ви будете вражені їхньою вишуканістю та якістю</p>
                    <h2 id="price">1499грн</h2>
                    <p class="quanity"><strong>Кількість</strong>:</p>
                    <div class="btn">
                        <form class="form-inline">
                            <input type="number" placeholder="1" id="example-number-input" class="form-control" min="1" max="10">
                            <button type="submit" class="submit">Додати в корзину</button>
                        </form>
                    </div>
                    <div class="size">
                        <div class="size-value">36</div>
                        <div class="size-value">37</div>
                        <div class="size-value">38</div>
                        <div class="size-value">39</div>
                        <div class="size-value">40</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col arrival-col">
        <div class="container arrival-container">
            <div class="more-info">
                <h2>Більше інформації</h2>
                <div class="row">
                    <div class="prop"><span>Виробник</span></div>
                    <div class="value">Італія</div>
                </div>
                <div class="row">
                    <div class="prop"><span>Матеріал</span></div>
                    <div class="value">Кожа</div>
                </div>
                <div class="row">
                    <div class="prop"><span>Сезон</span></div>
                    <div class="value">Весна, осінь</div>
                </div>
                <div class="row">
                    <div class="prop"><span>Розміри</span></div>
                    <div class="value">36-40</div>
                </div>
                <div class="row">
                    <div class="prop"><span>Гарантія</span></div>
                    <div class="value">14 днів</div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_form"> 
        <span id="modal_close">&times;</span> 
        <form method="post">
            <label for="name">Введіть своє ім'я та прізвище</label><br>
            <input type="text" class="form-control" id="name" placeholder="Ім'я та прізвище" name="user-name">
            <p class="w-name red"></p>
            <label for="tel">Введіть свій телефон</label>
            <input type="text" class="form-control" id="tel" placeholder="Номер у форматі +380XXXXXXXXX" name="tel">
            <p class="w-tel red"></p>
            <label for="region">Введіть область</label>
            <input type="text"class="form-control" id="region" placeholder="Введіть область" name="region">
            <p class="w-region red"></p>
            <label for="town">Введіть місто доставки</label>
            <input type="text"class="form-control" id="town" placeholder="Введіть своє місто" name="user-town">
            <p class="w-town red"></p>
            <label for="town">Номер відділення</label>
            <input type="text"class="form-control" id="post" placeholder="Введіть номер відділення Нової пошти" name="user-number">
            <p class="w-post red"></p>
            <input type="hidden" name="size">
            <input type="hidden" name="model">
            <label class="switches"><input type="checkbox" name="confirm" class="submit-order" id="confirm">&nbsp;Замовлення підтверджую</label>
            <span class="w-check red"></span>
            <input type="submit" class="pay" value="Підтвердити замовлення">
        </form>
    </div>
    <div id="overlay"></div>
    <footer>
            <div class="container">
                <div class="connect">
                    <h3>Залишайся з нами</h3>
                    <div class="connect-item">
                        <div class="frame">
                            <a href="https://vk.com/demixxxx" target="_blank"><i class="fab fa-vk"></i></a>
                        </div>
                        <div class="frame">
                            <a href="https://www.instagram.com/krosshop_ua/?hl=uk" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="frame">
                                <a href="https://www.facebook.com/MDemixxx" target="_blank"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="gmail">
                        <p><span>Пиши мені:</span> max.demixxx@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="copyright">
                    <p>&copy;2019 HypeShop всі права захищені</p>
                    <!--<div class="counter">
                    <script type="text/javascript">
                    document.write("<a href='//www.liveinternet.ru/click' "+
                    "target=_blank><img src='//counter.yadro.ru/hit?t22.2;r"+
                    escape(document.referrer)+((typeof(screen)=="undefined")?"":
                    ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                    ";h"+escape(document.title.substring(0,150))+";"+Math.random()+
                    "' alt='' title='LiveInternet: показане число переглядів за 24"+
                    " години, відвідувачів за 24 години й за сьогодні' "+
                    "border='0' width='88' height='31'><\/a>")
                    </script>
                </div>-->
                </div>
            </div>
        </footer>
    <!--Slider-scripts-->
    <script src="slider/libs/jquery-1.11.0.min.js"></script>
    <script src="slider/dist/js/jquery.sliderPro.min.js"></script>
    <script src="slider.js"></script>
    <!--/Slider-scripts-->
    <script src="dropdown-bg-onclick.js"></script>
    <script src="size.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>