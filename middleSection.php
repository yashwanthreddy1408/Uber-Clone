<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uber Services</title>
    <style>
        .drive-page .middle-main-page {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        .drive-page .middle-content-wrapper,
        .drive-page .business-content-wrapper,
        .drive-page .fleet-content-wrapper {
            display: flex;
            align-items: center;
            gap: 6rem;
            /* Keep original gap for larger screens */
            max-width: 1200px;
            padding: 3rem;
            margin: 2rem;
            background-color: #ffffff;
            flex-direction: row;
        }

        .drive-page .middle-image-container {
            flex-shrink: 0;
        }

        .drive-page .middle-illustration-image {
            width: 558px;
            height: auto;
            border-radius: 12px;
        }

        .drive-page .middle-text-container {
            max-width: 500px;
            text-align: left;
        }

        .drive-page .middle-main-heading {
            font-size: 52px;
            font-weight: 700;
            line-height: 64px;
            margin: 0;
            font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #000;
        }

        .drive-page .middle-description-text {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
            margin: 1.5rem 0;
            font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .drive-page .middle-action-buttons {
            display: flex;
            justify-content: flex-start;
            gap: 1rem;
            margin-top: 1rem;
            flex-direction: row;
        }

        .drive-page .middle-btn {
            padding: 14px 25px;
            font-size: 16px;
            font-weight: 500;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
            font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
            white-space: nowrap;
        }

        .drive-page .middle-start-btn {
            background-color: #000;
            color: #FFFFFF;
        }

        /* Responsive Styles for Smaller Screens */
        @media (max-width: 768px) {

            .drive-page .middle-content-wrapper,
            .drive-page .business-content-wrapper,
            .drive-page .fleet-content-wrapper {
                flex-direction: column;
                gap: 1rem;
                /* Reduce the gap between items on smaller screens */
                text-align: center;
                margin: 1rem 0;
                /* Adjust margins for spacing */
            }

            .drive-page .middle-action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .drive-page .middle-main-heading {
                font-size: 36px;
                line-height: 44px;
            }

            .drive-page .middle-description-text {
                font-size: 15px;
            }

            .drive-page .middle-btn {
                font-size: 15px;
                padding: 12px 20px;
                width: 100%;
                max-width: 300px;
            }

            .drive-page .middle-illustration-image {
                width: 300px;
                height: auto;
            }
        }
    </style>
</head>

<body class="drive-page">
    <!-- First Section -->
    <div class="middle-main-page">
        <div class="middle-content-wrapper">
            <div class="middle-image-container">
                <img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,h_576,w_576/v1684855112/assets/96/4dd3d1-94e7-481e-b28c-08d59353b9e0/original/earner-illustra.png" alt="Driver Illustration" class="middle-illustration-image">
            </div>
            <div class="middle-text-container">
                <h1 class="middle-main-heading">Drive when you want, make what you need</h1>
                <p class="middle-description-text">Make money on your schedule with deliveries or rides—or both. You can use your own car or choose a rental through Uber.</p>
                <div class="middle-action-buttons">
                    <button class="middle-btn middle-start-btn">Get started</button>
                    <button class="middle-btn middle-login-btn">Already have an account? Sign in</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Section -->
    <div class="middle-main-page">
        <div class="business-content-wrapper">
            <div class="middle-text-container">
                <h1 class="middle-main-heading">The Uber you know, reimagined for business</h1>
                <p class="middle-description-text">Uber for Business is a platform for managing global rides and meals, and local deliveries, for companies of any size.</p>
                <div class="middle-action-buttons">
                    <button class="middle-btn middle-start-btn">Get started</button>
                    <button class="middle-btn middle-login-btn">Check out our solutions</button>
                </div>
            </div>
            <div class="middle-image-container">
                <img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,h_576,w_576/v1684887108/assets/76/baf1ea-385a-408c-846b-59211086196c/original/u4b-square.png" alt="Uber for Business" class="middle-illustration-image">
            </div>
        </div>
    </div>

    <!-- Third Section -->
    <div class="middle-main-page">
        <div class="fleet-content-wrapper">
            <div class="middle-image-container">
                <img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,h_576,w_576/v1696243819/assets/18/34e6fd-33e3-4c95-ad7a-f484a8c812d7/original/fleet-management.jpg" alt="Fleet Management" class="middle-illustration-image">
            </div>
            <div class="middle-text-container">
                <h1 class="middle-main-heading">Make money by renting out your car</h1>
                <p class="middle-description-text">Connect with thousands of drivers and earn more per week with Uber’s free fleet management tools.</p>
                <div class="middle-action-buttons">
                    <button class="middle-btn middle-start-btn">Get started</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>