<?php

use yii\helpers\Url;

?>
<div class="site-index">
    <div class="jumbotron">
        <h1>All authors</h1>
        <p><a class="btn btn-primary" href="<?= Url::to(['author/']) ?>">Author CRUD</a></p>
        <?php if ($error) { ?>
            <h2><?= $error ?></h2>
        <?php } else { ?>
            <?php foreach ($model as $author) { ?>
                <div class="col-lg-4">
                    <h2><?= $author['name'] ?> <?= $author['surname'] ?></h2>
                    <p>Date of birth: <?= $author['date_of_birth'] ?></p>
                    <p>Books count: <?= $author['count'] ?></p>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>