<?php if(!empty($error)) { ?>
<?php echo $error ?>
<?php } else { ?>

<?php foreach($content as $row) { ?>

<div class="post">
	<div class="link"><a class="title" href="<?php echo $row['theme_link'] ?>" target="_blank"><?php echo e($row['title']) ?></a></div>
	<div class="author"><span>Автор: <?php echo e($row['starter_name']) ?></span><?php echo $row['start_date'] ?></div>
</div><!--post-->

<?php } ?>


<?php } ?>