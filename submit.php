<?php
$servername = "localhost";
$username = "root";
$password = ""; // Change this if you have set a password for your database
$dbname = "outing_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $ugid = $_POST["ugid"];
    $course = $_POST["Course"];
    $batch = $_POST["Batch"];
    $specialization = $_POST["specialization"];
    $student_phone_number = $_POST["student_Phone_number"];
    $student_woxsen_mail_id = $_POST["student_woxsen_mail_id"];
    $parent_phone_number = $_POST["parent_Phone_number"];
    $parent_woxsen_mail_id = $_POST["parent_woxsen_mail_id"];
    $student_woxsen_rfid_id = $_POST["student_woxsen_RFID_ID"];
    $date = $_POST["date"];

    // Server-side validation
    if (empty($name) || empty($ugid)) {
        echo "Name and UGID are required fields";
        exit();
    }

    // Handle file uploads
    $student_image = $_FILES["student_Image"]["name"];
    $letter_image = $_FILES["letter_Image"]["name"];
    $upload_dir = "C:\Users\suren\Downloads"; // Specify your upload directory

    move_uploaded_file($_FILES["student_Image"]["tmp_name"], $upload_dir . $student_image);
    move_uploaded_file($_FILES["letter_Image"]["tmp_name"], $upload_dir . $letter_image);

    $sql = "INSERT INTO outing_form_data (name, ugid, course, batch, specialization, student_phone_number, student_woxsen_mail_id, parent_phone_number, parent_woxsen_mail_id, student_woxsen_rfid_id, date_time_leaving, student_image, letter_image, agreed_terms) VALUES ('$name', '$ugid', '$course', '$batch', '$specialization', '$student_phone_number', '$student_woxsen_mail_id', '$parent_phone_number', '$parent_woxsen_mail_id', '$student_woxsen_rfid_id', '$date', '$student_image', '$letter_image', 1)";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
