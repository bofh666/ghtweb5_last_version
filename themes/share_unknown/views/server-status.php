<?php if(config('server_status.allow')) { ?>
<?php if($content) { ?>

<?php foreach($content as $gsId => $row) { ?>

<div class="online_block">
    <div class="server_block" data-online="<?php echo $row['online'] ?>">
        <div class="lname cl-effect-1"><?php echo CHtml::link($row['gs']->name, array('/stats/default/index', 'gs_id' => $row['gs']->id)) ?></div>
        <div class="lcurrent"><?php echo $row['ls_status'] == 'online' ? 'On-Line' : 'Off-Line' ?></div>
        <div class="load-line"><div class="loaded"></div></div>
        <div class="lcurrent"> Нагрузка <span></span>% </div>
    </div>
</div>


<?php } ?>
<?php if(count($content) > 1) { ?>

<?php } ?>

<?php } else { ?>
<?php echo Yii::t('main', 'Нет данных.') ?>
<?php } ?>
<?php } else { ?>
<?php echo Yii::t('main', 'Модуль отключен.') ?>
<?php } ?>