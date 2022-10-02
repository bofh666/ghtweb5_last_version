<?php
/**
 * @var Controller $this
 * @var CActiveDataProvider $dataProvider
 * @var Gallery[] $data
 */

// Fancybox
css('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css');
js('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', CClientScript::POS_END);

$title_ = Yii::t('main', 'Галерея');
$this->pageTitle = $title_;
?>

<div class="entry">
    <div class="scroll-pane">
        <?php if($data = $dataProvider->getData()) { ?>

            <style>
            .gallery-list
            {
                word-spacing: -4px;
            }
                .gallery-list > li > a
                {
                    margin-bottom: 7px;
                }
                .gallery-list > li
                {
                    margin: 0 10px 10px 0;
                    display: inline-block;
                    word-spacing: 0;
                }
            </style>

            <ul class="list-unstyled gallery-list">
                <?php foreach($data as $row) { ?>
                    <li>
                        <a href="<?php echo $row->getImgUrl() ?>" class="img-thumbnail fancybox" title="<?php echo $row->title ?>" rel="gallery">
                            <?php echo CHtml::image($row->getThumbUrl()) ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>

            <?php $this->widget('CLinkPager', array(
                'pages' => $dataProvider->getPagination(),
            )) ?>

        <?php } else { ?>
            <?php echo Yii::t('main', 'Галерея пуста') ?>
        <?php } ?>
    </div>
</div>
