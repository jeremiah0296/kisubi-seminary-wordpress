<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="jj">

<header>
    <marquee direction="left">
        <p style="font-size:20px;color:white;">
            📞 PHONE: +256 771 850743 / +256 414 321356 |
            📧 Email:
            <a href="mailto:kisubiminorseminary@gmail.com" style="color:white;">
                kisubiminorseminary@gmail.com
            </a>
            | 📬 Address: P.O Box 4 Kisubi, Entebbe - UGANDA
        </p>
    </marquee>

    <div class="logo">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/images (13).jfif')); ?>"
             alt="Kisubi Seminary Logo" width="100">

        <h1>ST. CHARLES LWANGA MINOR SEMINARY OF KISUBI</h1>
    </div>
</header>

<br>
</div>

<div class="me">
<nav>
    <button><a href="<?php echo esc_url(home_url('/')); ?>">🏠 Home</a></button>

    <button><a href="<?php echo esc_url(home_url('/about-us/')); ?>">ℹ️ About us</a></button>

    <button><a href="<?php echo esc_url(home_url('/services/')); ?>">⚙️ Services</a></button>

    <button><a href="<?php echo esc_url(home_url('/events/')); ?>">📅 Events</a></button>

    <button><a href="<?php echo esc_url(home_url('/contact/')); ?>">📞 Contact us</a></button>

    <a href="<?php echo esc_url(home_url('/application/')); ?>">
        <button style="float:right;font-size:20px;border-radius:15px;">
            Apply now
        </button>
    </a>
</nav>
</div>