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

    $fullname           = $_POST['fullname'];
    $emailaddress       = $_POST['email'];
    $phonenumber        = $_POST['phone'];
    $yearsofexperience  = $_POST['experience'];
    $portfolioURL       = $_POST['portfolio'];
    $githubprofile      = $_POST['github'];
    $noticeperiod       = $_POST['notice_period'];
    $expectedCTC        = $_POST['expected_ctc'];
    $additionaloverview = $_POST['cover_letter'];

    $corecorecompetencies = "None Selected";
    if (isset($_POST['skills']) && is_array($_POST['skills'])) {
        $corecorecompetencies = implode(", ", $_POST['skills']);
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

    // 🔑 FIX: Yahan se `position` aur 'Frontend Developer' hata diya hai
    $sql = "INSERT INTO `careers`
    (`fullname`, `emailaddress`, `phonenumber`, `yearsofexperience`, `portfolioURL`, `githubprofile`, `corecorecompetencies`, `noticeperiod`, `expectedCTC`, `UploadComprehensiveResume`, `AdditionalProfessionalOverview`)
    VALUES
    ('$fullname', '$emailaddress', '$phonenumber', '$yearsofexperience', '$portfolioURL', '$githubprofile', '$corecorecompetencies', '$noticeperiod', '$expectedCTC', '$UploadComprehensiveResume', '$additionaloverview')";

    if ($conn->query($sql) === TRUE) {
        echo "Frontend Application Submitted Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $file = fopen("data.csv", "a");

    if ($file) {
        fputcsv($file, [
            $fullname,  
            $emailaddress,  
            $phonenumber,  
            $yearsofexperience,  
            $portfolioURL,  
            $githubprofile,  
            $corecorecompetencies,  
            $noticeperiod,  
            $expectedCTC,  
            $UploadComprehensiveResume,
            $additionaloverview
        ]);
        fclose($file);
    } 
    
    $conn->close();

}
?>