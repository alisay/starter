<? snippet('header') ?>

    <h1><?= $page->title() ?></h1>


    <ul>
        <? foreach(page('contributors')->children() as $contributor): ?>
            <li><a href="<?= $contributor->url() ?>"><?= $contributor->title() ?> </a> </li>
        <? endforeach ?>
    </ul>

    <ul>
        <? foreach(page('works-texts')->children() as $single): ?>
            <li><a href="<?= $single->url() ?>"><?= $single->title() ?> </a> </li>
        <? endforeach ?>
    </ul>

    <? $about= page('about') ?>
    <? $about->title() ?>
    <? $about->text()->kirbytext() ?>

<? snippet('footer') ?>
