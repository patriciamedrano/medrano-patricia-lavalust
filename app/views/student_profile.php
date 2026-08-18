<!DOCTYPE html>
<html>
<head>
    <title>My Academic Space | Profile</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #08111f;
            color: white;
        }

        .navbar {
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #243852;
        }

        .logo {
            color: #5ee7ff;
            font-size: 20px;
            font-weight: bold;
        }

        .navbar a {
            color: #b9c8da;
            text-decoration: none;
            margin-left: 20px;
        }

        .navbar a:hover {
            color: #5ee7ff;
        }

        .container {
            width: 85%;
            max-width: 850px;
            margin: 55px auto;
        }

        .heading {
            margin-bottom: 30px;
        }

        .heading small {
            color: #5ee7ff;
            letter-spacing: 2px;
        }

        .heading h1 {
            font-size: 42px;
            margin: 10px 0;
        }

        .heading p {
            color: #91a1b5;
        }

        .profile-card {
            background: #111c2f;
            border: 1px solid #243852;
            border-radius: 18px;
            padding: 35px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 25px;
            padding-bottom: 30px;
            border-bottom: 1px solid #263a58;
        }

        .avatar {
            width: 95px;
            height: 95px;
            border-radius: 50%;
            background: #5ee7ff;
            color: #08111f;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
            font-weight: bold;
        }

        .profile-header h2 {
            margin: 0 0 8px;
        }

        .profile-header p {
            margin: 5px 0;
            color: #91a1b5;
        }

        .details {
            margin-top: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .detail {
            background: #0b182a;
            border: 1px solid #1f344f;
            border-radius: 10px;
            padding: 18px;
        }

        .detail span {
            display: block;
            color: #71849c;
            font-size: 12px;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .detail strong {
            font-size: 15px;
        }

        .email {
            grid-column: 1 / -1;
        }

        .back {
            margin-top: 30px;
        }

        .back a {
            display: inline-block;
            padding: 12px 22px;
            border: 1px solid #5ee7ff;
            color: #5ee7ff;
            text-decoration: none;
            border-radius: 8px;
        }

        .back a:hover {
            background: #5ee7ff;
            color: #08111f;
        }

        @media (max-width: 650px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }

            .details {
                grid-template-columns: 1fr;
            }

            .email {
                grid-column: auto;
            }

            .heading h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            MY ACADEMIC SPACE
        </div>

        <div>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Profile</a>
        </div>

    </nav>

    <div class="container">

        <div class="heading">
            <small>MY PROFILE</small>

            <h1>Student Information</h1>

            <p>
                Personal information and academic details.
            </p>
        </div>

        <div class="profile-card">

            <div class="profile-header">

                <div class="avatar">
                    PM
                </div>

                <div>
                    <h2><?= $name ?></h2>

                    <p><?= $course ?></p>

                    <p><?= $year ?> · Section <?= $section ?></p>
                </div>

            </div>

            <div class="details">

                <div class="detail">
                    <span>Student ID</span>
                    <strong><?= $student_id ?></strong>
                </div>

                <div class="detail">
                    <span>Full Name</span>
                    <strong><?= $name ?></strong>
                </div>

                <div class="detail">
                    <span>Course</span>
                    <strong><?= $course ?></strong>
                </div>

                <div class="detail">
                    <span>Year Level</span>
                    <strong><?= $year ?></strong>
                </div>

                <div class="detail">
                    <span>Section</span>
                    <strong><?= $section ?></strong>
                </div>

                <div class="detail email">
                    <span>Email Address</span>
                    <strong><?= $email ?></strong>
                </div>

            </div>

            <div class="back">

                <a href="<?= site_url('student') ?>">
                    Back to Home
                </a>

            </div>

        </div>

    </div>

</body>
</html>