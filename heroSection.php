<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Booking with Map</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        /* Global Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        body {
            background-color: white;
            color: black;
            font-size: 16px;
        }

        .container {
            display: flex;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            height: 600px;
        }

        .booking-section {
            flex: 1;
            padding-right: 20px;
        }

        .map-section {
            flex: 1;
        }

        h1 {
            font-size: 52px;
            font-weight: 700;
            line-height: 64px;
            margin-bottom: 20px;
        }

        .tabs {
            display: flex;
            margin-bottom: 20px;
        }

        .tab {
            background-color: #f0f0f0;
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            color: black;
            transition: background-color 0.3s;
        }

        .tab.active {
            border-bottom: 3px solid black;
            background-color: #e0e0e0;
        }

        .booking-form {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
        }

        .input-group {
            position: relative;
            display: flex;
            align-items: center;
            padding: 10px 16px;
            background-color: #f0f0f0;
            margin-bottom: 15px;
            overflow: hidden;
            border-radius: 8px;
        }

        .input-group input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
            font-size: 16px;
            padding-left: 40px;
            padding-right: 40px;
            color: black;
        }

        .input-group .icon {
            left: 10px;
            color: black;
            font-size: 20px;
        }

        .date-time {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .submit-btn {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 1em;
            border-radius: 8px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #333;
        }

        #map {
            height: 100%;
            width: 100%;
            border-radius: 8px;
        }

        .image-wrapper {
            display: none;
            justify-content: center;
            margin-top: 20px;
            max-width: 100%;
            overflow: hidden;
        }

        .ride-image {
            width: 100%;
            max-width: 300px;
            border-radius: 8px;
        }

        /* Media Query to show image only on smaller screens */
        @media (max-width: 768px) {
            .image-wrapper {
                display: flex;
            }
        }

        /* Media Query for Black Theme on Smaller Screens */
        @media (max-width: 768px) {
            .input-group .icon {
                color: #aaa;
            }

            .container {
                background-color: black;
                color: white;
                flex-direction: column;
                height: auto;
                margin-top: 0;
                padding-top: 30px;
            }

            .date-time {
                display: none;
            }

            h1 {
                font-size: 36px;
                line-height: 44px;
                margin-bottom: 20px;
            }

            .tab {
                background-color: #333;
                color: white;
            }

            .tab.active {
                background-color: #444;
                border-bottom: 3px solid white;
            }

            .input-group {
                background-color: #222;
            }

            .input-group input {
                color: white;
            }

            .submit-btn {
                background-color: white;
                color: black;
            }

            .submit-btn:hover {
                background-color: #ccc;
            }

            .map-section {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="booking-section">
            <h1 id="header-title">Go anywhere with <strong>Uber</strong></h1>
            <div class="tabs">
                <button class="tab active" onclick="selectTab(this, 'ride')">
                    <svg width="21" height="21" viewBox="0 0 24 24" fill="none">
                        <path d="m20.9 9-1.5-4.6c-.3-.8-1-1.4-1.9-1.4H6.4c-.9 0-1.6.5-1.9 1.4L3 9H1v3h1v9h4v-2h12v2h4v-9h1V9h-2.1ZM5 14h4v2H5v-2Zm10 2v-2h4v2h-4ZM7.1 6h9.7l1.3 4H5.8l1.3-4Z" fill="currentColor"></path>
                    </svg>
                    Ride
                </button>
                <button class="tab" onclick="selectTab(this, 'package')">
                    <svg width="21" height="21" viewBox="0 0 24 24" fill="none">
                        <g fill="currentColor">
                            <path d="M21.9 6.4 12 1.5 8.1 3.4l9.9 5 3.9-2ZM2.1 6.4l3.8-1.9 9.9 5-3.8 1.9-9.9-5ZM11 23 1 18V8.1l10 5V23ZM19 13.8v-3.7l4-2V18l-10 5v-9.9l4-2v3.7l2-1Z"></path>
                        </g>
                    </svg>
                    Package
                </button>
            </div>
            <form class="booking-form" id="booking-form">
                <div class="input-group">
                    <div class="icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" data-baseweb="icon">
                            <title>search</title>
                            <path d="M12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <input type="text" placeholder="Pickup location">
                </div>
                <div class="input-group">
                    <div class="icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" data-baseweb="icon">
                            <title>search</title>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 7H7v10h10V7Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <input type="text" placeholder="Drop-off location">
                </div>
                <div class="date-time">
                    <div class="input-group date-input">
                        <div class="icon"><img src="./assets/images/calendar.png" style="width:20px;" /></div>
                        <input type="text" id="dateInput" placeholder="Date" readonly>
                    </div>
                    <div class="input-group time-input">
                        <div class="icon"><img src="./assets/images/time.png" style="width:20px;" /></div>
                        <input type="text" id="timeInput" placeholder="Time" readonly>
                    </div>
                </div>
                <button type="submit" class="submit-btn">See Prices</button>
                <div class="image-wrapper">
                    <img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,h_818,w_654/v1684852612/assets/ba/4947c1-b862-400e-9f00-668f4926a4a2/original/Ride-with-Uber.png" alt="Ride with Uber" class="ride-image">
                </div>
            </form>
        </div>
        <div class="map-section" id="map"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Flatpickr Initialization for Date
        flatpickr("#dateInput", {
            minDate: "today",
            onChange: function(selectedDates, dateStr) {
                const isToday = new Date().toDateString() === new Date(dateStr).toDateString();
                flatpickr("#timeInput", {
                    enableTime: true,
                    noCalendar: true,
                    dateFormat: "H:i",
                    minTime: isToday ? new Date().getHours() + ":" + new Date().getMinutes() : null
                }).open();
            }
        });

        // Flatpickr Initialization for Time
        flatpickr("#timeInput", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            minTime: "00:00"
        });

        // Leaflet Map Initialization
        const map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Handle Form Submission
        document.getElementById('booking-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const date = document.getElementById('dateInput').value;
            const time = document.getElementById('timeInput').value;
            alert(`Booking for ${date} at ${time}`);
        });

        // Function to handle tab selection
        function selectTab(tab, type) {
            const tabs = document.querySelectorAll('.tab');
            tabs.forEach(t => {
                t.classList.remove('active');
            });
            tab.classList.add('active');
            document.getElementById('header-title').innerHTML = type === 'ride' ? 'Go anywhere with <strong>Uber</strong>' : 'Send anything with <strong>Uber</strong>';
        }
    </script>
</body>

</html>