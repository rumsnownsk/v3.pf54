<?= $this->layout('layouts/main', compact('title','recentWorks','categories', 'auth')) ?>

<h2>Слова благодарности наших клиентов</h2>
<div class="thanks gallery">

    <?php foreach ($thanks as $thank) : ?>
        <div class="thanks__content layer">
            <a href="/public_html/images/thanks/<?= $thank->imageName ?>">
                <img src="/public_html/images/thanks/<?= $thank->imageName ?>" class="thanks-image" title="<?= $thank->title ?>" alt="">
            </a>
            <p><?= $thank->title ?></p>
        </div>
    <?php endforeach; ?>

</div>


