﻿<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        
    
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script defer src="jquery.flexslider.js"></script>
       
  
  <script type="text/javascript">
    $(function(){
     // SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

           <script src="js/jquery.js"></script>
           <?php 
    mysql_connect('localhost','root');
    mysql_select_db('bordo');
            
          $query_block =  mysql_query('SELECT * from `block`');
            $query_block1 =  mysql_query('SELECT * from `block`');
 
            ?>
        
    </head> 
    <body class="body">
       <header class="header">
            <div id="logotip"><img src="logo2.png" style="width: 100%"/></div>
            <div id="devis">Live with the comfort!</div>
            <div id="menu">
                <a href="galery.html" style="margin-left:0">Галерея</a>
                <a href="about.html">О нас</a>
                <a href="kontact.html">Контакты</a>
           </div> 
        </header>
        <div class="clear"></div>
        
        
        
        
        
        
        <div class="div">
       <div id="header"  class="div" >

 <img src="3.jpg" id="img_1"  style="position:absolute;  width: 100%; height: 700px"  />
 <img src="4.jpg" id="img_2"  style="position:absolute;opacity: 0; filter: alpha(opacity=0);  width: 100%; height: 700px"  />
 <img src="5.jpg" id="img_3"  style="position:absolute;opacity: 0; filter: alpha(opacity=0);  width: 100%; height: 700px"  />
 <img src="6.jpg" id="img_4"  style="position:absolute;opacity: 0; filter: alpha(opacity=0);  width: 100%; height: 700px" />
 <img src="7.jpg" id="img_5"  style="position:absolute;opacity: 0; filter: alpha(opacity=0);  width: 100%; height: 700px"  />
</div>

<script type="text/javascript">
 var image_count = 5;
 var interval = 5000; //пауза
 var time_out = 15; //скорость смены картинки
 var i = 5;
 var timeout;
 var opacity = 100;
 function change_image() {
 opacity--;
 var j = i + 1;
 var current_image = 'img_' + i;
 if (i == image_count) j = 1;
 var next_image = 'img_' + j;
 document.getElementById(current_image).style.opacity=opacity/100;
 document.getElementById(current_image).style.filter='alpha(opacity='+opacity+')';
 document.getElementById(next_image).style.opacity= (100-opacity)/100;
 document.getElementById(next_image).style.filter=' alpha(opacity='+(100-opacity)+')';
 timeout = setTimeout("change_image()", time_out);
if (opacity==1) {
 opacity = 100;
 clearTimeout(timeout);
i++;
if (i>image_count) i=1;
timeout = setTimeout("change_image()", interval);
  }
 }
change_image()
</script>
        </div >
        
        <div class="div1" style="text-align:center;">
            <h1 class="ops" style="margin-top: 0px; padding-top: 10px; margin-bottom: 0px">ЧЕМ ЗАНИМАЕТСЯ НАША СТУДИЯ</h1>
            <div class="text1" style="margin-left:45px; margin-right:45px; "> Наша компания занимаемся разработкой проектов частных домов, создание дизайна интерьера, а так же организацией благоустройства участка вокруг вашего дома. Мы  отличаемся комплексным подходом. Мы создаем дом вашей мечты начиная с разработки концепции до реализации. Осуществляем сопровождение и авторский надзор, подбор материалов и мебели, с учетом новейших технологий, модных тенденций и конечно, ваших пожеланий и предпочтений.</div>
         <ul class="ul">
           
            <li class="li"  ><img src="kar.svg" width="80px";  style="float:left; margin-right:10px"/>
                <p class="ops1" style="margin-bottom:40px; margin-top: 10px;">Огромный<br> опыт</p>
                <div class="text1">Многолетний опыт специализации в индустрии архитектурного проектирования и дизайна, и как результат - сотни успешных бизнес и частных проектов реализованных как с украинскими, так и с зарубежными заказчиками.</div></li>
             
             <li class="li"  ><img src="kar.svg" width="80px";  style="float:left; margin-right:10px"/>
                <p class="ops1" style="margin-bottom:40px; margin-top: 10px;">Внимание к клиенту</p>
                <div class="text1">Наша команда четко следует требованиям заказчика и выполняет работы точно в срок. Мы всегда подчеркиваем индивидуальность при проектировании и дизайне.Ваш случай не будет исключением.<br><br>Мы вас ждем.</div></li>
             
             <li class="li"  ><img src="kar.svg" width="80px";  style="float:left; margin-right:10px"/>
                <p class="ops1" style="margin-bottom:40px; margin-top: 10px;">Внимание к деталям</p>
                <div class="text1">Мы выбираем только высококачественные планировочные решения и контролируем качество их выполнения на каждой стадии проектирования и дизайна, именно поэтому Bordo создает только высококачественные проекты.</div></li>
             
            
            
                 </div></li>
            </ul>   
        </div>
            <div class="bg-akc">
                <div class="akc">
                
                <p id=t1>АКЦИИ</p>
                <p id=t2>Только до 28.05.2018<br>Дизайн проэкт кваритры всего за 99$</p>
        </div>
        </div>
        
        <div class="div1">
        <h1 align="center" class="ops" style="margin-top: 0px">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h1>
        <div id="container" class="cf">

	<div id="main" role="main">
      <section class="slider">
        <div class="flexslider" style="border: 0">
          <ul class="slides">
              
                <li>
  	    	    <p class="text1">Дизайн-студия "Bordo" с самого начала привлекла нас своими интересными проектами и дизайнерскими решениями. Наш дизайнер Татьяна приложила все усилия, чтобы наша квартира стала красивой, уютной и функциональной. Мы очень благодарим ее за профессионализм, интересные идеи и красочные решения, за огромнейшее терпение, умение слушать наши пожелания, а потом воплощать их в жизнь наилучшим образом.Отдельно ей спасибо за отзывчивость и доброжелательность, а также за искренное желание , чтоб нам было уютно и комфортно в нашем новом доме.
                    <p align="center" ><b>Семья Панфиловых </b></p></p>
  	    		</li>
  	    		<li>
  	    	    <p class="text1">Выражаем огромную благодарность нашему дизайнеру Лесе! Отдельное спасибо за её терпение! Заказывали дизайн-проект впервые и очень переживали. Результат превзошел все наши ожидания. Особенно поразили белоснежная прихожая с круговой зоной возле зеркала, кухня с жизнеутверждающими цитатами, многофункциональные спальня и загадочная гостевая. Постараемся воплотить все идеи в реальность.Нам очень понравилось работать с дизайнером Лесей! Она терпеливый, внимательный, добрый и отзывчивый человек. Одним словом профессионал!!!<p align="center" ><b>Семья Евдокиенко </b></p></p>
  	    		</li>
  	    		<li>
  	    	   <p class="text1">"Перед тим як розпочати будівництво будинку, замовив проект у однієї відомої компанії, але з часом зрозумів, що хочу оновити зовнішній вигляд будинку (фасад). Хотілося щось сучасне. Нажаль, звертався до двох компаній і жодна не змогла задовільнити мої побажання, надсилаючи примітивні варіанти. Лише після того як я звернувся до студії "Bordo", залишився повністю задоволеним, так як отримав бажаний результат. Найважче завдання, яке стояло перед дизайнерами даної компанії полягало в тому, що "коробка" будинку вже була збудована, і треба було задовільнити мої побажання, виходячи з того, що вже було. Приємно був вражений результатами відразу ж після першого надісланого мені варіанту. Попередня зустріч біля будинку не пройшла марно: зробивши усі необхідні заміри, та врахувавши усі побажання - я отримав від дизайнерів саме те, що і очікував. Під час опрацювання мого замовлення дизайнери компанії дійсно намагалися підібрати найкраще рішення, а не вислати чим по-швидше будь-який варіант. Окрему подяку хочу висловити дизайнеру Юлі, за професійний підхід до клієнта і за те що Ви чуєте і саме головне розімієте клієнта. Бажаю процвітання та росту Вашій компанії та колективу!!! Юля, МоЛоДеЦь! "<p align="center" ><b>Григорiй Iванович </b></p></p>
  	    		</li>
  	    		<li>
  	    	   <p class="text1">Соотрудничество с компанией "Bordo" оставило только положительные эмоции. Учитывались все пожелания, проект выполнен в срок. Соответствие цена-качество. Отдельное спасибо нашему дизайнеру Юле за терпение! Приятная, вежливая, профессионал своего дела. Всем спасибо за проделанную работу. Процветания, долгих лет существования!<p align="center" ><b>Евгений </b></p></p>
  	    		</li>
              <li>
                <p class="text1">В работе мне понравилось внимание к пожеланиям заказчика; учитывались все нюансы - что-то принималось, а от чего-то аргументированно отказывались. В результате проект получился визуально легкий и приятный - как я себе и представляла.<p align="center" ><b>Вика</b></p></p>
              </li>
          </ul>
        </div>
      </section>
    </div> 
  </div>
</div>
  

<div class="div3" >
                <h1 class="ops" style="text-align:center; margin-top:0px">Наши работы</h1>
                <ul class="ul1" style="margin-bottom: 0;">
                    <a href="1kv/1kv.html"><li class="li1" style="background-image: url(1kv/1kv.jpg);background-repeat: no-repeat; background-size: cover;"></li></a>
                    
                    <a href="2kv/2kv.html"><li class="li1"  style="background-image: url(2kv/1kv.jpg);background-repeat: no-repeat; background-size: cover;"></li></a>
                    
                    <a href="3kv/3kv.html"><li class="li1"  style="background-image: url(3kv/4kv.jpg);background-repeat: no-repeat; background-size: cover;"></li></a>
                    
                    <a href="4kv/4kv.html"><li class="li1"  style="background-image: url(4kv/1kv.jpg);background-repeat: no-repeat; background-size: cover;"></li></a>
                    
                    <a href="5kv/5kv.html"><li class="li1"  style="background-image: url(5kv/1kv.jpg);background-repeat: no-repeat; background-size: cover;"></li></a>
                    
                    <a href="6kv/6kv.html"><li class="li1"  style="background-image: url(6kv/2kv.jpg);background-repeat: no-repeat; background-size: cover;"></li></a>
             
                    <?php   for($i=0;$i<$number_block = mysql_num_rows($query_block);$i++){
        $result = mysql_fetch_assoc($query_block); ?>
                    <?php if($result['display']) { ?>
                        <a href="<?php echo $result['href']; ?>"><li class="li1"  style="background-image: url(<?php echo $result['img']; ?>);background-repeat: no-repeat; background-size: cover;"></li></a>
                        <?php } } ?>
                </ul>
              </div>
        
        

<div class="div1">
     <form   id="send">
            <h1 class="t3">Оставить заявку</h1>
            <input type="text" id="firstname" name="firstname"   placeholder="ФИО" style="border-right-width: 1px;margin-right: 40px;width: 220px; height: 45px; border-radius: 15px; font-size: 15px; margin-left: 35%">
            <input type="tel" id="phone" name="phone"   placeholder="Телефон" style="border-right-width: 1px;margin-right: 40px;width: 220px; height: 45px; border-radius: 15px; font-size: 15px" required><br>
            <input type="text" id="description" name="description" placeholder="Коментарии"  style="border-right-width: 1px;margin-right: 40px;width: 490px; height: 100px; border-radius: 15px; font-size: 15px; margin-top: 2%; margin-left: 35%"><br>
            <button type="button" value="Отправить" id="send_form" class="button" style="border-right-width: 1px;margin-right: 40px;width: 220px; height: 50px; border-radius: 20px; font-size: 15px;margin-left: 44%; margin-top:2%; margin-bottom: 2%">Отправить</button>
            </form>
        
         <p class="result_send" ></p>
    <script>
        $('document').ready(function(){
            
            $('#send_form').on('click',function(){
                
                if($("#firstname").val() == '' || $("#description").val() == '' || $("#phone").val() == ''){
                $('.result_send').html("Пожалуйста заполните все поля."); 
                } else{
                $.ajax({
                    url: 'send.php',
                    method: "POST",
                    data: $('#send').serialize(),
                    
                    success: function(){

                        $('.result_send').html("Ваша заяка принята.");
                    },
                    error: function(err){
                       $('.result_send').html("Пожалуйста заполните все поля.");
                        console.log(err);
                    }
                });
                }
            })
            
        });
    </script>
</div>
            <div class="div_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2679.1332481620566!2d35.181831715408485!3d47.81763527919921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc5e0aec507263%3A0x474577ed3e28ae81!2z0JfQsNC_0L7RgNC-0LbRgdC60LjQuSDQvdCw0YbQuNC-0L3QsNC70YzQvdGL0Lkg0YLQtdGF0L3QuNGH0LXRgdC60LjQuSDRg9C90LjQstC10YDRgdC40YLQtdGC!5e0!3m2!1sru!2sua!4v1521038154577" width="100%" height="354" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
    
            <footer class="footer">
                <div id="prava"> ©Санёчки.рф </div>
             <div id="menu">
                 <a href="main.html"><p >Главная</p></a>
                 <a href="galery.html"><p >Галерея</p></a>
                 <a href="about.html"><p>О нас</p></a>
                 <a href="kontact.html"> <p>Контакты</p></a>
                </div>
                </div>
                <div id="nomer">0580658303<br>066055454<br>г. Запорожье<br>ул. Онтогонистов 20-В<br> superDesign@gmail.com </div>

</footer>
        
            

    
</body> 
    </html>
   