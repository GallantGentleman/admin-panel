<form action="?a=add&form=update" method="POST" style="border: 1px solid #d2d2d2;padding-top: 20px;margin: 0 auto; width: 75%;">
            <dl class="dl-horizontal">
                <div style="margin: 0 auto;">
                <dt>Имя</dt>
                <dd>
                    <input type="text" name="addfund[name]" class="form-control" style="width: 75%;" placeholder="" >
                </dd>
                </div>
            </dl>
                <dl class="dl-horizontal">
                <dt>Класс</dt>
                <dd>
                    <input type="text" name="addfund[class]" class="form-control" style="width: 75%;" placeholder="" >
                </dd>
            </dl>
                <dl class="dl-horizontal">
                <dt>Сектор</dt>
                <dd>
                    <input type="text" name="addfund[sector]" class="form-control" style="width: 75%;" placeholder="" >
                </dd>
            </dl>
                <dl class="dl-horizontal">
                <dt>Bloomberg тикер</dt>
                <dd>
                    <input type="text" name="addfund[ticker]" class="form-control" style="width: 75%;" placeholder="" >
                </dd>
            </dl>
                <dl class="dl-horizontal">
                <dt>ISIN тикер</dt>
                <dd>
                    <input type="text" name="addfund[isin_ticker]" class="form-control" style="width: 75%;" placeholder="" >
                </dd>
            </dl>
                <dl class="dl-horizontal">
                <dt>MS Рейтинг</dt>
                <dd>
                    <input type="text" name="addfund[ms_rating]" class="form-control" style="width: 75%;" placeholder="" >
                </dd>
            </dl>
                <dl class="dl-horizontal">
                <dt>Основан</dt>
                <dd>
                    <input type="text" name="addfund[foundate]" class="form-control" placeholder="ДД/ММ/ГГГГ " style="width: 75%;">
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Зарегестрирован</dt>
                <dd>
                    <input type="text" name="addfund[registered]" class="form-control" placeholder="ДД/ММ/ГГГГ " style="width: 75%;">
                </dd>
                </dl>
            <dl class="dl-horizontal">
                <dt>Страна</dt>
                <dd>
                    <input type="text" name="addfund[country_reg]" class="form-control" style="width: 75%;" placeholder="" >
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Валюта</dt>
                <dd>
                    <input type="text" name="addfund[currency]" class="form-control" style="width: 75%;" placeholder="" >
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt></dt>
                <dd>
                    <input type="text" name="addfund[manage_company]" class="form-control" style="width: 75%;" placeholder="Управляющая компания">
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt></dt>
                <dd>
                    <input type="text" name="addfund[fund_manager]" class="form-control" style="width: 75%;" placeholder="Портфолио менеджер">
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt></dt>
                <dd>
                    <input type="text" name="addfund[structure]" class="form-control" style="width: 75%;" placeholder="Состав и структура фонда">
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt></dt>
                <dd>
                    <textarea type="text" name="addfund[strategy]" class="form-control" style="width: 75%;" rows="6" placeholder="Инвестиционная стратегия"></textarea>
                </dd>
            </dl>
            <br>
            <p class="text-center" style="margin-left: 6%;">
                <input type="submit" class="btn btn-success btn-lg" name="addfund[submit]" value="Добавить" />
            </p>
</form>
