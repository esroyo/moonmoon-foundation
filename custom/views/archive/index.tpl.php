<?php
$count = 0;
$today = Array();
$week = Array();
$month = Array();
$older = Array();
$now = time();

foreach ($items as $item) {
    $age = ($now - $item->get_date('U')) / (60*60*24);
    if ($age < 1) {
        $today[] = $item;
    } elseif ($age < 7) {
        $week[] = $item;
    } elseif ($age < 30) {
        $month[] = $item;
    } else {
        $older[] = $item;
    }
}

header('Content-type: text/html; charset=UTF-8');
?><!DOCTYPE html>
<html lang="<?php echo $conf['locale']?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $PlanetConfig->getName(); ?></title>
    <?php include(dirname(__FILE__).'/head.tpl.php'); ?>
</head>

<body>

    <div class="row"><!-- .row start -->
        <div class="columns" id="header"><!-- #header start -->
            <?php include(dirname(__FILE__).'/top.tpl.php'); ?>
        </div><!-- #header end -->
    </div><!-- .row end -->

    <div class="row"><!-- .row start -->

        <div class="medium-8 columns" id="content"><!-- #content start -->
            <?php if (0 == count($items)) :?>
            <article class="article">
                <h2 class="article-title">
                    <?php echo _g('No article')?>
                </h2>
                <section class="article-content"><?php echo _g('No news, good news.')?></section>
            </article>
            <?php endif; ?>
            <?php if (count($today)): ?>
            <article class="article">
                <h2><?php echo _g('Today')?></h2>
                <ul>
                <?php foreach ($today as $item): ?>
                    <?php $feed = $item->get_feed(); ?>
                    <li>
                    <a href="<?php echo $feed->getWebsite() ?>" class="source"><?php echo $feed->getName() ?></a> :
                    <a href="<?php echo $item->get_permalink(); ?>" title="<?php echo _g('Go to original place')?>"><?php echo $item->get_title(); ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </article>
            <?php endif; ?>

            <?php if (count($week)): ?>
            <article class="article">
                <h2><?php echo _g('This week')?></h2>
                <ul>
                <?php foreach ($week as $item): ?>
                    <?php $feed = $item->get_feed(); ?>
                    <li>
                    <a href="<?php echo $feed->getWebsite() ?>" class="source"><?php echo $feed->getName() ?></a> :
                    <a href="<?php echo $item->get_permalink(); ?>" title="<?php echo _g('Go to original place')?>"><?php echo $item->get_title(); ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </article>
            <?php endif; ?>

            <?php if (count($month)): ?>
            <article class="article">
                <h2><?php echo _g('This month')?></h2>
                <ul>
                <?php foreach ($month as $item): ?>
                    <?php $feed = $item->get_feed(); ?>
                    <li>
                    <a href="<?php echo $feed->getWebsite() ?>" class="source"><?php echo $feed->getName() ?></a> :
                    <a href="<?php echo $item->get_permalink(); ?>" title="<?php echo _g('Go to original place')?>"><?php echo $item->get_title(); ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </article>
            <?php endif; ?>

            <?php if (count($older)): ?>
            <article class="article">
                <h2><?php echo _g('Older items')?></h2>
                <ul>
                <?php foreach ($older as $item): ?>
                    <?php $feed = $item->get_feed(); ?>
                    <li>
                    <a href="<?php echo $feed->getWebsite() ?>" class="source"><?php echo $feed->getName() ?></a> :
                    <a href="<?php echo $item->get_permalink(); ?>" title="<?php echo _g('Go to original place')?>"><?php echo $item->get_title(); ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </article>
            <?php endif; ?>
        </div><!-- #content end -->

        <div class="medium-4 columns" id="sidebar"><!-- #sidebar start --> 
            <?php include_once(dirname(__FILE__).'/sidebar.tpl.php'); ?>
        </div><!-- #sidebar end -->

    </div><!-- .row end -->

    <div class="row"><!-- .row start -->
        <div class="columns" id="footer"><!-- #footer start -->
            <?php include(dirname(__FILE__).'/footer.tpl.php'); ?>
        </div><!-- #footer end -->
    </div><!-- .row end -->

    <script src="custom/components/foundation/js/vendor/jquery.js"></script>
    <script src="custom/components/foundation/js/foundation.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(document).foundation();
        });
    </script>

</body>
</html>
