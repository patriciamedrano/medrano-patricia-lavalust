```php
<!DOCTYPE html>
<html>

<head>
    <title>Academic Space | Home</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #08111f;
            color: white;
            display: flex;
            flex-direction: column;
        }

        /* NAVBAR */
        .navbar {
            padding: 22px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #243852;
        }

        .logo {
            color: #5ee7ff;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .navbar a {
            color: #b9c8da;
            text-decoration: none;
            margin-left: 25px;
            font-size: 15px;
        }

        .navbar a:hover {
            color: #5ee7ff;
        }

        /* HOME */
        .home {
            flex: 1;
            width: 90%;
            max-width: 950px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
        }

        .welcome-box {
            width: 100%;
            background: #111c2f;
            border: 1px solid #263d5a;
            border-radius: 24px;
            padding: 70px 50px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .welcome-box::before {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: #102f49;
            top: -100px;
            left: -80px;
        }

        .welcome-box::after {
            content: "";
            position: absolute;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: #0d2940;
            bottom: -150px;
            right: -100px;
        }

        .icon {
            width: 85px;
            height: 85px;
            margin: 0 auto 30px;
            border-radius: 50%;
            background: #5ee7ff;
            color: #08111f;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            font-weight: bold;
            position: relative;
            z-index: 1;
        }

        .welcome-box small {
            color: #5ee7ff;
            letter-spacing: 3px;
            font-size: 12px;
            position: relative;
            z-index: 1;
        }

        .welcome-box h1 {
            font-size: 48px;
            margin: 18px 0;
            position: relative;
            z-index: 1;
        }

        .welcome-box h1 span {
            color: #5ee7ff;
        }

        .welcome-box p {
            color: #91a1b5;
            font-size: 17px;
            line-height: 1.7;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .profile-button {
            display: inline-block;
            margin-top: 35px;
            padding: 14px 30px;
            border-radius: 10px;
            background: #5ee7ff;
            color: #08111f;
            text-decoration: none;
            font-weight: bold;
            position: relative;
            z-index: 1;
        }

        .profile-button:hover {
            opacity: 0.8;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 22px;
            border-top: 1px solid #1c3049;
            color: #50627a;
            font-size: 13px;
        }

        /* MOBILE */
        @media (max-width: 650px) {

            .navbar {
                padding: 20px;
            }

            .logo {
                font-size: 17px;
            }

            .navbar a {
                margin-left: 12px;
                font-size: 14px;
            }

            .home {
                width: 92%;
                padding: 40px 0;
            }

            .welcome-box {
                padding: 55px 25px;
                min-height: 500px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .icon {
                width: 90px;
                height: 90px;
                font-size: 40px;
            }

            .welcome-box h1 {
                font-size: 38px;
                line-height: 1.2;
            }

            .welcome-box p {
                font-size: 16px;
            }

            .profile-button {
                width: 100%;
                padding: 16px;
            }

            .footer {
                padding: 20px;
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
            <a href="<?= site_url('student') ?>">
                Home
            </a>

            <a href="<?= site_url('student/profile') ?>">
                Profile
            </a>
        </div>

    </nav>


    <main class="home">

        <div class="welcome-box">

            <div class="icon">
                ✦
            </div>

            <small>WELCOME</small>

            <h1>
                Welcome to <span> the Student Portal</span>
            </h1>

            <p>
                A simple space where you can explore
                my academic profile and personal information.
            </p>

            <a class="profile-button"
               href="<?= site_url('student/profile') ?>">
                Explore My Profile 
            </a>

        </div>

    </main>


    <footer class="footer">
        Academic Space · Student Portal
    </footer>

</body>

</html>
```
