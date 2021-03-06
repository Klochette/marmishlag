<?php error_reporting(E_ALL); ?>

<?php
    // init var for header
    $user = wp_get_current_user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <div class="header_main">
        <div class="header_ctn pl-5 pr-5 d-f">
            <div class="header-left">
                <div>
                    <a href="<?php echo bloginfo('url'); ?>"> 
                        <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.167 60.9922V32L52.5869 52.4209C47.188 57.8755 39.8418 60.959 32.167 60.9922Z" fill="#D3843D"/>
                            <path d="M32.167 3V32L52.5869 11.5791C47.19 6.12109 39.8428 3.03418 32.167 3Z" fill="#D3843D"/>
                            <path d="M32.167 61V32L11.7461 52.4209C17.144 57.8784 24.4907 60.9653 32.167 61Z" fill="#D3843D"/>
                            <path d="M32.167 32H61C61.0093 39.6523 57.9839 46.9961 52.5869 52.4209L32.167 32Z" fill="#D3843D"/>
                            <path d="M32.167 32H3.33303C3.32375 39.6523 6.34914 46.9961 11.7461 52.4209L32.167 32Z" fill="#B27242"/>
                            <path d="M32.167 60.9922V32L52.5869 52.4209C47.188 57.8755 39.8418 60.959 32.167 60.9922Z" fill="#B27242"/>
                            <path d="M32.167 61V32L11.7461 52.4209C17.144 57.8784 24.4907 60.9653 32.167 61Z" fill="#D3843D"/>
                            <path d="M32.167 32H61C61.0093 24.3477 57.9839 17.0039 52.5869 11.5791L32.167 32Z" fill="#B27242"/>
                            <path d="M32.167 9V32L48.3452 15.8179C44.0708 11.4883 38.251 9.03564 32.167 9V9Z" fill="#FFD782"/>
                            <path d="M32.167 54.9922V32L48.3452 48.1738C44.0703 52.5029 38.2505 54.9556 32.167 54.9922V54.9922Z" fill="#F4BD5D"/>
                            <path d="M32.167 55V32L15.9888 48.1782C20.2622 52.5093 26.0825 54.9634 32.167 55Z" fill="#FFD782"/>
                            <path d="M32.167 32H9.33302C9.3257 38.0605 11.7188 43.8774 15.9888 48.1782L32.167 32Z" fill="#F4BD5D"/>
                            <path d="M32.167 32H55C55.0073 25.9395 52.6147 20.123 48.3452 15.8218L32.167 32Z" fill="#F4BD5D"/>
                            <path d="M32.167 32H55C55.0073 38.0605 52.6147 43.877 48.3452 48.1782L32.167 32Z" fill="#FFD782"/>
                            <path d="M36.167 14.9961C36.167 16.1006 35.2715 16.9961 34.167 16.9961C33.0625 16.9961 32.167 16.1006 32.167 14.9961C32.167 13.8916 33.0625 12.9961 34.167 12.9961C35.2715 12.9961 36.167 13.8916 36.167 14.9961Z" fill="#DD3E46"/>
                            <path d="M50.167 25.9961C50.167 27.1006 49.2715 27.9961 48.167 27.9961C47.0625 27.9961 46.167 27.1006 46.167 25.9961C46.167 24.8916 47.0625 23.9961 48.167 23.9961C49.2715 23.9961 50.167 24.8916 50.167 25.9961Z" fill="#55B56A"/>
                            <path d="M43.167 37.9961C43.167 39.1006 42.2715 39.9961 41.167 39.9961C40.0625 39.9961 39.167 39.1006 39.167 37.9961C39.167 36.8916 40.0625 35.9961 41.167 35.9961C42.2715 35.9961 43.167 36.8916 43.167 37.9961Z" fill="#DD3E46"/>
                            <path d="M36.167 48.9961C36.167 50.1006 35.2715 50.9961 34.167 50.9961C33.0625 50.9961 32.167 50.1006 32.167 48.9961C32.167 47.8916 33.0625 46.9961 34.167 46.9961C35.2715 46.9961 36.167 47.8916 36.167 48.9961Z" fill="#55B56A"/>
                            <path d="M28.167 40.9961C28.167 42.1006 27.2715 42.9961 26.167 42.9961C25.0625 42.9961 24.167 42.1006 24.167 40.9961C24.167 39.8916 25.0625 38.9961 26.167 38.9961C27.2715 38.9961 28.167 39.8916 28.167 40.9961Z" fill="#DD3E46"/>
                            <path d="M18.167 33.9961C18.167 35.1006 17.2715 35.9961 16.167 35.9961C15.0625 35.9961 14.167 35.1006 14.167 33.9961C14.167 32.8916 15.0625 31.9961 16.167 31.9961C17.2715 31.9961 18.167 32.8916 18.167 33.9961Z" fill="#55B56A"/>
                            <path d="M16.2715 41.5483L17.2715 39.5483L19.0605 40.4429L18.0605 42.4429L16.2715 41.5483Z" fill="#E97424"/>
                            <path d="M28.4482 27.7981L0.711989 19.3304C2.9195 12.1264 7.94374 6.1192 14.644 2.67246L28.4482 27.7981Z" fill="#F3BB59"/>
                            <path d="M28.4482 27.7981L6.48416 21.0926C8.23214 15.3871 12.2082 10.6277 17.512 7.89214L28.4482 27.7981Z" fill="#FFD782"/>
                            <path d="M15.7135 21.862C16.0294 20.8271 15.4238 19.7253 14.3614 19.401C13.2985 19.0765 12.1808 19.6522 11.8649 20.6871C11.5489 21.7219 12.1545 22.8237 13.2174 23.1482C14.2798 23.4726 15.3975 22.8969 15.7135 21.862Z" fill="#DD3E46"/>
                            <path d="M15.8943 14.2026L17.8628 13.8484L18.2529 16.0157L16.2843 16.3699L15.8943 14.2026Z" fill="#B27242"/>
                            <path d="M24.335 47.5508L25.999 46.4414L27.999 49.4419L26.335 50.5513L24.335 47.5508Z" fill="#B27242"/>
                            <path d="M35.2725 43.5479L36.2725 41.5479L38.061 42.4424L37.0615 44.4419L35.2725 43.5479Z" fill="#E97424"/>
                            <path d="M46.6128 39.1641L49.6128 37.1641L50.7222 38.8281L47.7222 40.8281L46.6128 39.1641Z" fill="#B27242"/>
                            <path d="M40.7207 27.8906L41.6152 26.1021L43.6147 27.1016L42.7207 28.8906L40.7207 27.8906Z" fill="#E97424"/>
                            <path d="M36.6123 19.1641L39.6123 17.1641L40.7217 18.8281L37.7217 20.8281L36.6123 19.1641Z" fill="#B27242"/>
                        </svg>
                    </a>
                </div>
                <div>
                    <?php if($user->ID != 0): ?>
                        <p class="user_name"><?php echo $user->user_login; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="user_params">
                <?php if($user->ID == 0): ?>
                    <a href="<?php echo bloginfo('url'); ?>/login/">Log in</a>
                    <a href="<?php echo bloginfo('url'); ?>/register/">Sign in</a>
                <?php else: ?>
                    <a href="<?php echo bloginfo('url'); ?>/logout/">Log out</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
   
