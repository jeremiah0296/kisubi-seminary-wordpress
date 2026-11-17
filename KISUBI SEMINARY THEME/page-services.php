<?php
/*
Template Name: Kisubi Services
*/
get_header();
?>

<div class="container">
    <main class="services-page">

        <!-- INTRODUCTION -->
        <section class="services-hero">
            <h1>Our Services</h1>
            <p>
                Kisubi Seminary is committed to the holistic formation of young men
                through academic learning, spiritual growth, discipline and
                preparation for responsible citizenship.
            </p>
            <a class="services-button" href="<?php echo esc_url(home_url('/about-us/')); ?>">
                Learn About Us
            </a>
        </section>

        <!-- MAIN SERVICES -->
        <section class="services-section">
            <div class="section-heading">
                <h2>What We Offer</h2>
                <p>
                    Our approach to formation seeks to develop the mind, character
                    and spiritual life of every student.
                </p>
            </div>

            <div class="service-grid">

                <article class="service-card">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/class.png')); ?>"
                         alt="Students participating in classroom learning" loading="lazy">
                    <div class="service-content">
                        <h3>Academic Education</h3>
                        <p>
                            We encourage students to develop knowledge, critical thinking,
                            creativity and a commitment to learning. Academic formation
                            prepares them to pursue further education and contribute
                            positively to society.
                        </p>
                    </div>
                </article>

                <article class="service-card">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/chapel.png')); ?>"
                         alt="Christian worship and spiritual reflection" loading="lazy">
                    <div class="service-content">
                        <h3>Spiritual Formation</h3>
                        <p>
                            We guide students in understanding the Catholic faith,
                            growing in prayer and developing values such as compassion,
                            honesty, service and respect for others.
                        </p>
                    </div>
                </article>

                <article class="service-card">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/images (22).jpg')); ?>"
                         alt="Young people learning and working together" loading="lazy">
                    <div class="service-content">
                        <h3>Working Together, Discipline and Leadership</h3>
                        <p>
                            We emphasize self-discipline, responsibility, teamwork and
                            good conduct. These qualities help students become dependable
                            leaders and responsible citizens.
                        </p>
                    </div>
                </article>

                <article class="service-card">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/02_Computer_Laboratory.png')); ?>"
                         alt="Learning with computers and digital technology" loading="lazy">
                    <div class="service-content">
                        <h3>Digital Learning</h3>
                        <p>
                            Appropriate use of technology can help students develop
                            computer skills, research abilities and digital literacy
                            for learning and everyday life.
                        </p>
                    </div>
                </article>

                <article class="service-card">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/togther.png')); ?>"
                         alt="People sharing a meal and building relationships" loading="lazy">
                    <div class="service-content">
                        <h3>Community and Social Values</h3>
                        <p>
                            We promote cooperation, respect, kindness and concern for
                            others. Students are encouraged to value community life
                            and understand the importance of serving society.
                        </p>
                    </div>
                </article>

                <article class="service-card">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/images (23).jpg')); ?>"
                         alt="Physical exercise and personal fitness" loading="lazy">
                    <div class="service-content">
                        <h3>Personal Development</h3>
                        <p>
                            Personal growth includes emotional intelligence, confidence,
                            perseverance and healthy habits. These qualities support
                            balanced development beyond the classroom.
                        </p>
                    </div>
                </article>

            </div>
        </section>

        <!-- OUR APPROACH -->
        <section class="services-section highlight-section">
            <div class="section-heading">
                <h2>Our Approach to Formation</h2>
                <p>
                    Education is about more than passing examinations. It is also
                    about developing good character and preparing for life.
                </p>
            </div>

            <ul class="highlight-list">
                <li><strong>Academic growth:</strong> Encouraging consistent study, curiosity and a desire for knowledge.</li>
                <li><strong>Spiritual growth:</strong> Supporting students in understanding their Catholic faith and values.</li>
                <li><strong>Emotional intelligence:</strong> Learning to understand emotions, manage challenges and respect other people.</li>
                <li><strong>Responsible citizenship:</strong> Promoting honesty, accountability, cooperation and service to the community.</li>
                <li><strong>Personal responsibility:</strong> Developing habits of discipline, commitment and respect for school rules.</li>
            </ul>
        </section>

        <!-- PERFORMANCE OVERVIEW -->
        <section class="services-section">
            <div class="section-heading">
                <h2>Performance Overview</h2>
                <p>
                    A summary of the examination figures currently included in this website.
                </p>
            </div>

            <table class="performance-table">
                <thead>
                    <tr>
                        <th>Division</th>
                        <th>Number of Candidates</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Division One</td><td>44</td></tr>
                    <tr><td>Division Two</td><td>00</td></tr>
                    <tr><td>Division Three</td><td>00</td></tr>
                    <tr><td>Division Four</td><td>00</td></tr>
                </tbody>
            </table>

            <p class="performance-note">
                Note: These are the figures supplied in the original page.
                Confirm the examination year and candidate totals before publishing.
            </p>
        </section>

        <!-- CLOSING SECTION -->
        <section class="closing-section">
            <h2>Building a Better Future</h2>
            <p>
                Through education, spiritual formation and the promotion of good
                character, we aim to help young men grow into responsible individuals
                who can make a positive contribution to their communities.
            </p>
            <a class="services-button" href="<?php echo esc_url(home_url('/contact/')); ?>">
                Contact Us
            </a>
        </section>

    </main>
</div>

<?php get_footer(); ?>