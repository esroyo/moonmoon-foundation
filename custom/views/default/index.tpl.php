<?php
$limit = $PlanetConfig->getMaxDisplay();
$count = 0;

header('Content-type: text/html; charset=UTF-8');
?><!DOCTYPE html>
<html class="no-js" lang="<?php echo $conf['locale']?>">
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
            <?php if (0 == count($items)) : ?>
                <article class="article">
                    <h2 class="article-title">
                        <?php echo _g('No article', 'note de trad')?>
                    </h2>
                    <section class="article-content"><?php echo _g('No news, good news.')?></section>
                </article>
            <?php else : ?>
                <?php foreach ($items as $item): ?>
                    <?php
                    $arParsedUrl = parse_url($item->get_feed()->getWebsite());
                    $host = 'from-' . preg_replace('/[^a-zA-Z0-9]/i', '-', $arParsedUrl['host']);
                    ?>
                    <article class="article <?php echo $host; ?>">
                        <h2 class="article-title">
                            <a href="<?php echo $item->get_permalink(); ?>" title="Go to original place"><?php echo $item->get_title(); ?></a>
                        </h2>
                        <section class="article-info">

                            <?php echo ($item->get_author() && !empty($item->get_author()->get_name()) ? $item->get_author()->get_name() : 'Anonymous'); ?>,
                            <?php
                            $ago = time() - $item->get_date('U');
                            //echo '<span title="'.Duration::toString($ago).' ago" class="date">'.date('d/m/Y', $item->get_date('U')).'</span>';
                            echo '<time id="post'.$item->get_date('U').'" class="date">'.$item->get_date('d/m/Y').'</time>';
                            ?>

                            |

                            <?php echo _g('Source:')?> <?php
                            $feed = $item->get_feed();
                            echo '<a href="'.$feed->getWebsite().'" class="source">'.$feed->getName().'</a>';
                            ?>
                        </section>
                        <section class="article-content">
                            <?php /* echo $item->get_content(); */ ?>
                            <?php echo preg_replace('/(<[^>]+) (script|style|id|class)=(["\']).*?\3/i', '$1', $item->get_content()); ?>
                        </section>
                    </article>
                    <?php if (++$count == $limit) { break; } ?>
                <?php endforeach; ?>
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
