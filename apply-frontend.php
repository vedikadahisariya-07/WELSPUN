<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply - Frontend Developer Role</title>
    <link rel="stylesheet" href="apply-style.css">
</head>
<body>

    <div class="application-wrapper">
        <div class="application-card">
            
            <div class="form-header">
                <span class="role-badge">Job ID: #FD-2026</span>
                <h2>Frontend Developer Application</h2>
                <p>Please fill out this information form accurately. Fields marked with an asterisk (*) are required for your profile evaluation.</p>
            </div>

            <form action="dbconnect.php" method="POST" enctype="multipart/form-data" class="app-form">
                
                <input type="hidden" name="position" value="Frontend Developer">

                <div class="form-section-title">1. Personal Information</div>
                
                <div class="form-grid">
                    <div class="input-group">
                        <label for="fullname">Full Name *</label>
                        <input type="text" name="fullname" id="fullname" required placeholder="E.g., Rohan Sharma">
                    </div>
                    
                    <div class="input-group">
                        <label for="email">Email Address *</label>
                        <input type="email" name="email" id="email" required placeholder="name@example.com">
                    </div>
                </div>

                <div class="form-grid">
                    <div class="input-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" name="phone" id="phone" required placeholder="+91 XXXXX XXXXX">
                    </div>

                    <div class="input-group">
                        <label for="experience">Years of Experience *</label>
                        <select name="experience" id="experience" required>
                            <option value="" disabled selected>Select your experience level...</option>
                            <option value="Fresher / Entry Level">Fresher / Entry Level</option>
                            <option value="1-2 Years">1 - 2 Years</option>
                            <option value="3-5 Years">3 - 5 Years</option>
                            <option value="5+ Years">5+ Years</option>
                        </select>
                    </div>
                </div>

                <div class="form-section-title">2. Technical Profile &amp; Skills</div>

                <div class="form-grid">
                    <div class="input-group">
                        <label for="portfolio">Portfolio URL *</label>
                        <input type="url" name="portfolio" id="portfolio" required placeholder="https://myportfolio.com">
                    </div>
                    
                    <div class="input-group">
                        <label for="github">GitHub Profile *</label>
                        <input type="url" name="github" id="github" required placeholder="https://github.com/username">
                    </div>
                </div>

                <div class="input-group">
                    <label>Core Core Competencies (Select all that apply) *</label>
                    <div class="skills-checkbox-grid">
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="HTML5 &amp; CSS3">
                            <span class="checkbox-label">HTML5 &amp; CSS3</span>
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="JavaScript (ES6+)">
                            <span class="checkbox-label">JavaScript (ES6+)</span>
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="React.js / Vue.js">
                            <span class="checkbox-label">React.js / Vue.js</span>
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="Responsive Design">
                            <span class="checkbox-label">Responsive Design</span>
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="Git &amp; Version Control">
                            <span class="checkbox-label">Git / GitHub</span>
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="Tailwind CSS / Bootstrap">
                            <span class="checkbox-label">Tailwind / Bootstrap</span>
                        </label>
                    </div>
                </div>

                <div class="form-section-title">3. Joining Logistics</div>

                <div class="form-grid">
                    <div class="input-group">
                        <label for="notice_period">Notice Period *</label>
                        <select name="notice_period" id="notice_period" required>
                            <option value="Immediate Joiner">Immediate Joiner</option>
                            <option value="15 Days">15 Days</option>
                            <option value="30 Days">30 Days</option>
                            <option value="60+ Days">60+ Days</option>
                        </select>
                    </div>
                    
                    <div class="input-group">
                        <label for="expected_ctc">Expected CTC (Annual INR) *</label>
                        <input type="text" name="expected_ctc" id="expected_ctc" required placeholder="E.g., 6,000,000">
                    </div>
                </div>

                <div class="form-section-title">4. Document Upload</div>

                <div class="input-group">
                    <label for="resume">Upload Comprehensive Resume (PDF format only) *</label>
                    <div class="file-upload-zone">
                        <input type="file" name="resume" id="resume" accept=".pdf" required>
                        <p class="file-hint">Max file size: 5MB. Ensure documents are updated.</p>
                    </div>
                </div>

                <div class="input-group">
                    <label for="cover_letter">Additional Professional Overview (Optional)</label>
                    <textarea name="cover_letter" id="cover_letter" rows="4" placeholder="Highlight key web development projects or frameworks you specialize in..."></textarea>
                </div>

                <button type="submit" name="submit_app" class="submit-btn">Submit Information Profile</button>
                <a href="index.html" class="home-link">← Return to Corporate Site</a>
            </form>

        </div>
    </div>

</body>
</html>