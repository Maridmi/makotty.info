<!DOCTYPE html>
<html lang="ru">
<head>
  <title>makotty</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a id="logo" class="navbar-brand" href="#myPage"><img src="img/font.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">Обо мне</a></li>
        <li><a href="#services">Услуги</a></li>
        <li><a href="#portfolio">Портфолио</a></li>
        <li><a href="#pricing">Цены</a></li>
        <li><a href="#contact">Контакты</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-right">
  <div class="col-sm-5"></div>
  <div class="col-sm-7 text-center">
    <img id="icon" src="img/logo.png">
    <h3 class="descr"> Graphic Design</h3>
  </div>
</div>

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Обо Мне</h2><br>
      <h4>Я дизайнер из Санкт-Петербурга. Я работала в маркетинговом агенстве, но с недавнего времени занимаюсь фрилансом в сфере графического дизайна.</h4><br>
      <p>Занимаюсь разработкой сайтов, логотипов, визиток.</p>
      <br><a href="#contact"><button class="btn btn-lg">Связаться</button></a>
    </div>
  </div>
</div>

<div id="services" class="container-fluid text-center bg-grey">
  <h2 style="padding-bottom: 40px">Услуги</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4>Разработка сайтов</h4>
      <p>Лендинги<br/> Многостраничные сайты</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-picture logo-small"></span>
      <h4>Разработка логотипов</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tasks logo-small"></span>
      <h4>Дизайн визиток</h4>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-equalizer logo-small"></span>
      <h4>Дизайн упаковок</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-blackboard logo-small"></span>
      <h4>Дизайн обложек</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-text-background logo-small"></span>
      <h4 style="color:#303030;">Леттеринг</h4>
    </div>
  </div>
</div>

<div id="portfolio" class="container-fluid text-center">
  <h2 class="white-text" style="padding-bottom: 30px">Портфолио</h2><br>
  <div class="row text-center slideanim">
    <div class="thumb col-sm-6">
        <a href="/altpravo"><img src="img/done/alt0.jpg" alt="Alt">
        <div class="txt">Сайт юридической<br/>компании "ALT-PRAVO"</div></a>
    </div>
    <div class="thumb col-sm-6">
        <a href="/altpravo"><img src="img/done/alt0.jpg" alt="Alt">
        <div class="txt">Сайт юридической<br/>компании "ALT-PRAVO"</div></a>
    </div>
    <div class="thumb col-sm-6">
        <a href="/altpravo"><img src="img/done/alt0.jpg" alt="Alt">
        <div class="txt">Сайт юридической<br/>компании "ALT-PRAVO"</div></a>
    </div>
    <div class="thumb col-sm-6">
        <a href="/altpravo"><img src="img/done/alt0.jpg" alt="Alt">
        <div class="txt">Сайт юридической<br/>компании "ALT-PRAVO"</div></a>
    </div>
  </div><br>
  <a href="/portfolio"><button class="btn btn-lg">Больше Работ</button></a>
</div>

<div id="reviews" class="container-fluid text-center">  
  <h2 class="white-text">Отзывы Клиентов</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="col-sm-2"></div>
        <h4 class="white-text col-sm-8">Благодарим за дизайн логотипа для розничного магазина цветов и подарков. Работа выполнена оперативно и с учетом всех наших пожеланий. Выражаю благодарность от всей команды "SunFlowers"!<br/><br/><span>ИП Жанько О.Б.,<br/>"SunFlowers"</span></h4>
      </div>
      <div class="item">
        <h4 class="white-text">"збс!!"<br><span>Кто-то</span></h4>
      </div>
      <div class="item">
        <h4 class="white-text">"збс?"<br><span>Кто-то</span></h4>
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon- logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2></h2><br>
      <h4><strong></strong></h4><br>
      <p><strong></strong></p>
    </div>
  </div>
</div>

