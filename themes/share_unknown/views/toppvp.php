<?php if(config('top.pvp.allow')) { ?>
    <?php if($content) { ?>

        <div width="70%">
            <table width="85%" class="statstab1">
            <tr>
                <td width="75%"><b>Имя персонажа</b></td>
                <td width="15%"><b>PvP</b></td>
                <td width="10%"><b>PK</b></td>
            </tr>
                <?php $i = 1; foreach($content as $gsId => $row) { ?>
                    <tr>
                        <td><?php echo $i++ ?>. <?php echo e($row['char_name']) ?></td>
                        <td><?php echo e($row['pvpkills']) ?></td>
                        <td><?php echo e($row['pkkills']) ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    <?php } else { ?>
        <?php echo Yii::t('main', 'Нет данных.') ?>
    <?php } ?>
<?php } else { ?>
    <?php echo Yii::t('main', 'Модуль отключен.') ?>
<?php } ?>