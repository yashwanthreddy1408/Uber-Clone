<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggestions</title>
    <style>
        .suggestions-header {
            text-align: center;
            /* Center heading */
            margin-bottom: 30px;
            /* Space below header */
        }

        .suggestions-title {
            font-size: 36px;
            /* Heading font size */
            font-weight: 700;
            /* Heading font weight */
            line-height: 44px;
            /* Heading line height */
        }

        .suggestions-container {
            display: flex;
            /* Flexbox layout for side-by-side divs */
            justify-content: space-between;
            /* Space between divs */
            flex-wrap: wrap;
            /* Allow wrapping of divs */
            padding: 0 150px;
            /* Left and right padding */
        }

        .suggestion-card-ride,
        .suggestion-card-reserve,
        .suggestion-card-package {
            background-color: #f0f0f0;
            /* Light background for suggestion cards */
            border-radius: 8px;
            /* Rounded corners */
            height: 200px;
            /* Increased height */
            width: 400px;
            /* Increased width */
            display: flex;
            /* Flexbox layout */
            align-items: center;
            /* Center contents vertically */
            justify-content: space-between;
            /* Space between text and image */
            padding: 16px;
            /* Padding inside cards */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
            margin-bottom: 20px;
            /* Space below each card */
        }

        .suggestion-card-title {
            font-size: 24px;
            /* Subheading font size */
            font-weight: 600;
            /* Subheading font weight */
            margin-bottom: 10px;
            /* Space below subheading */
            text-align: left;
            /* Align text to the left */
        }

        .suggestion-card-text {
            text-align: left;
            /* Align text to the left */
            margin-bottom: 20px;
            /* Space below paragraph */
        }

        .details-button {
            background-color: black;
            /* Black background for buttons */
            color: white;
            /* White text for buttons */
            border: none;
            /* No border */
            padding: 10px 20px;
            /* Padding for buttons */
            border-radius: 8px;
            /* Rounded corners */
            cursor: pointer;
            /* Pointer cursor on hover */
            transition: background-color 0.3s;
            /* Smooth background transition */
        }

        .details-button:hover {
            background-color: #333;
            /* Darker background on hover */
        }

        .suggestion-card img {
            width: 128px;
            /* Fixed width for images */
            height: 128px;
            /* Fixed height for images */
            margin-left: 10px;
            /* Space between text and image */
        }

        .suggestion-reserve-img {
            width: 128px;
            /* Fixed width for images */
            height: 128px;
            /* Fixed height for images */
            margin-left: 10px;
            /* Space between text and image */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .suggestions-container {
                flex-direction: column;
                /* Stack cards vertically on smaller screens */
                align-items: center;
                padding: 20px;
                /* Center cards */
            }

            .suggestion-card-text {
                font-size: 15px;
                color: #333;
            }

            .suggestion-card-ride,
            .suggestion-card-reserve,
            .suggestion-card-package {
                width: 100%;
                /* Full width for cards on smaller screens */
            }

            .suggestion-reserve-img {
                width: 128px;
            }
        }
    </style>
</head>

<body>
    <div class="suggestions-header">
        <h1 class="suggestions-title">Suggestions</h1>
    </div>
    <div class="suggestions-container">
        <div class="suggestion-card-ride">
            <div>
                <h2 class="suggestion-card-title">Ride</h2>
                <p class="suggestion-card-text">Go anywhere with Uber. Request a ride, hop in, and go.</p>
                <button class="details-button">Details</button>
            </div>
            <img class="suggestion-reserve-img" src="https://mobile-content.uber.com/launch-experience/ride.png" alt="Ride Image">
        </div>
        <div class="suggestion-card-reserve">
            <div>
                <h2 class="suggestion-card-title">Reserve</h2>
                <p class="suggestion-card-text">Reserve your ride in advance so you can relax on the day of your trip.</p>
                <button class="details-button">Details</button>
            </div>
            <img class="suggestion-reserve-img" src="https://mobile-content.uber.com/uber_reserve/reserve_clock.png" alt="Reserve Image">
        </div>
        <div class="suggestion-card-package">
            <div>
                <h2 class="suggestion-card-title">Package</h2>
                <p class="suggestion-card-text">Uber Connect makes same-day delivery easier than ever.</p>
                <button class="details-button">Details</button>
            </div>
            <img class="suggestion-reserve-img" src="https://mobile-content.uber.com/launch-experience/connect.png" alt="Package Image">
        </div>
    </div>
</body>

</html>