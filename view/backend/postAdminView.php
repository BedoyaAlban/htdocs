<?php session_start(); ?>
<?php ob_start(); ?>
<div class="center">
    <h1 class="h01 admin"><?= htmlspecialchars($post['title']) ?></h1>
    <div class="admin">
        <?= $post['creation_date_fr'] ?>
    </div>
    <div class="admin">
        <?= htmlspecialchars($post ['content']); ?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>