<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Цены</h2>
    <h4>Стоимость каждого проекта рассчитывается индивидуально.</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="padding: 30px">
          <h1>Лендинг</h1>
        </div>
        <div class="panel-body">
          <p>От <strong>7</strong> тыс. р</p>
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">уточнить стоимость</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="padding: 15px">
          <h1>Многостраничный вебсайт</h1>
        </div>
        <div class="panel-body">
          <p>От <strong>10</strong> тыс. р</p>
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">уточнить стоимость</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="padding: 30px">
          <h1>Другие услуги</h1>
        </div>
        <div class="panel-body">
          <p>Стоимость рассчитывается индивидуально</p>
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">уточнить стоимость</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">Контакты</h2>
  <h4 class="text-center" style="padding: 20px 0 40px 0">Оставьте контактные данные и я свяжусь с Вами в течение 24 часов.</h4>
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="contact col-sm-4">
      <p><span class="glyphicon glyphicon-map-marker"></span> Санкт-Петербург, Россия</p>
      <p><span class="glyphicon glyphicon-phone"></span><a href="tel:+79080934835">  +7(908)093-48-35</a></p>
      <p><span class="glyphicon glyphicon-envelope"></span><a href="mail:yarova0marina@gmail.com">  yarova0marina@gmail.com</a></p>
    </div>
    <div class="col-sm-6 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Имя" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="phone" name="phone" placeholder="Телефон" type="phone" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email">
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Комментарий" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Отправить</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="foo container-fluid text-center">
  <div class="col-sm-12">
    <div class="left-foo col-sm-6 text-left">
      <a id="logo" href="#myPage"><img src="img/font.png"></a>
      <p style="padding: 30px 0 0 15px">© 2019 Makotty</p>

        <div class="container">
          <div data-toggle="modal" data-target="#myModal">
            <a class="hov" href="#privacypolicy" style="padding-top: 15px">Политика конфиденциальности</a>
          </div>

          <div class="modal fade col-sm-10" id="myModal">
            <div class="modal-content modal-dialog modal-dialog-centered modal-lg" style="margin: 100px; background-color: rgba(0,0,0, .8); ">
            
              <div class="modal-header">
                <button type="button" class="close" style="color: white" data-dismiss="modal">&times;</button>
                 <p class="modal-title" style="color: white"><strong>Политика в отношении обработки персональных данных</strong></p>
              </div>
              
              <div class="modal-body">
                <p style="color: white">1. Общие положения<br/>
Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных Makotty (далее – Оператор).<br/>
Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.
Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта http://makotty.info.<br/>
 <br/>
2. Основные понятия, используемые в Политике<br/>
Автоматизированная обработка персональных данных – обработка персональных данных с помощью средств вычислительной техники;
Блокирование персональных данных – временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных);<br/>
Веб-сайт – совокупность графических и информационных материалов, а также программ для ЭВМ и баз данных, обеспечивающих их доступность в сети интернет по сетевому адресу http://makotty.info;<br/>
Информационная система персональных данных — совокупность содержащихся в базах данных персональных данных, и обеспечивающих их обработку информационных технологий и технических средств;<br/>
Обезличивание персональных данных — действия, в результате которых невозможно определить без использования дополнительной информации принадлежность персональных данных конкретному Пользователю или иному субъекту персональных данных;<br/>
Обработка персональных данных – любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных;<br/>
Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными;<br/>
Персональные данные – любая информация, относящаяся прямо или косвенно к определенному или определяемому Пользователю веб-сайта http://makotty.info;<br/>
Пользователь – любой посетитель веб-сайта http://makotty.info;<br/>
Предоставление персональных данных – действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц;<br/>
Распространение персональных данных – любые действия, направленные на раскрытие персональных данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с персональными данными неограниченного круга лиц, в том числе обнародование персональных данных в средствах массовой информации, размещение в информационно-телекоммуникационных сетях или предоставление доступа к персональным данным каким-либо иным способом;<br/>
Трансграничная передача персональных данных – передача персональных данных на территорию иностранного государства органу власти иностранного государства, иностранному физическому или иностранному юридическому лицу;<br/>
Уничтожение персональных данных – любые действия, в результате которых персональные данные уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания персональных данных в информационной системе персональных данных и (или) результате которых уничтожаются материальные носители персональных данных.<br/>
 <br/>
3. Оператор может обрабатывать следующие персональные данные Пользователя<br/>
Фамилия, имя, отчество;<br/>
Электронный адрес;<br/>
Номера телефонов;<br/>
Также на сайте происходит сбор и обработка обезличенных данных о посетителях (в т.ч. файлов «cookie») с помощью сервисов интернет-статистики (Яндекс Метрика и Гугл Аналитика и других).<br/>
Вышеперечисленные данные далее по тексту Политики объединены общим понятием Персональные данные.<br/>
 <br/>
