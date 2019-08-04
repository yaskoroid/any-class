<?php

use yii\helpers\Url;

?>
<div class="site-index">
    <div class="jumbotron">
        <?php if ($error) { ?>
            <h2><?= $error ?></h2>
        <?php } else { ?>
            <h2><?= $author->name ?> <?= $author->surname ?></h2>
            <p>Date of birth: <?= $author->date_of_birth ?></p>
            <p><a class="btn btn-primary" href="<?= Url::to(['author/all']) ?>">All authors</a></p>
            <?php if (!$authorBooks) { ?>
                <h2>Author has no one book</h2>
            <?php } else { ?>
                <h2>Author has next books</h2>
                <?php foreach ($authorBooks as $key => $authorBook) { ?>
                    <?php if ($key % 3 === 0) echo '<div class="row">' ?>
                        <div class="col-lg-4">
                            <h3><?= $authorBook->title ?></h3>
                            <p><?= substr($authorBook->content, 0, 150) ?>...</p>
                            <span><?= (new DateTime($authorBook->date))->format('Y') ?> y.</span>
                            <p><a class="btn btn-primary" href="<?= Url::to(['book/one', 'id' => $authorBook->id])?>">To book</a></p>
                        </div>
                    <?php if (($key + 1) % 3 === 0) echo '</div>' ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>