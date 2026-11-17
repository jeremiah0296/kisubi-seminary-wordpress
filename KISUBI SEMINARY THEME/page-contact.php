<?php
/*
Template Name: Kisubi Contact Us
*/
get_header();
?>

<main class="contact-page">

    <!-- CONTACT INTRODUCTION -->
    <section class="contact-hero">
        <h1>Contact St. Charles Lwanga Minor Seminary of Kisubi</h1>
        <p>
            We welcome enquiries from parents, guardians, former students,
            visitors and members of the community. Contact us using the
            details below or send us a message through the form.
        </p>
    </section>

    <!-- CONTACT DETAILS AND MESSAGE FORM -->
    <section class="contact-layout">

        <!-- CONTACT INFORMATION -->
        <div class="contact-card">
            <h2>Get in Touch</h2>
            <p>For general enquiries, please use one of the official contact details below.</p>

            <div class="contact-detail">
                <div class="contact-icon">📍</div>
                <div>
                    <h3>Postal Address</h3>
                    <p>P.O. Box 4, Kisubi, Entebbe, Uganda</p>
                </div>
            </div>

            <div class="contact-detail">
                <div class="contact-icon">📞</div>
                <div>
                    <h3>Telephone</h3>
                    <p><a href="tel:+256771850743">+256 771 850743</a></p>
                    <p><a href="tel:+256414321356">+256 414 321356</a></p>
                </div>
            </div>

            <div class="contact-detail">
                <div class="contact-icon">💬</div>
                <div>
                    <h3>WhatsApp</h3>
                    <p>
                        <a href="https://wa.me/256757545022" target="_blank" rel="noopener">
                            +256 757 545022
                        </a>
                    </p>
                </div>
            </div>

            <div class="contact-detail">
                <div class="contact-icon">✉️</div>
                <div>
                    <h3>Email Address</h3>
                    <p>
                        <a href="mailto:kisubiminorseminary@gmail.com">
                            kisubiminorseminary@gmail.com
                        </a>
                    </p>
                </div>
            </div>

            <div class="contact-note">
                <strong>When contacting the seminary:</strong>
                Please state your name and the reason for your enquiry clearly
                so that your message can be directed appropriately.
            </div>
        </div>

        <!-- MESSAGE FORM -->
        <div class="contact-card">
            <h2>Send Us a Message</h2>
            <p>Complete the form below. Fields marked with * are required.</p>

            <form class="contact-form"
                  action="<?php echo esc_url(get_theme_file_uri('/send.php')); ?>"
                  method="POST">

                <input type="hidden" name="_subject"
                       value="New message from Kisubi Seminary website">

                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_captcha" value="true">

                <label for="full-name">Full Name *</label>
                <input type="text" id="full-name" name="Full Name"
                       placeholder="Enter your full name"
                       autocomplete="name" required>

                <label for="email">Email Address *</label>
                <input type="email" id="email" name="Email Address"
                       placeholder="you@example.com"
                       autocomplete="email" required>

                <label for="phone">Telephone Number</label>
                <input type="tel" id="phone" name="Telephone Number"
                       placeholder="+256 ..." autocomplete="tel">

                <label for="enquiry">Reason for Contact *</label>
                <select id="enquiry" name="Reason for Contact" required>
                    <option value="">-- Select an enquiry type --</option>
                    <option value="Admissions">Admissions and applications</option>
                    <option value="School information">General school information</option>
                    <option value="Parents and guardians">Parents and guardians</option>
                    <option value="Former students">Former students</option>
                    <option value="Visits and events">Visits and events</option>
                    <option value="Other">Other enquiry</option>
                </select>

                <label for="message">Your Message *</label>
                <textarea id="message" name="Message"
                          placeholder="Write your message here..."
                          required></textarea>

                <button class="contact-submit" type="submit">
                    Send Message ✉️
                </button>

            </form>

            <div class="contact-note">
                The message form will require a working email-processing
                endpoint before it can send messages.
            </div>
        </div>

    </section>

    <!-- LOCATION -->
    <section class="location-panel">
        <h2>Where to Find Us</h2>
        <p>
            St. Charles Lwanga Minor Seminary of Kisubi is located at
            Kisubi-Mission, Katabi Town Council, Wakiso District, along the
            Kampala–Entebbe Highway, Uganda.
        </p>
        <p>
            <strong>Postal address:</strong>
            P.O. Box 4, Kisubi, Entebbe, Uganda
        </p>
    </section>

    <!-- GOOGLE MAPS -->
    <section class="location-section" id="location">

        <div class="section-heading">
            <h1>Find Us on Google Maps</h1>
            <p>
                Locate St. Charles Lwanga Minor Seminary of Kisubi
                and get directions.
            </p>
        </div>

        <div class="map-frame">
            <iframe
                class="google-map"
                src="https://maps.google.com/maps?q=St.%20Charles%20Lwanga%20Minor%20Seminary%20Kisubi%2C%20Uganda&t=&z=15&ie=UTF8&iwloc=&output=embed"
                title="Google Map showing St. Charles Lwanga Minor Seminary of Kisubi"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </div>

        <a class="map-link"
           href="https://www.google.com/maps/search/?api=1&query=St.%20Charles%20Lwanga%20Minor%20Seminary%20Kisubi%2C%20Uganda"
           target="_blank"
           rel="noopener noreferrer">
            Open in Google Maps for directions
        </a>

    </section>

</main>

<!-- CONTACT PAGE FOOTER CONTENT -->
<div class="contact-footer">
    <p><strong>St. Charles Lwanga Minor Seminary of Kisubi</strong></p>
    <p>Forming Young Men in Faith, Knowledge and Service</p>
    <p><em>REGI REGUM</em></p>
    <p>&copy; Kisubi Seminary</p>
</div>

<?php get_footer(); ?>