<!--Development: Valentin Gorbatenko-->
<!--E-mail: v.gorbatenko@mail.ru-->
<!--Phone: +38 (066) 178-56-44-->
<!--Site: https://vk.com/gorbatenko1984-->
<?php include_once "header.php"; ?>
<style type="text/css">        


        
        .s_map {
            width: 670px;
            height: 550px;
            margin: 0 auto;
            background: url(img/karta2.png);
            background-repeat: round;
            background-position: center;
            position: relative;
            background-size: 670px;

        }
        .s_karta {
            width: 100%;
        }
        
        
        .s_icon {
            width: 30px;
            height: auto;
            display: inline;
            position: absolute;
            z-index: 1;
        }
        

        .s_desc {
            
            width: auto;
            z-index: 1;
            display: none;
            background-color: white;
            position: absolute;
            border: 2px solid gold;
            border-radius: 6px;
            font-size: 10px;
            padding: 3px;
        }

        @media screen and (max-width: 767px) {
            .maps_bg {
                display: none;
            }
        }

       

    </style>
<div class="home__section1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="home__section1__img">
                    <img src="img/home_img_1.png" alt="img">
                </div>
            </div>
            <div class="col-md-6">
                <div class="home__section1__info">
                    <h2 class="home__section_h2">Специальная оценка условий труда (СОУТ) и производственный
                        контроль</h2>
                    <p>Согласно Федеральному закону от 28 декабря 2013 г. № 426-ФЗ «О специальной оценке условий труда»,
                        который вступил в силу с 2014 года, используемая ранее аттестация рабочих мест была заменена
                        такой процедурой, как специальная оценка условий труда. СОУТ имеет целый ряд существенных
                        отличий от аттестации и кроме того, в нее включен целый ряд совершенно новых понятий, подробно
                        описанных в упомянутом выше законе. Именно они должны сегодня использоваться при проведении
                        специальной оценки условий труда, которая дает возможность выявить вредные и опасные факторы
                        для сотрудников промышленных предприятий и иных компаний, а также оценить качество организации
                        надлежащих условий для выполнения тех или иных должностных обязанностей.
                    </p>
                    <a class="button_orange" href="sout.php"><span>Подробнее</span> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home__section2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="home__section1__info">
                    <h2 class="home__section_h2">Аутсорсинг и аудит охраны труда</h2>
                    <p>Аутсорсинг охраны труда - выполнение функций специалиста по охране труда сторонней организацией.
                        Передача функций (полностью или частично) выполняется на основании заключенного договора между
                        Заказчиком и Организацией, специализирующейся на оказании услуг в сфере охраны труда.
                        Аутсорсинг охраны труда позволяет более эффективно выполнять работу в области охраны труда и
                        сократить нагрузку на бюджет Организации.
                    </p>
                    <a class="button_orange" href="safety.php"><span>Подробнее</span> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="home__section1__img">
                    <img src="img/home_img_2.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home__section3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="home__section3_h2">Наши клиенты</h2>
            </div>
            <div class="col-md-12 our_clients_cover">
                <div class="our_clients">
                    <a href="#"><img src="img/ico_sb.png" alt="our_clients"></a>
                    <span>ПАО "Сбербанк"</span>
                </div>
                <div class="our_clients">
                    <a href="#"><img src="img/ico_sl.png" alt="our_clients"></a>
                    <span>АО "Славич"</span>
                </div>
                <div class="our_clients">
                    <a href="#"><img src="img/ico_rgl.png" alt="our_clients"></a>
                    <span>Аптеки "Ригла"</span>
                </div>
                <div class="our_clients">
                    <a href="#"><img src="img/ico_sm.png" alt="our_clients"></a>
                    <span>Спортмастер"</span>
                </div>
                <div class="our_clients">
                    <a href="#"><img src="img/ico_psm.png" alt="our_clients"></a>
                    <span>ООО "Завод ПСМ"</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="maps_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="maps_h2">Мы работаем по всей России</h2>
                <div class="s_map" id="s_main">

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
              integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
              crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    var cities = {
        "Белгород": [260, 23],
        "Курск": [252, 30],
        "Воронеж": [268, 40],
        "Липецк": [259, 48],
        "Москва": [231, 60],

        "Рязань": [250, 60],
        "Тверь": [214, 60],
        "Санкт-Петербург": [176, 62],
        "Владимир": [239, 75],
        "Саратов": [289, 76],

        "Энгельс": [292, 79],
        "Пенза": [276, 77],       
        "Череповец": [203, 80],
        "Саранск": [266, 85],
        "Иваново": [237, 85],

        "Балаково": [292, 86],
        "Кострома": [227, 89],
        "Вологда": [213, 93],
        "Ульяновск": [278, 94],
        "Чебоксары": [264, 98],

        "Тольятти": [287, 98],
        "Йошкар-Ола ": [259, 109],
        "Казань": [271, 110],
        "Нижнекамск": [274, 116],
        "Набережные Челны": [273, 117],

        "Альметьевск": [281, 116],
        "Зеленодольск": [272, 101],
        "Дмитровград": [278, 102],
        "Самара": [292, 104],
        "Оренбург": [318, 116],        

        "Мончегорск": [133, 134],
        "Северодвинск": [175, 135],
        "Архангельск": [183, 142],
        "Сыктывкар": [227, 146],
        "Воркута": [199, 221],  
    };
    var city = [];
    for (i in cities) {
        city.push(i);
    }

     for (var i = 0; i < city.length; i++) {
            var icon = document.createElement("img");
            icon.className = "s_icon";
            icon.id = "icon" + i;
            icon.src = "img/marker2.png";
            icon.style.top = cities[city[i]][0] + "px";
            icon.style.left = cities[city[i]][1] + "px";
            document.getElementById('s_main').insertBefore(icon, document.body.firstchild);            
        }
        
        for (var i = 0; i < city.length; i++) {
            var desc = document.createElement("div");
            desc.className = "s_desc";
            desc.id = "desc" + i;

            desc.style.top = cities[city[i]][0] - 25 + "px";            
            desc.innerHTML = city[i];
            document.getElementById('s_main').insertBefore(desc, document.body.firstchild);
            var width = $('#desc' + i).width()/ 2;
            $('#desc' + i).css("left", cities[city[i]][1] - width + 10 + "px");
        }


    $( ".s_map" ).on('mouseenter', 'img', function() {
    var id = this.id
    var i = id.substr(4);
    $('#desc' + i).show();
  });
$( ".s_map" ).on('mouseleave', 'img', function() {    
    var id = this.id
    var i = id.substr(4);
    $('#desc' + i).hide();
  });
});

  
 

</script>
<?php include_once "footer.php"; ?>


