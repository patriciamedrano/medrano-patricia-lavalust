<!DOCTYPE html>
<html>

<head>
    <title>Patricia G. Medrano | Academic Profile</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            padding: 25px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #243852;
        }

        .logo {
            color: #5ee7ff;
            font-size: 22px;
            font-weight: bold;
        }

        .nav-link {
            color: #b9c8da;
            text-decoration: none;
            margin-left: 25px;
            font-size: 16px;
        }

        .nav-link:hover {
            color: #5ee7ff;
        }

        .hero {
            width: 86%;
            max-width: 1000px;
            margin: 75px auto 40px;
        }

        .hero small {
            color: #5ee7ff;
            letter-spacing: 3px;
            font-size: 13px;
        }

        .hero h1 {
            font-size: 52px;
            margin: 15px 0;
        }

        .hero p {
            color: #91a1b5;
            font-size: 18px;
            line-height: 1.7;
            max-width: 700px;
        }

        .main-card {
            width: 86%;
            max-width: 1000px;
            margin: 0 auto 60px;
            display: grid;
            grid-template-columns: 300px 1fr;
            background: #111c2f;
            border: 1px solid #243b59;
            border-radius: 24px;
            overflow: hidden;
        }

        .profile-side {
            background: #10243c;
            padding: 55px 30px;
            text-align: center;
        }

        .avatar {
            width: 150px;
            height: 150px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: #5ee7ff;
            color: #08111f;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 48px;
            font-weight: bold;
            border: 6px solid #23435f;
        }

        .profile-side h2 {
            font-size: 25px;
            margin: 15px 0;
        }

        .profile-side p {
            color: #91a1b5;
            font-size: 16px;
            margin: 10px 0;
        }

        .student-id {
            margin-top: 30px;
            padding: 15px;
            border-radius: 10px;
            background: #0a1728;
            color: #5ee7ff;
            font-size: 14px;
        }

        .information {
            padding: 50px;
        }

        .information h2 {
            margin-top: 0;
            color: #5ee7ff;
            font-size: 28px;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            margin-top: 30px;
        }

        .info-box {
            padding: 23px;
            background: #0b182a;
            border: 1px solid #1f344f;
            border-radius: 14px;
            min-height: 95px;
        }

        .info-box span {
            display: block;
            color: #71849c;
            font-size: 12px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-box strong {
            font-size: 16px;
            line-height: 1.5;
            word-break: break-word;
        }

        .full {
            grid-column: 1 / -1;
        }

        .buttons {
            margin-top: 35px;
        }

        .primary {
            display: block;
            text-align: center;
            text-decoration: none;
            padding: 17px;
            border-radius: 10px;
            background: #5ee7ff;
            color: #08111f;
            font-weight: bold;
            font-size: 16px;
        }

        .primary:hover {
            opacity: 0.8;
        }

        .footer {
            text-align: center;
            color: #50627a;
            margin: 50px 20px;
            font-size: 14px;
        }


        /* MOBILE DESIGN */

        @media (max-width: 750px) {

            body {
                min-width: 0;
            }

            .navbar {
                padding: 22px 20px;
            }

            .logo {
                font-size: 18px;
            }

            .nav-link {
                margin-left: 12px;
                font-size: 14px;
            }

            .hero {
                width: 90%;
                margin: 55px auto 35px;
            }

            .hero small {
                font-size: 12px;
                letter-spacing: 2px;
            }

            .hero h1 {
                font-size: 40px;
                line-height: 1.2;
                margin: 15px 0;
            }

            .hero p {
                font-size: 16px;
                line-height: 1.7;
            }

            .main-card {
                width: 90%;
                display: block;
                margin-bottom: 70px;
                border-radius: 22px;
            }

            .profile-side {
                padding: 55px 25px;
            }

            .avatar {
                width: 170px;
                height: 170px;
                font-size: 52px;
                margin-bottom: 30px;
            }

            .profile-side h2 {
                font-size: 28px;
            }

            .profile-side p {
                font-size: 17px;
            }

            .student-id {
                font-size: 15px;
                padding: 17px;
                margin-top: 30px;
            }

            .information {
                padding: 35px 22px 40px;
            }

            .information h2 {
                font-size: 27px;
                margin-bottom: 25px;
            }

            .grid {
                display: block;
                margin-top: 0;
            }

            .info-box {
                width: 100%;
                min-height: 110px;
                margin-bottom: 16px;
                padding: 24px 20px;
                border-radius: 14px;
            }

            .info-box span {
                font-size: 12px;
                margin-bottom: 12px;
            }

            .info-box strong {
                font-size: 17px;
                line-height: 1.6;
            }

            .full {
                grid-column: auto;
            }

            .buttons {
                margin-top: 30px;
            }

            .primary {
                padding: 18px;
                font-size: 17px;
            }

            .footer {
                margin: 60px 20px;
                line-height: 1.6;
            }
        }


        /* EXTRA SMALL PHONE */

        @media (max-width: 400px) {

            .navbar {
                padding: 20px 15px;
            }

            .logo {
                font-size: 16px;
            }

            .nav-link {
                font-size: 13px;
                margin-left: 8px;
            }

            .hero {
                width: 92%;
                margin-top: 45px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .main-card {
                width: 92%;
            }

            .avatar {
                width: 150px;
                height: 150px;
            }

            .information {
                padding: 30px 18px;
            }

            .info-box {
                padding: 22px 18px;
            }

            .info-box strong {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            ACADEMIC PROFILE
        </div>

        <div>
            <a class="nav-link" href="<?= site_url('student') ?>">
                Home
            </a>

            <a class="nav-link" href="<?= site_url('student/profile') ?>">
                Profile
            </a>
        </div>

    </nav>


    <section class="hero">

        <small>STUDENT INFORMATION</small>

        <h1>Welcome, Patricia.</h1>

        <p>
            Welcome to my academic profile and student information page.
        </p>

    </section>


    <section class="main-card">


        <div class="profile-side">

            <div class="avatar">
                PM
            </div>

            <h2><?= $name ?></h2>

            <p><?= $course ?></p>

            <p><?= $year ?></p>

            <p>Section <?= $section ?></p>

            <div class="student-id">
                Student ID<br><br>
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


                <div class="info-box">
                    <span>School</span>
                    <strong><?= $school ?></strong>
                </div>


                <div class="info-box">
                    <span>Hobbies</span>
                    <strong><?= $hobbies ?></strong>
                </div>


                <div class="info-box full">
                    <span>Address</span>
                    <strong><?= $address ?></strong>
                </div>


                <div class="info-box full">
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
```
