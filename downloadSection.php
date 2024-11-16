<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Apps</title>
    <style>
        * {
            box-sizing: border-box;
            /* Ensures padding and borders are included in width/height */
        }

        .easier-heading {
            margin-bottom: 20px;
            font-size: 2em;
            color: #333;
            text-align: center;
            /* Center heading */
        }

        .app-container {
            display: flex;
            flex-direction: row;
            /* Stacks items horizontally by default */
            justify-content: center;
            /* Centers items */
            gap: 30px;
            margin: 30px 0;
            padding: 20px;
            /* Add padding around the container */
            background-color: #f9f9f9;
            /* Background color for the container */
        }

        .app-section {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            text-align: left;
            width: 500px;
            /* Fixed width for larger screens */
            height: 198px;
            display: flex;
            align-items: center;
            flex-direction: row;
            /* Keeps items in a row on larger screens */
        }

        .qr-code {
            width: 150px;
            height: 150px;
            margin-right: 15px;
        }

        .arrow {
            width: 25px;
            height: 25px;
            margin-left: auto;
            /* Pushes arrow to the right */
            transition: transform 0.3s;
        }

        .arrow:hover {
            transform: translateX(5px);
        }

        .easier-heading {
            font-size: 36px;
            font-weight: 700;
            line-height: 44px;
        }

        @media (max-width: 768px) {
            .app-container {
                flex-direction: column;
                /* Stack vertically on small screens */
                align-items: center;
                /* Center contents */
            }

            .app-section {
                width: 90%;
                /* Responsive width for smaller screens */
                max-width: 400px;
                /* Limit max width */
                height: auto;
                /* Adjust height */
                flex-direction: column;
                /* Stack vertically for each section */
            }

            .qr-code {
                margin: 0 0 10px 0;
                /* Space below the QR code */
            }

            .arrow {
                display: none;
                /* Hide arrows on mobile */
            }

            .easier-heading {
                font-size: 1.5em;
                /* Adjust heading size for mobile */
            }
        }
    </style>
</head>

<body>
    <h1 class="easier-heading">It's easier in apps</h1>

    <div class="app-container">

        <div class="app-section">
            <img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,h_188,w_188/v1690807720/assets/a5/9986ad-0d9f-4396-8539-389bce97f579/original/Final-Download-Uber-App.png" alt="Uber QR Code" class="qr-code">
            <div style="margin-left: 20px;">
                <h2>Download Uber App</h2>
                <p>Download the Uber app</p>
                <p>Scan to download</p>
            </div>
            <svg aria-hidden="true" focusable="false" class="arrow" fill="currentColor" viewBox="0 0 36 36">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.2354 2H24.2711L36 18L24.2711 34H18.2354L28.1237 20.56H0V15.44H28.1237L18.2354 2Z" fill="currentColor"></path>
            </svg>
        </div>

        <div class="app-section">
            <img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,h_188,w_188/v1690813624/assets/50/e85531-2f7e-4ee7-92d4-e39a6801ee2b/original/QR_https___t.uber.com_download-driver-app.png" alt="Driver QR Code" class="qr-code">
            <div style="margin-left: 20px;">
                <h2>Download Driver App</h2>
                <p>Download the Driver app</p>
                <p>Scan to download</p>
            </div>
            <svg aria-hidden="true" focusable="false" class="arrow" fill="currentColor" viewBox="0 0 36 36">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.2354 2H24.2711L36 18L24.2711 34H18.2354L28.1237 20.56H0V15.44H28.1237L18.2354 2Z" fill="currentColor"></path>
            </svg>
        </div>

    </div>

</body>

</html>