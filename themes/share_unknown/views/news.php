<?php
/**
 * @var CActiveDataProvider $dataProvider
 * @var News[] $data
 */

$this->pageTitle = Yii::t('main', 'Новости');
?>

<?php if($data = $dataProvider->getData()) { ?>


<?php foreach($data as $row) { ?>

<article class="block_contant">
    <div class="cont-top"> <div class="cl-effect-1"><?php echo CHtml::link($row->title, array('/news/default/detail', 'news_id' => $row->id)) ?></div></div>
    <div class="cont-body">
        <p><?php echo $row->description ?></p>
    </div>
    <div class="cont-bot">
        <div class="date">Дата: <?php echo $row->getDate() ?></div>  
        <!-- <div class="user">Автор новости: <a href="solodev.ru">solodev</a></div> --> 
    </div>
</article><!-- block_contant -->

<?php } ?>
<style>.pagination {display: none;}</style>
<?php $this->widget('CLinkPager', array(
    'pages' => $dataProvider->getPagination(),
    )) ?>
    
    <?php } else { ?>
    <?php echo Yii::t('main', 'Нет данных') ?>
    <?php } ?>