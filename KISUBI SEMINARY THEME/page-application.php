<?php
/*
Template Name: Kisubi Application Form
*/
get_header();
?>

<div class="container">

    <!-- SEMINARY BANNER -->
    <header class="banner">

        <div class="badge">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/images (13).jfif')); ?>" alt="Kisubi Seminary Logo">
        </div>

        <h1>KISUBI MINOR SEMINARY</h1>
        <p>P.O. Box 4, Kisubi, Uganda</p>
        <p>APPLICATION FOR ADMISSION</p>

    </header>

    <div class="form-title">
        <h2>STUDENT APPLICATION FORM</h2>
        <p>
            Academic Year:
            <input type="text" name="academic_year"
                   style="width:120px; display:inline-block;">
        </p>
    </div>

    <div class="notice">
        <strong>Important:</strong>
        This is a sample application form designed for practice and personal use.
        It is not an official form issued by Kisubi Minor Seminary.
        Confirm the school's admission requirements before submitting it.
    </div>

    <form id="applicationForm">

        <!-- SECTION A -->
        <h3 class="section-title">SECTION A: APPLICANT'S PERSONAL DETAILS</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="full_name" required>
            </div>

            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="dob" required>
            </div>

            <div class="form-group">
                <label>Place of Birth</label>
                <input type="text" name="birth_place">
            </div>

            <div class="form-group">
                <label>Nationality</label>
                <input type="text" name="nationality">
            </div>

            <div class="form-group">
                <label>Home District</label>
                <input type="text" name="district">
            </div>

            <div class="form-group">
                <label>Village / Home Address</label>
                <input type="text" name="address">
            </div>

            <div class="form-group">
                <label>Class Applying For</label>
                <select name="class" required>
                    <option value="">Select class</option>
                    <option>Senior One (S.1)</option>
                    <option>Senior Two (S.2)</option>
                    <option>Senior Three (S.3)</option>
                    <option>Senior Four (S.4)</option>
                    <option>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label>Religion</label>
                <input type="text" name="religion">
            </div>

        </div>

        <!-- SECTION B -->
        <h3 class="section-title">SECTION B: PARENT / GUARDIAN DETAILS</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Father's Full Name</label>
                <input type="text" name="father_name">
            </div>

            <div class="form-group">
                <label>Mother's Full Name</label>
                <input type="text" name="mother_name">
            </div>

            <div class="form-group">
                <label>Parent / Guardian Telephone</label>
                <input type="tel" name="guardian_phone" required>
            </div>

            <div class="form-group">
                <label>Alternative Telephone</label>
                <input type="tel" name="alternative_phone">
            </div>

            <div class="form-group">
                <label>Parent / Guardian Occupation</label>
                <input type="text" name="occupation">
            </div>

            <div class="form-group">
                <label>Parent / Guardian Email</label>
                <input type="email" name="guardian_email">
            </div>

            <div class="form-group full-width">
                <label>Parent / Guardian Home Address</label>
                <textarea name="guardian_address"></textarea>
            </div>

        </div>

        <!-- SECTION C -->
        <h3 class="section-title">SECTION C: PREVIOUS SCHOOL DETAILS</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Name of Primary School</label>
                <input type="text" name="previous_school" required>
            </div>

            <div class="form-group">
                <label>School District</label>
                <input type="text" name="school_district">
            </div>

            <div class="form-group">
                <label>Year Completed Primary Seven</label>
                <input type="number" name="ple_year" min="2000" max="2100">
            </div>

            <div class="form-group">
                <label>PLE Index Number, if available</label>
                <input type="text" name="ple_index">
            </div>

        </div>

        <h4 style="color:red;">Academic Performance</h4>

        <table>
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Grade / Mark</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>English Language</td>
                    <td><input type="text" name="english_grade"></td>
                </tr>

                <tr>
                    <td>Mathematics</td>
                    <td><input type="text" name="math_grade"></td>
                </tr>

                <tr>
                    <td>Integrated Science</td>
                    <td><input type="text" name="science_grade"></td>
                </tr>

                <tr>
                    <td>Social Studies</td>
                    <td><input type="text" name="sst_grade"></td>
                </tr>
            </tbody>
        </table>

        <!-- SECTION D -->
        <h3 class="section-title">SECTION D: RELIGIOUS DETAILS</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Parish / Church</label>
                <input type="text" name="parish">
            </div>

            <div class="form-group">
                <label>Name of Parish Priest / Chaplain</label>
                <input type="text" name="priest">
            </div>

            <div class="form-group">
                <label>Date of Baptism, if applicable</label>
                <input type="date" name="baptism_date">
            </div>

            <div class="form-group">
                <label>Date of Confirmation, if applicable</label>
                <input type="date" name="confirmation_date">
            </div>

        </div>

        <!-- SECTION E -->
        <h3 class="section-title">SECTION E: REASONS FOR APPLYING</h3>

        <div class="form-grid">

            <div class="form-group full-width">
                <label>Why would you like to join Kisubi Minor Seminary?</label>
                <textarea name="reason" rows="5"></textarea>
            </div>

            <div class="form-group full-width">
                <label>Other Relevant Information</label>
                <textarea name="other_information"></textarea>
            </div>

        </div>

        <!-- SECTION F -->
        <h3 class="section-title">SECTION F: DECLARATION</h3>

        <div class="declaration">
            I declare that the information provided in this application
            is true and correct to the best of my knowledge. I understand
            that admission is subject to the school's official requirements
            and selection process.
        </div>

        <div class="signature-grid">

            <div>
                <div class="signature-box">Applicant's Signature</div>
                <p>Date: __________________________</p>
            </div>

            <div>
                <div class="signature-box">Parent / Guardian's Signature</div>
                <p>Date: __________________________</p>
            </div>

        </div>

        <!-- SECTION G -->
        <h3 class="section-title">SECTION G: FOR SCHOOL OFFICE USE ONLY</h3>

        <div class="form-grid">

            <div class="form-group">
                <label>Application Number</label>
                <input type="text" name="application_number">
            </div>

            <div class="form-group">
                <label>Date Received</label>
                <input type="date" name="date_received">
            </div>

            <div class="form-group">
                <label>Interview Result</label>
                <select name="interview_result">
                    <option value="">Select result</option>
                    <option>Recommended</option>
                    <option>Pending</option>
                    <option>Not recommended</option>
                </select>
            </div>

            <div class="form-group">
                <label>Admission Decision</label>
                <select name="decision">
                    <option value="">Select decision</option>
                    <option>Accepted</option>
                    <option>Waitlisted</option>
                    <option>Not accepted</option>
                </select>
            </div>

            <div class="form-group full-width">
                <label>Official Comments</label>
                <textarea name="official_comments"></textarea>
            </div>

        </div>

        <div class="signature-grid">

            <div class="signature-box">
                Admissions Officer's Name and Signature
            </div>

            <div class="signature-box">
                Official School Stamp
            </div>

        </div>

        <!-- BUTTONS -->
        <div class="buttons">

            <button type="button" class="print-btn"
                    onclick="window.print()">
                Print Application Form
            </button>

            <button type="reset" class="clear-btn">
                Clear Form
            </button>

        </div>

    </form>

    <!-- FOOTER -->
    <footer class="footer" style="height:200px;">
        <p><strong>KISUBI MINOR SEMINARY</strong></p>
        <p>Application Form Template — Confirm official requirements before submission.</p>
        <p class="web">
            Website:
            <a href="<?php echo esc_url(home_url('/')); ?>"
               style="text-decoration:none; color:black;">
                &copy; Kisubi Seminary
            </a>
        </p>
        <p class="wap">REGI REGUM</p>
    </footer>

</div>

<?php get_footer(); ?>