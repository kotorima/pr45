<?foreach ($disigns as $disign):?>
<div>
    <h3>Worker ID: <?= $disign->worker_id?></h3>
    <h2><?= $disign->work_name?></h2>
    <p><?= $disign->date_of_creation?></p>
    <img src='<?=$disign->url?>' alt='<?= $disign->work_name?>'>
</div>
<?endforeach;?>