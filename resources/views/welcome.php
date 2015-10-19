<?php
use \Illuminate\Support\Facades\Lang;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=<?php echo (App::getLocale()=='ru'?'ru_RU':'en_US');?>"></script>
        <script type="text/javascript" src="https://yandex.st/jquery/1.6.4/jquery.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="/js/maps.js"></script>
        <style>
            #map {
                width: 100%; height: 200px; display: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Laravel 5</h2>

            <div class="row">
                <h3>Task1</h3>
                <table class="table-bordered table table-striped">
                    <tr>
                        <th>Phone</th>
                        <th>E164</th>
                    </tr>
                    <?php foreach ($list1task as $task): ?>
                        <tr>
                            <td><?= $task->Phone ?></td>
                            <td><?= $task->E164 ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div class="row">
                <h3>Task2</h3>
                <table class="table-bordered table table-striped">
                    <tr>
                        <th>id</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Name</th>
                    </tr>
                    <?php foreach ($list2task as $task): ?>
                        <tr>
                            <td><?= $task->id ?></td>
                            <td><?= $task->Phone ?></td>
                            <td><?= $task->Date ?></td>
                            <td><?= $task->Name ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div class="row" style="min-height:300px;">
                <h3>Task3</h3>
                <form class="text-center">
                    <div class="form-control">
                        <span class="hidden">
                            <span id=""></span>
                        </span>
                        <label> <?= Lang::get('messages.от точки'); ?>
                            <input type="text" id="input-address-start" placeholder="<?= Lang::get('messages.input.start'); ?>" />
                        </label>
                        <label> <?= Lang::get('messages.до точки'); ?>
                            <input type="text" id="input-address-finish" placeholder="<?= Lang::get('messages.input.finish'); ?>" />
                        </label>
                        <button class="button" onclick="maps.start(); return false;"><?= Lang::get('messages.input.button'); ?></button>
                        <?php if (App::getLocale() == 'ru'): ?>
                            <a href="/en">eng version</a>
                        <?php endif; ?>
                    </div>
                </form>
                <div id="list"></div>
            </div>
        </div>
    </body>
</html>
