<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woxsen University Umbrella</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        main {
            position: relative;
        }

        .big-wrapper {
            position: relative;
            overflow: hidden;
        }

        header {
            background-color: #1b1b1b;
            color: white;
            padding: 1em 0;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .logo h3 {
            display: inline;
            font-size: 1.5em;
            vertical-align: middle;
        }

        .links ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: right;
        }

        .links li {
            display: inline;
            margin-left: 20px;
        }

        .links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 1.2em;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1em;
            margin: 20px 0;
            cursor: pointer;
            border-radius: 5px;
        }

        .showcase-area {
            background-color: #fff;
            padding: 40px 0;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        .big-title h1 {
            font-size: 3em;
            margin-bottom: 10px;
            color: #333;
        }

        .form-section {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="datetime-local"],
        input[type="file"],
        input[type="checkbox"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1em;
        }

        input[type="checkbox"] {
            width: auto;
            margin-bottom: 0;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 1.2em;
            cursor: pointer;
            border-radius: 5px;
        }

        .statement p {
            font-size: 1.2em;
        }

        footer {
            background-color: #1b1b1b;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer h1 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .footer p {
            margin: 5px 0;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var ugid = document.getElementById("UgId").value;
            var email = document.getElementById("student_woxsen_mail_id").value;
            var phoneNumber = document.getElementById("students_Phone_number").value;
            var parentPhoneNumber = document.getElementById("parent_Phone_number").value;

            // Check if name and UGID are filled
            if (name === "" || ugid === "") {
                alert("Name and UGID are required fields");
                return false;
            }

            // Validate email format
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!emailPattern.test(email)) {
                alert("Enter a valid email address");
                return false;
            }

            // Validate phone numbers
            var phonePattern = /^\d{10}$/;
            if (!phonePattern.test(phoneNumber) || !phonePattern.test(parentPhoneNumber)) {
                alert("Enter valid 10-digit phone numbers");
                return false;
            }

            // Check if the agreement checkbox is checked
            var agreeCheckbox = document.getElementById("agree");
            if (!agreeCheckbox.checked) {
                alert("Please agree to the terms and conditions");
                return false;
            }

            return true;
        }


    </script>
</head>
<body>
    <main>
        <!--<div class="big-wrapper light">
            <img src="./img/shape.png" alt="woxsen university" class="shape" />
    -->
            <header>
                <div class="container">
                    <div class="logo">
                        <img src="Woxsen_University_Logo-removebg-preview.png" alt="Woxsen University Logo" />
                        <h3>Hang & Chill WeekEnd</h3>
                    </div>

                    <div class="links">
                        <ul>
                            <li><a href="html.html">Home</a></li>
                            <li><a href="campus_rules.html">Campus Rule</a></li>
                            <li><a href="#">Refer</a></li>
                            <li><a href="fill a form.php" class="btn">Fill Outing Form</a></li>
                        </ul>
                    </div>
                </div>
            </header>

            <div class="showcase-area">
                <div class="container">
                    <div class="left">
                        <div class="big-title">
                            <h1>Fill the Form,</h1>
                            <h1>Let's Start.</h1>
                        </div>

                        <div class="form-section">
                            <div class="text">
                                <?php include 'submit.php'; ?>
                                <form action="#" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                                    <label for="name">Name:</label>
                                    <input type="text" placeholder="Enter your Name" id="name" name="name" required>
                                    <label for="UgId">UGID:</label>
                                    <input type="text" placeholder="Enter Your UGID" id="UgId" name="ugid" required><br>
                                    <label for="Course">Course:</label>
                                    <input type="text" placeholder="Enter Your Course" id="Course" name="Course"><br>
                                    <label for="Batch">Batch:</label>
                                    <input type="text" placeholder="Batch" id="Batch" name="Batch"><br>
                                    <label for="specialization">Specialization:</label>
                                    <input type="text" placeholder="Specialization" id="specialization" name="specialization"><br>
                                    <label for="students_Phone_number">Student Phone Number:</label>
                                    <input type="tel" id="students_Phone_number" placeholder="Student Phone Number" name="student_Phone_number"><br>
                                    <label for="student_woxsen_mail_id">Student Woxsen Mail ID:</label>
                                    <input type="email" id="student_woxsen_mail_id" placeholder="Student Woxsen Mail ID" name="student_woxsen_mail_id" required><br>
                                    <label for="parent_Phone_number">Parent Phone Number:</label>
                                    <input type="tel" id="parent_Phone_number" placeholder="Parent Phone Number" name="parent_Phone_number"><br>
                                    <label for="parent_woxsen_mail_id">Parent Woxsen Mail ID:</label>
                                    <input type="email" id="parent_woxsen_mail_id" placeholder="Parent Woxsen Mail ID" name="parent_woxsen_mail_id" required><br>
                                    <label for="student_woxsen_RFID_ID">Student Woxsen RFID ID:</label>
                                    <input type="text" id="student_woxsen_RFID_ID" placeholder="Student Woxsen RFID ID" name="student_woxsen_RFID_ID"><br>
                                    <label for="student_Image">Student Image:</label>
                                    <input type="file" id="student_Image" name="student_Image"><br>
                                    <label for="date">Date and Time of Leaving:</label>
                                    <input type="datetime-local" id="date" name="date" required><br>
                                    <label for="letter_Image">Letter Image:</label>
                                    <input type="file" id="letter_Image" name="letter_Image"><br>

                                    <!-- Submit button and agreement checkbox -->
                                    <label for="agree" class="checkbox-label">
                                        <input type="checkbox" id="agree" name="agree" required>
                                        <span>I agree to the terms and conditions.</span>
                                    </label><br>

                                    <div class="btn">
                                        <button type="submit" class="submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="statement">
                            <p>I agree that the above details are correct. If any wrong data is entered, as per campus rules, take disciplinary action against me.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer">
            <h1>Contact us:<br></h1>
            CSO campus:<br>
            Bridge:<br>
            Emergency:<br>
            &copy; <?php echo date("Y"); ?> Woxsen University Umbrella. All rights reserved.
        </div>
    </footer>
</body>
</html>
