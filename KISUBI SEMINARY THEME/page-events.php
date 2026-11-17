<?php
/*
Template Name: Kisubi Events
*/
get_header();
?>

<!-- EVENTS SECTION -->
<section class="an">

    <!-- EXISTING EVENTS -->
    <div class="info-container">

        <div class="all">
            <h2>Bishop's Visit</h2>
            <img src="<?php echo esc_url(get_theme_file_uri('/images/seminary_bishop_visit.png')); ?>"
                 alt="Bishop's visit">
        </div>

        <div class="all">
            <h2>Classes</h2>
            <img src="<?php echo esc_url(get_theme_file_uri('/images/people.png')); ?>"
                 alt="Students in class">
        </div>

        <div class="all">
            <h2>Band</h2>
            <img src="<?php echo esc_url(get_theme_file_uri('/images/band.png')); ?>"
                 alt="Seminary students band">
        </div>

        <div class="all">
            <h2>Choir</h2>
            <img src="<?php echo esc_url(get_theme_file_uri('/images/chior.png')); ?>"
                 alt="Seminary choir">
        </div>

    </div>

    <!-- LABORATORY DIVISIONS -->
    <div class="laboratories">

        <div class="lab-section">
            <div class="lab-slideshow">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/04_Chemistry_Laboratory.png')); ?>" class="active" alt="Chemistry laboratory">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/03_Biology_Laboratory.png')); ?>" alt="Biology laboratory">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/07_Agriculture_Laboratory.png')); ?>" alt="Agriculture laboratory">
            </div>
        </div>

        <div class="lab-section">
            <div class="lab-slideshow">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/05_Physics_Laboratory.png')); ?>" class="active" alt="Physics laboratory">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/02_Computer_Laboratory.png')); ?>" alt="Computer laboratory">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/06_Geography_Room.png')); ?>" alt="Geography room">
            </div>
        </div>

    </div>

    <!-- SPORTS -->
    <div class="all">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/SPORTS.png')); ?>"
             alt="School sports"
             style="height:300px; border-radius:100px;">
    </div>

    <div class="laboratories">

        <div class="lab-section">
            <div class="lab-slideshow">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/Football_Blue_Team 1.png')); ?>" class="active" alt="Football blue team">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/10_Football_Red_Team.png')); ?>" alt="Football red team">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/Basketball_Blue_Team 2.png')); ?>" alt="Basketball team">
            </div>
        </div>

        <div class="lab-section">
            <div class="lab-slideshow">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/Volleyball_Red_Team 1.png')); ?>" class="active" alt="Volleyball team">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/Tennis_White_Team 1.png')); ?>" alt="Tennis team">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/09_Swimming_Team.png')); ?>" alt="Swimming team">
            </div>
        </div>

    </div>

    <div class="laboratories">

        <div class="lab-section">
            <div class="lab-slideshow">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/Badminton_Navy_Team 1.png')); ?>" class="active" alt="Badminton team">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/12_Sports_Team_Navy.png')); ?>" alt="Sports team">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/08_Hockey_Yellow_Team.png')); ?>" alt="Hockey team">
            </div>
        </div>

        <div class="lab-section">
            <div class="lab-slideshow">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/07_Athletics_Navy_Team.png')); ?>" class="active" alt="Athletics team">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/06_Rugby_Green_Team.png')); ?>" alt="Rugby team">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/Basketball_Blue_Team 2.png')); ?>" alt="Basketball team">
            </div>
        </div>

    </div>

</section>

<?php get_footer(); ?>