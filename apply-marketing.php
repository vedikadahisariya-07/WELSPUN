<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply - Marketing Executive Role</title>
    <link rel="stylesheet" href="apply-style1.css">
</head>
<body>

    <div class="application-wrapper">
        <div class="application-card">
            
            <div class="form-header">
                <span class="role-badge" style="background: #e67e22;">Job ID: #ME-2026</span>
                <h2>Marketing Executive Application</h2>
                <p>Please fill out this professional profile form accurately. Fields marked with an asterisk (*) are required.</p>
            </div>

            <form action="dbmarketing.php" method="POST" enctype="multipart/form-data" class="app-form">
                
                <input type="hidden" name="position" value="Marketing Executive">

                <div class="form-section-title">1. Personal Information</div>
                
                <div class="form-grid">
                    <div class="input-group">
                        <label for="fullname">Full Name *</label>
                        <input type="text" name="fullname" id="fullname" required placeholder="E.g., Priya Patel">
                    </div>
                    
                    <div class="input-group">
                        <label for="email">Email Address *</label>
                        <input type="email" name="email" id="email" required placeholder="priya@example.com">
                    </div>
                </div>

                <div class="form-grid">
                    <div class="input-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" name="phone" id="phone" required placeholder="+91 XXXXX XXXXX">
                    </div>

                    <div class="input-group">
                        <label for="experience">Years of Marketing Experience *</label>
                        <select name="experience" id="experience" required>
                            <option value="" disabled selected>Select your experience level...</option>
                            <option value="Fresher / Entry Level">Fresher / Entry Level</option>
                            <option value="1-2 Years">1 - 2 Years</option>
                            <option value="3-5 Years">3 - 5 Years</option>
                            <option value="5+ Years">5+ Years</option>
                        </select>
                    </div>
                </div>

                <div class="form-section-title">2. Marketing Profile & Domain Expertise</div>

                <div class="form-grid">
                    <div class="input-group">
                        <label for="portfolio">Campaign Portfolio / Case Study URL *</label>
                        <input type="url" name="portfolio" id="portfolio" required placeholder="https://behance.net/portfolio or drive-link">
                    </div>
                    
                    <div class="input-group">
                        <label for="linkedin">LinkedIn Profile URL *</label>
                        <input type="url" name="linkedin" id="linkedin" required placeholder="https://linkedin.com/in/username">
                    </div>
                </div>

                <div class="input-group">
                    <label>Core Marketing Competencies (Select all that apply) *</label>
                    <div class="skills-checkbox-grid">
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="Social Media Marketing (SMM)">
                            <span class="checkbox-label">Social Media (SMM)</span>
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="Search Engine Optimization (SEO)">
                            <span class="checkbox-label">SEO & Content Strategy</span>
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="Performance Ads (Meta/Google)">
                            <span class="checkbox-label">Paid Performance Ads</span>
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="Brand Strategy & PR">
                            <span class="checkbox-label">Brand Strategy & PR</span>
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="Email Marketing & Automation">
                            <span class="checkbox-label">Email Marketing</span>
                        </label>
                        <label class="checkbox-container">
                            <input type="checkbox" name="skills[]" value="Market R&D / Data Analytics">
                            <span class="checkbox-label">Marketing Analytics</span>
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
                        <input type="text" name="expected_ctc" id="expected_ctc" required placeholder="E.g., 5,000,000">
                    </div>
                </div>

                <div class="form-section-title">4. Document Upload</div>

                <div class="input-group">
                    <label for="resume">Upload Comprehensive Resume (PDF format only) *</label>
                    <div class="file-upload-zone">
                        <input type="file" name="resume" id="resume" accept=".pdf" required>
                        <p class="file-hint">Max file size: 5MB. Ensure contact data is accurate.</p>
                    </div>
                </div>

                <div class="input-group">
                    <label for="cover_letter">Briefly Describe Your Most Successful Marketing Campaign (Optional)</label>
                    <textarea name="cover_letter" id="cover_letter" rows="4" placeholder="Mention budgets managed, ROAS, or growth metrics achieved..."></textarea>
                </div>

                <button type="submit" name="submit_app" class="submit-btn" style="background: #e67e22;">Submit Marketing Profile</button>
                <a href="index.html" class="home-link">← Return to Corporate Site</a>
            </form>

        </div>
    </div>

</body>
</html>