4. Цели обработки персональных данных<br/>
Цель обработки персональных данных Пользователя — информирование Пользователя посредством отправки электронных писем.
Также Оператор имеет право направлять Пользователю уведомления о новых продуктах и услугах, специальных предложениях и различных событиях. Пользователь всегда может отказаться от получения информационных сообщений, направив Оператору письмо на адрес электронной почты yarova0marina@gmail.com с пометкой «Отказ от уведомлениях о новых продуктах и услугах и специальных предложениях».
Обезличенные данные Пользователей, собираемые с помощью сервисов интернет-статистики, служат для сбора информации о действиях Пользователей на сайте, улучшения качества сайта и его содержания.<br/>
 <br/>
5. Правовые основания обработки персональных данных<br/>
Оператор обрабатывает персональные данные Пользователя только в случае их заполнения и/или отправки Пользователем самостоятельно через специальные формы, расположенные на сайте http://makotty.info. Заполняя соответствующие формы и/или отправляя свои персональные данные Оператору, Пользователь выражает свое согласие с данной Политикой.
Оператор обрабатывает обезличенные данные о Пользователе в случае, если это разрешено в настройках браузера Пользователя (включено сохранение файлов «cookie» и использование технологии JavaScript).<br/>
 <br/>
6. Порядок сбора, хранения, передачи и других видов обработки персональных данных<br/>
Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем реализации правовых, организационных и технических мер, необходимых для выполнения в полном объеме требований действующего законодательства в области защиты персональных данных.
Оператор обеспечивает сохранность персональных данных и принимает все возможные меры, исключающие доступ к персональным данным неуполномоченных лиц.<br/>
Персональные данные Пользователя никогда, ни при каких условиях не будут переданы третьим лицам, за исключением случаев, связанных с исполнением действующего законодательства.<br/>
В случае выявления неточностей в персональных данных, Пользователь может актуализировать их самостоятельно, путем направления Оператору уведомление на адрес электронной почты Оператора yarova0marina@gmail.com с пометкой «Актуализация персональных данных».
Срок обработки персональных данных является неограниченным. Пользователь может в любой момент отозвать свое согласие на обработку персональных данных, направив Оператору уведомление посредством электронной почты на электронный адрес Оператора yarova0marina@gmail.com с пометкой «Отзыв согласия на обработку персональных данных».<br/>
 <br/>
7. Трансграничная передача персональных данных<br/>
Оператор до начала осуществления трансграничной передачи персональных данных обязан убедиться в том, что иностранным государством, на территорию которого предполагается осуществлять передачу персональных данных, обеспечивается надежная защита прав субъектов персональных данных.<br/>
Трансграничная передача персональных данных на территории иностранных государств, не отвечающих вышеуказанным требованиям, может осуществляться только в случае наличия согласия в письменной форме субъекта персональных данных на трансграничную передачу его персональных данных и/или исполнения договора, стороной которого является субъект персональных данных.<br/>
 <br/>
8. Заключительные положения<br/>
Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки его персональных данных, обратившись к Оператору с помощью электронной почты yarova0marina@gmail.com.<br/>
В данном документе будут отражены любые изменения политики обработки персональных данных Оператором. Политика действует бессрочно до замены ее новой версией.<br/>
Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу http://makotty.info.</p>
              </div>
                
            </div>
          </div>
        </div>

    </div>
    <div class="col-sm-3">
      <ul class="col-foo text-left">
        <li style="padding-bottom: 15px;">Меню</li>
        <li><a class="hov" href="#about">Обо мне</a></li>
        <li><a class="hov" href="#services">Услуги</a></li>
        <li><a class="hov" href="#portfolio">Портфолио</a></li>
        <li><a class="hov" href="#pricing">Цены</a></li>
        <li><a class="hov" href="#contact">Контакты</a></li>
      </ul>
    </div>
    <div class="col-foo col-sm-3">
      <ul class="text-left">
        <li style="padding-bottom: 15px;">Подписаться</li>
        <li><a class="hov" href="https://vk.com/mari__rina">VK</a></li>
        <li><a class="hov" href="https://instagram.com/_mari_rina_/">Instagram</a></li>
      </ul>
    </div>
  </div>
  <div class="totop col-sm-12 text-center">
    <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
    <p class="totoptext">наверх</p></a>
  </div>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
