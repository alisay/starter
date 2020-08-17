<? snippet('header') ?>

    <h1>I am overriding default</h1>

    <? foreach (page('gallery')->children() as $image): ?>
      <li>
        <figure>
          <a href="<?= $image->link()->or($image->url()) ?>">
            <?= $image->crop(800, 1000) ?>
          </a>
        </figure>
      </li>
    <? endforeach ?>
    
    <? foreach(page('contributors')->children() as $contributor): ?>
        <li>
            <a href="<?= $contributor->url() ?>"><?= $contributor->title() ?> </a> 
        </li>
    <? endforeach ?>

<? snippet('footer') ?>
