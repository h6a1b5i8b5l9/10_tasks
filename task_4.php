<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <?php
                    $arr = [
                        'bar1' => [
                    'title' => 'My Tasks',
                    'bar_value' => '325/500',
                    'bar_bg' => 'bg-fusion-400',
                    'bar_width' => '65%',
                    'bar_valuenow' => '65',
                    'bar_valuemin' => '0',
                    'bar_valuemax' => '100'
                    ],
                    'bar2' => [
                    'title' => 'Transfered',
                    'bar_value' => '440 TB',
                    'bar_bg' => 'bg-success-500',
                    'bar_width' => '34%',
                    'bar_valuenow' => '34',
                    'bar_valuemin' => '0',
                    'bar_valuemax' => '100'
                    ],
                    'bar3' => [
                    'title' => 'Bugs Squashed',
                    'bar_value' => '77%',
                    'bar_bg' => 'bg-info-400',
                    'bar_width' => '77%',
                    'bar_valuenow' => '77',
                    'bar_valuemin' => '0',
                    'bar_valuemax' => '100'
                    ],
                    'bar4' => [
                    'title' => 'User Testing',
                    'bar_value' => '7 days',
                    'bar_bg' => 'bg-primary-300',
                    'bar_width' => '84%',
                    'bar_valuenow' => '84',
                    'bar_valuemin' => '0',
                    'bar_valuemax' => '100'
                    ],
                    ];
                    foreach ($arr as $bar) {
                    ?>
                    <div class="d-flex mt-2">
                        <?php echo $bar['title']?>
                        <span class="d-inline-block ml-auto"><?php echo $bar['bar_value'] ?></span>
                    </div>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar <?php echo $bar['bar_bg'] ?>" role="progressbar"  style="width: <?php echo $bar['bar_width'] ?>;" aria-valuenow="<?php echo $bar['bar_valuenow'] ?>" aria-valuemin="<?php echo $bar['bar_valuemin'] ?>" aria-valuemax="<?php echo $bar['bar_valuemax'] ?>"></div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>
