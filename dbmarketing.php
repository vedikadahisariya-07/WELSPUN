<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "form"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

if (isset($_POST['submit_app'])) {

    $fullname                                           = $_POST['fullname'];
    $emailaddress                                       = $_POST['email'];
    $phonenumber                                        = $_POST['phone'];
    $YearsofMarketingExperience                         = $_POST['experience'];
    $CampaignPortfolioCaseStudyURL                      = $_POST['portfolio'];
    $LinkedInProfileURL                                 = $_POST['linkedin']; 
    $noticeperiod                                       = $_POST['notice_period'];
    $expectedCTC                                        = $_POST['expected_ctc'];
    $BrieflyDescribeYourMostSuccessfulMarketingCampaign = $_POST['cover_letter']; 


    $CoreMarketingCompetencies = "None Selected";
    if (isset($_POST['skills']) && is_array($_POST['skills'])) {
        $CoreMarketingCompetencies = implode(", ", $_POST['skills']);
    }

    $UploadComprehensiveResume = ""; 
    if (isset($_FILES["resume"]) && $_FILES["resume"]["error"] == 0) {
        $upload_dir = "uploads/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        $filename = time() . "_" . $_FILES["resume"]["name"];
        $UploadComprehensiveResume = $upload_dir . $filename; 
        move_uploaded_file($_FILES["resume"]["tmp_name"], $UploadComprehensiveResume);
    }

      $sql = "INSERT INTO `profile` 
    (`fullname`, `emailaddress`, `phonenumber`, `YearsofMarketingExperience`, `CampaignPortfolioCaseStudyURL`, `LinkedInProfileURL`, `CoreMarketingCompetencies`, `noticeperiod`, `expectedCTC`, `UploadComprehensiveResume`, `BrieflyDescribeYourMostSuccessfulMarketingCampaign`)
    VALUES  
    ('$fullname', '$emailaddress', '$phonenumber', '$YearsofMarketingExperience', '$CampaignPortfolioCaseStudyURL', '$LinkedInProfileURL', '$CoreMarketingCompetencies', '$noticeperiod', '$expectedCTC', '$UploadComprehensiveResume', '$BrieflyDescribeYourMostSuccessfulMarketingCampaign')";

    if ($conn->query($sql) === TRUE) {
        echo "Marketing Application Submitted Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

  
    $file = fopen("marketing.csv", "a");

    if ($file) {
        fputcsv($file, [
            $fullname,  
            $emailaddress,  
            $phonenumber,  
            $YearsofMarketingExperience,  
            $CampaignPortfolioCaseStudyURL,  
            $LinkedInProfileURL,  
            $CoreMarketingCompetencies,  
            $noticeperiod,  
            $expectedCTC,  
            $UploadComprehensiveResume,
            $BrieflyDescribeYourMostSuccessfulMarketingCampaign
        ]);
        fclose($file);
    } 
}

$conn->close();
?>