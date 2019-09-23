<? if (count($model)): ?>
    <? foreach ($model as $item): ?>
        <div class="item">
            <div class="heading__h5"><?= $item->user_id ?></div>
        </div>
    <? endforeach; ?>
<? endif; ?>
