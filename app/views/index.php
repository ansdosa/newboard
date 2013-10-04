<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
    <?= $_tmp ?>

    <div id="profiler">
        Gen. Time: <?= round(microtime(1) - _START_TIME, 4) ?> sec.<br>
        Memory usage: <?= get_size(memory_get_usage()) ?><br>
        DB queries:<br>
        <? foreach(_PDO::$last_queries as $q): ?>
            <div class="prof-queries">
                <span class="prof-query"><?= $q['query'] ?> </span>
                <span class="prof-query-time"><?= $q['time']?></span>
            </div>
        <? endforeach; ?>
    </div>
</body>
</html>