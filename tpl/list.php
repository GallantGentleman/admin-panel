<?php if (count($data) > 0) { ?>
<table class="table table-striped table-bordered" style="width: 85%;margin: 0 auto;">
    <thead>
        <tr>
            <th>№</th>
            <th>Фонд</th>
            <th>Класс</th>
            <th>Сектор</th>
            <th></th>
        </tr>
    </thead>
    <?php for($i = 0; $i < count($data); $i++) { ?>
        <tr>
            <td><?=$data[$i]['id'];?></td>
            <td><a href="?a=account&id=<?=$data[$i]['id'];?>"><?=$data[$i]['name'];?></a></td>
            <td><?=$data[$i]['class'];?></td>
            <td><?=$data[$i]['sector'];?></td>
            <td width="103" class='text-right'><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span></td>
        </tr>
    <?php } ?>
</table>
<?php } else { ?>
    <h1 class="text-center" style="color: #992211;">В списке нет ни одного фонда !</h1>
<?php } ?>
