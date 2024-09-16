<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
    <header class="w-full fixed top-[0px] left-[0px] z-10 border-t-[10px] border-solid" style="border-color: var(--color-<?= get_field('theme_color') ?>)">
        <div class="container">
            <div class="flex justify-between">
                <div class="header-column header-left">

                </div>
                <div class="header-column header-right">
                    <?php wp_nav_menu(['menu' => 'header_menu']) ?>
                </div>
            </div>
        </div>
    </header>