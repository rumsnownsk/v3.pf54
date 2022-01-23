<?= $this->layout('layouts/admin', compact('title', 'auth')) ?>

<div class="listWorks flex-column">

    <div class="listWorks__header">
        <h2 class="box-title">Все выполненые работы</h2>
        <a href="/admin/work/create" class="btn btn-success btn-sm">Добавить</a>
    </div>
    <?= $msg->display(); ?>

    <div class="col-lg-12 form-control-group">
        <input type="text" id="elastic"  title="">
    </div>

    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>№</th>
            <th>Изображение</th>
            <th>Название</th>
            <th>Категория</th>
            <th>Этап</th>
            <th>Публикация</th>
            <th>Завершено</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($works as $work) : ?>
            <tr class="admin-work_item" id="admin-work_item">
                <td><?= $work->id ?></td>
                <td class="td__photo">
                    <div class="myHover" >
                        <img src="<?= $work->getImage() ?>" alt="">
                        <div class="getLarge">
                            <img src="<?= $work->getImage() ?>"
                                 class="getLarge__img" alt="">
                        </div>
                    </div>

                </td>
                <td id="workTitle">
                    <?= $work->title ?>
                </td>
                <td><?= $work->getCategory() ?></td>
                <td><?= $work->getStage() ?></td>
                <td><?= $work->getPublish() ?></td>
                <td><?= $work->changeFormatDate($work->timeCreate) ?></td>
                <td class="indexTable">
                    <a href="/admin/work/<?=$work->id?>/edit" class="btn btn-warning btn-sm">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <a onclick="return confirm('Вы уверены?');" href="/admin/work/<?=$work->id?>/destroy" class="btn btn-danger btn-sm">
                        <i class="fa fa-close"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
</div>