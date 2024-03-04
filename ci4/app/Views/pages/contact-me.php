        <?php
        #require_once 'contact-form.php';

        // Define variables and initialize with empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = $phoneErr = $commentErr = "";
        $name = $email = $gender = $comment = $website = $phone = "";
        $userFeedback = "";

        // Function for sanitizing input
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        // Processing form data when form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate name
            if (empty(trim($_POST["name"]))) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $nameErr = "Only English alphabet letters are allowed";
                }
            }

            // Validate email
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (!empty(trim($_POST["phone"]))) {
                $phone = test_input($_POST["phone"]);
                if (!preg_match("/^[0-9]{11}$/", $phone)) {
                    $phoneErr = "Invalid phone number format";
                }
            }
            
            // Validate website
            if (empty(trim($_POST["website"]))) {
                $websiteErr = "Please enter your website.";
            } else {
                $website = test_input($_POST["website"]);
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                    $websiteErr = "Invalid URL";
                }
            }

            // Validate gender
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }

            // Validate comment
            if (empty(trim($_POST["comment"]))) {
                $commentErr = "Please enter a comment.";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($websiteErr) && empty($genderErr) && empty($commentErr)) {
                $sql = "INSERT INTO myguests (full_name, email_address, phone_number, website, gender, comment) VALUES (?, ?, ?, ?, ?, ?)";

                if ($stmt = $conn->prepare($sql)) {
                    $stmt->bind_param("ssssss", $param_name, $param_email, $param_phone, $param_website, $param_gender, $param_comment);

                    $param_name = $name;
                    $param_email = $email;
                    $param_phone = $phone;
                    $param_website = $website;
                    $param_gender = $gender;
                    $param_comment = $comment;
                
                    if ($stmt->execute()) {
                        $_SESSION['message'] = "Record added successfully.";
                        header("Location: " . base_url('pages/contact-me.php'));
                        exit;
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Closing the statement
                    $stmt->close();
                }
            }

            // Closing the connection
            $conn->close();
        }
        ?>

        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>" />
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
                <link rel="icon" href="<?php echo base_url('images/maximus.png'); ?>" type="image/x-icon">
                <title>Ronaldolicious</title>
                <style>
                </style>
            </head>
            <body>

        <!-- Contact Me Section -->
        <section id="contact">
            <div class="section-content">
                <div class="age-calculator-form">
                    <h2 class="form-title">PHP Form Validation</h2>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" name="name" value="<?php echo $name;?>" class="styled-input" placeholder="Full Name (Required)">
                            <span class="error"><?php echo $nameErr;?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" value="<?php echo $email;?>" class="styled-input" placeholder="E-mail Address (Required)">
                            <span class="error"><?php echo $emailErr;?></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="tel" name="phone" value="<?php echo $phone;?>" class="style-input" placeholder="Phone Number (Optional)">
                            <small class="format-example">Example: 09123456789<br></small>
                            <span class="error"><?php echo $phoneErr;?></span>
                        </div>

                        <div class="form-group">
                            <input type="text" name="website" value="<?php echo $website;?>" class="styled-input" placeholder="Your Website (Required)">
                            <small class="format-example">Example: http:// or https://<br></small>
                                <span class="error"><?php echo $websiteErr;?></span>
                            </div>
                    </div>

            <div class="gender-section">
            <div class="gender-options">
            <p>Gender:</p>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
                <span class="error">* <?php echo $genderErr;?></span>
            </div>
            <div class="comments-section">
            <textarea name="comment" rows="5" cols="40" class="styled-input" placeholder="Comment (Required)"><?php echo $comment;?></textarea>
            <span class="error"><?php echo $commentErr;?></span>
            </div>
            <br>
        </div>
            <input type="submit" name="submit" value="Submit" onclick="buttonClickAnimation(this);">
        </form>

        </div>
        </div>
        <p class="feedback-prompt reveal-animation">Do you like my personal website so far?<br></p>
        <div class="like-button-container reveal-animation">
            <i class='fa-regular fa-thumbs-up' id="like-button"></i>
            <p id="like-count">Total Likes:</p>
        </div>
        <p id="suggestions" class="reveal-animation">
            If you have any further <strong>suggestions</strong> on how to improve my website, or if you’re interested in<br>
            <em>collaborating</em>, availing my services, or have any other questions, please don't hesitate to reach me out directly at<br>
            <strong>ronaldobernasor2@gmail.com</strong>. I'm always excited to connect and look forward to hearing from you!
        </p>
        </section>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <head>
                <script src="https://kit.fontawesome.com/732c08c56d.js" crossorigin="anonymous"></script>
            </head>
            <script src="<?php echo base_url('js/contact-me.js'); ?>"></script>
            <script src="<?php echo base_url('js/resourcesManager.js'); ?>"></script>
        <script>
        function buttonClickAnimation(button) {
            button.style.opacity = "1";
            setTimeout(function() {
                button.style.opacity = "1";
            }, 150);
        }
        </script>
            </body>
