<div style="border: 1px solid #d2d2d2; padding: 10px; margin: 0 auto; width: 75%;">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Основное</a></li>
        <li><a data-toggle="tab" href="#control">Управление</a></li>
    </ul>

    <form action="?a=edit&id=<?=@$id;?>" method="POST">
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <br>
            <br>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <div style="margin: 0 auto;">
                    <dt>Имя</dt>
                    <dd>
                        <input type="text" name="edit[name]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                    </dd>
                </div>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Класс</dt>
                <dd>
                    <input type="text" name="edit[class]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Сектор</dt>
                <dd>
                    <input type="text" name="edit[sector]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Bloomberg тикер</dt>
                <dd>
                    <input type="text" name="edit[ticker]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>ISIN тикер</dt>
                <dd>
                    <input type="text" name="edit[isin_ticker]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>MS Рейтинг</dt>
                <dd>
                    <input type="text" name="edit[ms_rating]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Основан</dt>
                <dd>
                    <input type="text" name="edit[foundate]" class="form-control" placeholder="<?=@$foundate;?> " style="width: 75%;">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Страна</dt>
                <dd>
                    <input type="text" name="edit[country_reg]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Регистрация</dt>
                <dd>
                    <input type="text" name="edit[registered]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Валюта</dt>
                <dd>
                    <input type="text" name="edit[currency]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
        </div>
        <div id="control" class="tab-pane fade">
            <br>
            <br>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Управляющая компания</dt>
                <dd>
                    <input type="text" name="edit[manage_company]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Портфолио Менеджер</dt>
                <dd>
                    <input type="text" name="edit[fund_manager]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Структура</dt>
                <dd>
                    <input type="text" name="edit[structure]" class="form-control" style="width: 75%;" value="<?=@$name;?>">
                </dd>
            </dl>
            <dl class="dl-horizontal" style="margin-left: 50px;">
                <dt>Стратегия</dt>
                <dd>
                    <textarea type="text" name="edit[strategy]" class="form-control" style="width: 75%;" rows="6" value="<?=@$name;?>"></textarea>
                </dd>
            </dl>
        </div>
        <p class="text-center" style="margin-left: 6%;">
            <input type="submit" class="btn btn-success btn-lg" name="edit[submit]" value="Добавить" />
        </p>
    </form>
</div>
