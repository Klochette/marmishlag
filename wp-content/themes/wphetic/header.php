<?php error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <a href="<?php echo bloginfo('url'); ?>">Homepage</a>
    <?php $user = wp_get_current_user(); ?>
    <?php if($user->ID == 0): ?>
        <a href="<?php echo bloginfo('url'); ?>/login/">Se connecter</a>
        <a href="<?php echo bloginfo('url'); ?>/register/">S'inscrire</a>
    <?php else: ?>
        <p>Salut <?php echo $user->user_login; ?>, </p>
        <a href="<?php echo bloginfo('url'); ?>/logout/">Se déconnecter</a>
    <?php endif; ?>
