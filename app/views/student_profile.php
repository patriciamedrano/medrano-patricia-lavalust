<!DOCTYPE html>
<html>

<head>
    <title>My Academic Space | Profile</title>

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
            min-height: 75px;
            padding: 20px 7%;
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

        .navbar a {
            color: #b9c8da;
            text-decoration: none;
            margin-left: 25px;
            font-size: 16px;
        }

        .navbar a:hover {
            color: #5ee7ff;
        }

        .container {
            width: 88%;
            max-width: 950px;
            margin: 65px auto;
        }

        .heading {
            margin-bottom: 35px;
        }

        .heading small {
            color: #5ee7ff;
            letter-spacing: 3px;
            font-size: 14px;
        }

        .heading h1 {
            font-size: 48px;
            margin: 12px 0;
        }

        .heading p {
            color: #91a1b5;
            font-size: 18px;
        }

        .profile-card {
            background: #111c2f;
            border: 1px solid #243852;
            border-radius: 22px;
            padding: 45px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 30px;
            padding-bottom: 35px;
            border-bottom: 1px solid #263a58;
        }

        .avatar {
            width: 120px;
            height: 120px;
            min-width: 120px;
            border-radius: 50%;
            background: #5ee7ff;
            color: #08111f;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            font-weight: bold;
            border: 5px solid #23435f;
        }

        .profile-header h2 {
            margin: 0 0 10px;
            font-size: 30px;
        }

        .profile-header p {
            margin: 7px 0;
            color: #91a1b5;
            font-size: 18px;
        }

        .details {
            margin-top: 35px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .detail {
            min-height: 105px;
            background: #0b182a;
            border: 1px solid #1f344f;
            border-radius: 14px;
            padding: 22px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .detail span {
            display: block;
            color: #71849c;
            font-size: 13px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .detail strong {
            font-size: 18px;
            line-height: 1.5;
            word-break: break-word;
        }

        .full {
            grid-column: 1 / -1;
        }

        .back {
            margin-top: 35px;
        }

        .back a {
            display: block;
            width: 100%;
            text-align: center;
            padding: 16px 22px;
            border: 1px solid #5ee7ff;
            color: #5ee7ff;
            text-decoration: none;
            border-radius: 10px;
            font-size: 17px;
        }

        .back a:hover {
            background: #5ee7ff;
            color: #08111f;
        }

        /* MOBILE */
        @media (max-width: 650px) {

            body {
                min-width: 320px;
            }

            .navbar {
                padding: 22px 20px;
                min-height: 90px;
            }

            .logo {
                font-size: 18px;
            }

            .navbar a {
                margin-left: 12px;
                font-size: 15px;
            }

            .container {
                width: 92%;
                margin: 45px auto 70px;
            }

            .heading {
                margin-bottom: 30px;
            }

            .heading small {
                font-size: 12px;
            }

            .heading h1 {
                font-size: 38px;
                line-height: 1.15;
            }

            .heading p {
                font-size: 16px;
                line-height: 1.6;
            }

            .profile-card {
                padding: 30px 20px;
                border-radius: 20px;
            }

            .profile-header {
                flex-direction: column;
                text-align: center;
                gap: 20px;
                padding-bottom: 35px;
            }

            .avatar {
                width: 140px;
                height: 140px;
                min-width: 140px;
                font-size: 45px;
            }

            .profile-header h2 {
                font-size: 28px;
                line-height: 1.3;
            }

            .profile-header p {
                font-size: 17px;
                line-height: 1.5;
            }

            .details {
                grid-template-columns: 1fr;
                gap: 16px;
                margin-top: 30px;
            }

            .detail {
                min-height: 115px;
                padding: 23px;
            }

            .detail span {
                font-size: 12px;
            }

            .detail strong {
                font-size: 18px;
            }

            .full {
                grid-column: auto;
            }

            .back {
                margin-top: 30px;
            }

            .back a {
                padding: 17px;
                font-size: 17px;
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

                <div class="detail">
                    <span>School</span>
                    <strong><?= $school ?></strong>
                </div>

                <div class="detail full">
                    <span>Address</span>
                    <strong><?= $address ?></strong>
                </div>

                <div class="detail">
                    <span>Hobbies</span>
                    <strong><?= $hobbies ?></strong>
                </div>

                <div class="detail">
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
```
