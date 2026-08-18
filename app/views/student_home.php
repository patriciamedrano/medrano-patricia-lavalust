<!DOCTYPE html>
<html>
<head>
    <title>Patricia G. Medrano | Student Hub</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #08111f;
            color: #ffffff;
        }

        .navbar {
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #1c3049;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            color: #5ee7ff;
        }

        .nav-link {
            color: #b9c8da;
            text-decoration: none;
            margin-left: 25px;
        }

        .nav-link:hover {
            color: #5ee7ff;
        }

        .hero {
            width: 85%;
            max-width: 1000px;
            margin: 70px auto 30px;
        }

        .hero small {
            color: #5ee7ff;
            letter-spacing: 2px;
        }

        .hero h1 {
            font-size: 48px;
            margin: 12px 0;
        }

        .hero p {
            color: #91a1b5;
            font-size: 17px;
        }

        .main-card {
            width: 85%;
            max-width: 1000px;
            margin: 30px auto;
            display: grid;
            grid-template-columns: 280px 1fr;
            background: rgba(18, 31, 50, 0.95);
            border: 1px solid #243b59;
            border-radius: 20px;
            overflow: hidden;
        }

        .profile-side {
            background: #10243c;
            padding: 40px 25px;
            text-align: center;
        }

        .avatar {
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #5ee7ff;
            color: #08111f;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 42px;
            font-weight: bold;
            border: 5px solid #23435f;
        }

        .profile-side h2 {
            margin: 10px 0;
        }

        .profile-side p {
            color: #91a1b5;
            margin: 7px 0;
        }

        .student-id {
            margin-top: 25px;
            padding: 12px;
            border-radius: 8px;
            background: #0a1728;
            color: #5ee7ff;
            font-size: 13px;
        }

        .information {
            padding: 40px;
        }

        .information h2 {
            margin-top: 0;
            color: #5ee7ff;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 25px;
        }

        .info-box {
            padding: 18px;
            background: #0b182a;
            border: 1px solid #1f344f;
            border-radius: 10px;
        }

        .info-box span {
            display: block;
            color: #71849c;
            font-size: 12px;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .info-box strong {
            font-size: 15px;
        }

        .email {
            grid-column: 1 / -1;
        }

        .buttons {
            margin-top: 30px;
        }

        .buttons a {
            display: inline-block;
            text-decoration: none;
            padding: 12px 22px;
            border-radius: 8px;
            margin-right: 8px;
        }

        .primary {
            background: #5ee7ff;
            color: #08111f;
        }

        .secondary {
            border: 1px solid #5ee7ff;
            color: #5ee7ff;
        }

        .buttons a:hover {
            opacity: 0.8;
        }

        .footer {
            text-align: center;
            color: #50627a;
            margin: 40px 0;
            font-size: 13px;
        }

        @media (max-width: 750px) {
            .main-card {
                grid-template-columns: 1fr;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .email {
                grid-column: auto;
            }

            .hero h1 {
                font-size: 36px;
            }

            .navbar {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">ACADEMIC PROFILE</div>

        <div>
            <a class="nav-link" href="<?= site_url('student') ?>">Home</a>
            <a class="nav-link" href="<?= site_url('student/profile') ?>">Profile</a>
        </div>
    </nav>

    <section class="hero">
        <small>STUDENT INFORMATION</small>

        <h1>Welcome, Patricia.</h1>

        
    </section>

    <section class="main-card">

        <div class="profile-side">

            <div class="avatar">PM</div>

            <h2><?= $name ?></h2>

            <p><?= $course ?></p>
            <p><?= $year ?></p>
            <p>Section <?= $section ?></p>

            <div class="student-id">
                <?= $student_id ?>
            </div>

        </div>

        <div class="information">

            <h2>Student Details</h2>

            <div class="grid">

                <div class="info-box">
                    <span>Full Name</span>
                    <strong><?= $name ?></strong>
                </div>

                <div class="info-box">
                    <span>Course</span>
                    <strong><?= $course ?></strong>
                </div>

                <div class="info-box">
                    <span>Year Level</span>
                    <strong><?= $year ?></strong>
                </div>

                <div class="info-box">
                    <span>Section</span>
                    <strong><?= $section ?></strong>
                </div>

                <div class="info-box email">
                    <span>Email Address</span>
                    <strong><?= $email ?></strong>
                </div>

            </div>

            <div class="buttons">

                <a class="primary"
                   href="<?= site_url('student/profile') ?>">
                    View Full Profile
                </a>

            </div>

        </div>

    </section>

    <div class="footer">
        Patricia G. Medrano · BS Information Technology
    </div>

</body>
</html>