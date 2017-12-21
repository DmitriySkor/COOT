<?php include_once "header.php"; ?>

<div class="controls_heading">
    <div class="container">
        <h1 class="heading_title">Производственный контроль<br> на предприятии</h1>
        <div class="controls_advantage">
            <p> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Без предоплаты</p>
            <p> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Сроки от 2 дней</p>
            <p> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Бесплатный выезд эксперта</p>
        </div>
        <div class="wrap_btn">
        <button class="control_heading_btn" data-toggle="modal" data-target="#control1">Связаться со специалистом</button>
        </div>
    </div>
</div>
<div class="controls_description">
    <div class="container">
        <h2 class="controls_description_title">Производственный контроль</h2>
        <div class="controls_description_text">
            <p> Производственный контроль на предприятии Основная задача производственного контроля
               в организации – это обеспечение полной безопасности работников от негативных факторов
               производственной среды.  Данная процедура является обязательной  для всех юридических лиц и
               предпринимателей, она включает в себя тщательную проверку соблюдения санитарно-эпидемиологических правил и норм
            </p>
                <ul>
                <span>Объектами производственного контроля являются:</span>
                <li>- производственные и общественные помещения, здания, сооружения;</li>
                <li>- санитарно-защитные зоны и зоны санитарной охраны;</li>
                <li>- технологическое оборудование и технологические процессы;</li>
                <li>- рабочие места, используемые для выполнения работ, оказания услуг (в том числе на выделенных
                    участках работ на территории заказчика);</li>
                <li>- транспорт.</li>
                </ul>
            <button class="control_heading_btn" data-toggle="modal" data-target="#control2">Узнать подробнее</button>
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>

<div class="modal fade" id="control1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="modal_form">
                    <div class="form-group">
                        <input type="tel" class="form-control" id="inputAddress" placeholder="Номер телефона:">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" checked > Я согласен с <a href="#" target="_blank">условиями обработки персональных данных</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="contact1_button">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="control2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="modal_form">
                    <div class="form-group">
                        <input type="tel" class="form-control" id="inputAddress" placeholder="Номер телефона:">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" checked > Я согласен с <a href="#" target="_blank">условиями обработки персональных данных</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="contact1_button">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

