<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        input[type="text"],
        input[type="email"],
        input[type="phone"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .continue-button {
            background-color: black;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .continue-button:hover {
            background-color: #444;
        }

        .or {
            margin: 20px 0;
            font-weight: bold;
        }

        .social-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
            margin: 5px 0;
            width: 100%;
        }

        .social-button img {
            width: 20px;
            margin-right: 10px;
        }

        .footer-text {
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }

        @media (max-width: 500px) {
            h1 {
                font-size: 20px;
            }

            .continue-button,
            .social-button {
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h1>What's your phone number or email?</h1>
        <div class="input-group">
            <input type="text" placeholder="Enter phone number or email" required>
        </div>
        <button class="continue-button">Continue</button>
        <div class="or">or</div>
        <div class="social-button" style="background-color: #4285F4; color: white;">
            <svg width="18" height="18" viewBox="0 0 256 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                <path d="M255.9 133.5c0-10.8-.9-18.6-2.8-26.7H130.6v48.4h71.9a63.8 63.8 0 01-26.7 42.4l-.2 1.6 38.7 30 2.7.3c24.7-22.8 38.9-56.3 38.9-96" fill="#4285F4"></path>
                <path d="M130.6 261.1c35.2 0 64.8-11.6 86.4-31.6l-41.2-32c-11 7.8-25.8 13.1-45.2 13.1a78.6 78.6 0 01-74.3-54.2l-1.5.1-40.3 31.2-.6 1.5C35.4 231.8 79.5 261 130.6 261" fill="#34A853"></path>
                <path d="M56.3 156.4a80.4 80.4 0 01-.2-51.7V103L15.3 71.3l-1.4.6a130.7 130.7 0 000 117.3l42.4-32.8" fill="#FBBC05"></path>
                <path d="M130.6 50.5c24.5 0 41 10.6 50.4 19.4L218 34C195.2 13 165.8 0 130.6 0 79.5 0 35.4 29.3 13.9 72l42.2 32.7a79 79 0 0174.4-54.2" fill="#EB4335"></path>
            </svg>
            Continue with Google
        </div>
        <div class="social-button" style="background-color: #000; color: white;">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="#000000">
                <g transform="matrix(1 0 0 1 3 1)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2676 3.23104C11.9166 2.39314 12.4087 1.20886 12.2307 0C11.1698 0.0737252 9.92984 0.752465 9.2063 1.63717C8.54675 2.43878 8.00468 3.63126 8.21639 4.78863C9.37613 4.8249 10.5731 4.12978 11.2676 3.23104ZM17 14.6022C16.5359 15.6367 16.3125 16.099 15.7146 17.0153C14.8806 18.2943 13.7046 19.887 12.2459 19.8987C10.9512 19.9128 10.6173 19.0503 8.85967 19.0608C7.10203 19.0702 6.73561 19.9151 5.4386 19.9022C3.98106 19.8894 2.86668 18.4523 2.03264 17.1732C-0.300809 13.5993 -0.546251 9.404 0.892672 7.17235C1.91632 5.58785 3.53089 4.66101 5.04775 4.66101C6.59136 4.66101 7.56267 5.51295 8.84106 5.51295C10.0811 5.51295 10.836 4.65867 12.6216 4.65867C13.9733 4.65867 15.4052 5.39944 16.4242 6.67734C13.0834 8.5193 13.6243 13.3185 17 14.6022Z" fill="#000000" opacity="1"></path>
                </g>
            </svg>
            Continue with Apple
        </div>
        <p class="footer-text">By proceeding, you consent to get calls, WhatsApp or SMS/RCS messages, including by automated means, from Uber and its affiliates to the number provided.</p>
    </div>

</body>

</html>