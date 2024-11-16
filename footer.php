<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <style>
        .footer {
            margin: 0;
            font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
            background-color: #000;
            color: #fff;
        }

        .footer-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 20px;
            background-color: #000;
        }

        .footer-help-center {
            font-size: 18px;
            color: #fff;
            margin-bottom: 40px;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            width: 100%;
            max-width: 1200px;
            padding-bottom: 40px;
            border-bottom: 1px solid #444;
        }

        .footer-section {
            flex: 1;
            padding: 0 20px;
            /* Reduced padding for smaller screens */
        }

        .footer-section h4 {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .footer-section a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 15px 0;
            font-size: 15px;
        }

        .footer-bottom {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }

        .social-icons img,
        .store-icons img {
            width: 30px;
            margin: 0 15px;
        }

        .store-icons {
            margin-top: 30px;
        }

        .store-icons img {
            width: 130px;
            margin: 0 15px;
        }

        .footer-info {
            font-size: 14px;
            color: #888;
            margin-top: 40px;
            text-align: center;
            line-height: 1.6;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                align-items: center;
                /* Stack sections vertically */
            }

            .footer-section {
                padding: 20px 0;
                /* Add padding top and bottom for spacing */
                text-align: center;
                /* Center text for smaller screens */
            }

            .footer-section h4 {
                font-size: 20px;
                /* Increase header size */
            }

            .footer-section a {
                font-size: 14px;
                /* Reduce link font size */
            }

            .footer-help-center {
                font-size: 22px;
                /* Increase help center font size */
            }

            .store-icons img {
                width: 100px;
                /* Reduce store icon size */
            }

            .social-icons img {
                width: 25px;
                /* Reduce social icon size */
            }

            .footer-info {
                font-size: 12px;
                /* Reduce footer info font size */
            }
        }
    </style>
</head>

<body>

    <div class="footer">
        <div class="footer-container">
            <!-- Visit Help Center Section -->
            <p style="text-align:center;font-size:36px;padding-bottom:20px">Uber</p>
            <div class="footer-help-center">
                <a href="#" style="color: #fff; text-decoration: none;">Visit Help Center</a>
            </div>

            <!-- Footer Content Sections -->
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Company</h4>
                    <a href="#">About us</a>
                    <a href="#">Our offerings</a>
                    <a href="#">Newsroom</a>
                    <a href="#">Investors</a>
                    <a href="#">Blog</a>
                    <a href="#">Careers</a>
                </div>
                <div class="footer-section">
                    <h4>Products</h4>
                    <a href="#">Ride</a>
                    <a href="#">Drive</a>
                    <a href="#">Deliver</a>
                    <a href="#">Eat</a>
                    <a href="#">Uber for Business</a>
                    <a href="#">Uber Freight</a>
                    <a href="#">Gift cards</a>
                </div>
                <div class="footer-section">
                    <h4>Global citizenship</h4>
                    <a href="#">Safety</a>
                    <a href="#">Diversity and Inclusion</a>
                    <a href="#">Sustainability</a>
                </div>
                <div class="footer-section">
                    <h4>Travel</h4>
                    <a href="#">Reserve</a>
                    <a href="#">Cities</a>
                </div>
            </div>

            <!-- Social Media and App Store Icons -->
            <div class="footer-bottom">
                <div class="social-icons">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
                    <img src="./assets/images/twitter.png" alt="Twitter">
                    <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube">
                    <img src="./assets/images/instagram.png" alt="Instagram">
                    <img src="./assets/images/linkedin.png" alt="LinkedIn">

                </div>
                <div class="store-icons">
                    <a href="#"><img src="https://d1a3f4spazzrp4.cloudfront.net/uber-com/1.3.8/d1a3f4spazzrp4.cloudfront.net/illustrations/app-store-google-4d63c31a3e.svg" alt="Google Play"></a>
                    <a href="#"><img src="https://d1a3f4spazzrp4.cloudfront.net/uber-com/1.3.8/d1a3f4spazzrp4.cloudfront.net/illustrations/app-store-apple-f1f919205b.svg" alt="App Store"></a>
                </div>
            </div>

            <!-- Footer Info -->
            <div class="footer-info">
                <p>© 2024 Uber Technologies Inc.</p>
                <p>Privacy | Accessibility | Terms</p>
            </div>
        </div>
    </div>

</body>

</html>