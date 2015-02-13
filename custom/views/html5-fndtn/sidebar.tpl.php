<?php
$all_people = &$Planet->getPeople();
usort($all_people, array('PlanetFeed', 'compare'));
?>
<aside id="sidebar">
    <section id="sidebar-people">
        <h2><?php echo _g('People') . ' (' . count($all_people) . ')'?></h2>
        <ul>
            <?php foreach ($all_people as $person) : ?>
            <li>
                <a href="<?php echo htmlspecialchars($person->getFeed(), ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo _g('Feed')?>"><img src="postload.php?url=<?php echo urlencode(htmlspecialchars($person->getFeed(), ENT_QUOTES, 'UTF-8')); ?>" alt="" height="12" width="12" /></a>
                <a href="<?php echo $person->getWebsite(); ?>" title="<?php echo _g('Website')?>"><?php echo htmlspecialchars($person->getName(), ENT_QUOTES, 'UTF-8'); ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <p>
        <img src="custom/img/opml.png" alt="<?php echo _g('Feed')?>" height="12" width="12" /> <a href="custom/people.opml"><?php echo _g('All feeds in OPML format')?></a>
        </p>
    </section>

    <section>
        <h2><?php echo _g('Syndicate')?></h2>
        <ul>
            <li><img src="custom/img/feed.png" alt="<?php echo _g('Feed')?>" height="12" width="12" />&nbsp;<a href="atom.php"><?php echo _g('Feed (ATOM)')?></a></li>
        </ul>
    </section>

    <section>
        <h2><?php echo _g('Archives')?></h2>
        <ul>
            <li><a href="?type=html5-fndtn-archive"><?php echo _g('See all headlines')?></a></li>
        </ul>
    </section>
</aside>
