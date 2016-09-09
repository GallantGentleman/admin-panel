<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link href="<?=$site_name;?>css/bootstrap.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h1 class="text-center">FUNDEXPERT<span style="background: blue;color: white;"><span style="background: #339966;">.</span>NET</span></h1>
                <hr />
                <form class="form-inline" action="?a=search" method="post" style="margin-left: 40%;">
                    <div class="form-group">
                        <input type="text" name="search[text]" class="form-control" id="inputPassword2" placeholder="Поиск">
                    </div>
                    <button type="submit" class="btn btn-default" style="padding: 8px;" name="search[go]">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </form>
                <p class="text-center">
                    <span class="glyphicon glyphicon-plus"></span>
                    <a href="<?=$site_name;?>?a=add">Добавить фонд</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-list"></span>
                    <a href="<?=$site_name;?>?a=list">Список фондов</a>
                </p>
                <br>
                <div style="">
                    <?php include $page.".php"; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=$site_name;?>js/bootstrap.min.js"></script>
  </body>
</html>
