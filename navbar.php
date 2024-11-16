<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uber Navbar</title>
    <style>
        body {
            margin: 0;
            font-family: 'UberMoveText', system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .header {
            box-sizing: border-box;
            display: flex;
            align-items: center;
            background-color: black;
            color: white;
            width: 100%;
            /* Full width of the viewport */
            height: 65px;
            /* Set height of the navbar */
            padding-left: 64px;
            padding-right: 64px;
        }

        .left-section {
            display: flex;
            align-items: center;
            height: 100%;
            /* Ensure left section fits the navbar height */
            margin-right: 20px;
            /* Move left section to the right */
        }

        .left-section h1 {
            margin-right: 32px;
            /* Space between logo and links */
            font-weight: normal;
            /* Make the logo non-bold */
            font-size: 24px;
            /* Logo font size */
            color: white;
            /* Ensure logo is white */
            line-height: 65px;
            margin-top: 20px;
            /* Center the logo vertically */
        }

        .nav-links {
            display: flex;
            gap: 20px;
            margin-left: 40px;
            /* Space between links */
        }

        .nav-links a {
            color: white;
            /* Set anchor tags to white */
            text-decoration: none;
            /* Remove underline */
            line-height: 65px;
            /* Center links vertically */
        }

        .nav-links a:hover {
            text-decoration: underline;
            /* Optional: underline on hover */
        }

        .right-section {
            margin-left: auto;
            /* Pushes it to the right */
            display: flex;
            align-items: center;
            height: 100%;
            /* Ensure right section fits the navbar height */
            gap: 20px;

            /* Space between items */
        }

        .right-section a {
            color: white;
            /* Ensure anchor tags are white */
            text-decoration: none;
            /* Remove underline */
        }

        .signup {
            color: black;
            /* Sign Up button text color */
            display: inline-flex;
            /* Inline-flex display */
            flex-direction: row;
            /* Row direction */
            align-items: center;
            /* Center items vertically */
            justify-content: center;
            /* Center items horizontally */
            border-width: 0px;
            /* No border */
            border-radius: 30px;
            /* Rounded corners */
            padding: 10px 12px;
            /* Padding */
            background-color: rgb(255, 255, 255);
            /* Background color */
            text-decoration: none;
            /* Remove underline */
            white-space: nowrap;
            /* Prevent line break */
        }

        /* Media query for mobile and tablet screens */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                /* Hide navigation links */
            }

            .left-section {
                margin-right: auto;
                /* Ensure the left section stays on the left */
            }

            .right-section {
                gap: 10px;
                /* Reduce gap for smaller screens */
                margin-left: auto;
                /* Keep right section on the far right */
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="left-section">
            <h1>Uber</h1>
            <nav class="nav-links">
                <a href="#">Ride</a>
                <a href="#">Drive</a>
                <a href="#">Business</a>
                <a href="#">About</a>
            </nav>
        </div>
        <div class="right-section">
            <a href="#">Login</a>
            <a href="#" class="signup" style="color:black;">Sign Up</a>
        </div>
    </header>
</body>

</html>