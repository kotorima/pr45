<?foreach ($workers as $worker):?>
<div>
    <h3>ID: <?= $worker->id?></h3>
    <h2>Name: <?= $worker->name?></h2>
</div>
<?endforeach;?>