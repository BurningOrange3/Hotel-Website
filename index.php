<?php
include_once "reserve.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Chengran Sun">
    <title>Home | Group 11 Hotel</title>
    <link rel="icon" href="images/icon_sun.ico">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/search_bar.css">

    <!-- This JavaScript file is used to display sign in and modify the room-booking buttons,
        it also provides filter functions for this page -->
    <script type="text/javascript" src="./javascript/IndexSignin.js" defer></script>
    
    <!-- This JavaScript file is used to implement sorting and searching functions -->
    <script type="text/javascript" src="./javascript/IndexMain.js" defer></script>
</head>

<body onload="changeButtons()">

    <header>
        <nav>
            <a href="index.php">Group Eleven Hotel</a>
            <ul class="navLinks">
                <li><a href="signin.php">Sign in</a></li>
                <li><a href="signup.php">Sign up</a></li>
            </ul>
        </nav>
    </header>

    <main class="index_main">

        <!-- Sorting and Searching Functions -->
        <section class="sort_search_bar_container">

            <div class="sort_bar_container">
                <div>
                    <select name="sort" id="sort_option">
                        <option value="price">Price</option>
                        <option value="name" id="name">Name</option>
                    </select>
                </div>
                <div class="search_button">
                    <button id="sort_button" type="button" class="search_button">Sort</button>
                </div>
            </div>

            <!-- Filtering function starts from here -->
            <div class="sort_bar_container">
                <div>
                    <select name="filter" id="filter_option">
                        <option value="double" id="double">Double</option>
                        <option value="single" id="single">Single</option>
                        <option value="single" id="single">All</option>
                    </select>
                </div>
                <div class="search_button">
                    <button id="filter_button" type="button" class="search_button" onclick="filterList()">Filter</button>
                </div>
            </div>
            <!-- Filtering function finishes here. -->

            <div class="search_bar_container">
                <div class="search_bar">
                    <input id="search_text" type="text" placeholder="Search here...">
                </div>
                <div class="search_button">
                    <button id="search_button" type="button" class="search_button">Search</button>
                </div>
            </div>

        </section>

        <section class="welcome_section">
            <h2>Welcome <span id="greeting-from-qs"></span></h2>
            <script type="text/javascript">
                document.getElementById('greeting-from-qs').innerHTML = new URLSearchParams(document.location.search).get('firstname');
            </script>
        </section>

        <aside>
            <h3>Rooms & Suites</h3>
            <ul>
                <li>
                    All of our spacious suites have a beautiful view of downtown Ottawa. Refuel your body and mind with
                    truly restorative sleep.
                </li>
                <li>
                    As we welcome you back to our hotels around the world, we are committed to providing you with a safe
                    environment that aligns with expert protocols for working to defeat COVID-19. 
                    <a href="https://www.ottawapublichealth.ca/en/public-health-topics/novel-coronavirus.aspx" target="_blank">Click</a> to see updates
                    about COVID-19 policies in Ottawa.
                </li>
                <li>
                    The Group Eleven Hotel is conveniently located in the heart of Canada's picturesque capital, providing
                    direct access to many of the city's national attractions.
                </li>
                <li>
                    FREE WI-FI: We offer complimentary Wi-Fi throughout the hotel.
                </li>
                <li>
                    FITNESS FACILITY: Keep up with your fitness regimen in our well equipped Fitness Centre featuring
                    cardio and weight equipment. (Open 7am - 11pm daily)
                </li>
                <li>
                    ON-SITE PARKING: Parking ($25 plus tax per night) is located behind the hotel. Limited spaces with a
                    5'8" height restriction.
                </li>
                <li>
                    DRY CLEANING: Guests enjoy one-day dry cleaning service.
                </li>
            </ul>
        </aside>

        <section class='room_list'>
            <div class='room single'>
                <img src='./images/corner.jpg' alt='Corner room image'>
                <h3>Corner room</h3>
                <p>
                    Striking panoramic views make our Corner Rooms bright, airy havens that instantly uplift your
                    spirits. With floor-to-ceiling windows framing Rideau Canal or city views, relax in one of two wing
                    chairs, stretch your legs out on an ottoman.
                </p>
                <div>
                    <span>$100.00</span>
                    <input id="1" type="button" value="" disabled onclick="buttonOnclick(1)">
                </div>
            </div>
            <div class='room double'>
                <img src='./images/deluxe.jpg' alt='Deluxe room image'>
                <h3>Deluxe room</h3>
                <p>
                    Spacious, bright, and equipped with all you need to feel your best, Deluxe Rooms are personal havens
                    of relaxed productivity. Gaze out over the city through floor-to-ceiling windows, or recline in a
                    plush, upholstered chair and read the paper.
                </p>
                <div>
                    <span>$150.00</span>
                    <input id="2" type="button" value="" disabled onclick="buttonOnclick(2)">
                </div>
            </div>
            <div class='room double'>
                <img src='./images/traditional_1.jpg' alt='traditional-1 room image'>
                <h3>Traditional-1 room</h3>
                <p>
                    Enter a personal oasis of relaxation, designed to elevate your mood and enhance productivity. Our
                    Traditional Rooms feature expansive floor-to-ceiling windows that look out over the historic Byward
                    Market while letting natural light illuminate the room.
                </p>
                <div>
                    <span>$200.00</span>
                    <input id="8" type="button" value="" disabled onclick="buttonOnclick(8)">
                </div>
            </div>
            <div class='room double'>
                <img src='./images/traditional_2.jpg' alt='traditional-2 room image'>
                <h3>Traditional-2 room</h3>
                <p>
                    Enter a personal oasis of relaxation, designed to elevate your mood and enhance productivity. Our
                    Traditional Rooms feature expansive floor-to-ceiling windows that look out over the historic Byward
                    Market while letting natural light illuminate the room.
                </p>
                <div>
                    <span>$220.00</span>
                    <input id="9" type="button" value="" disabled onclick="buttonOnclick(9)">
                </div>
            </div>
            <div class='room single'>
                <img src='./images/junior_suite.jpg' alt='junior suite image'>
                <h3>Junior suite</h3>
                <p>
                    Gatineau Hills and Byward Market spread out before you from the vantage of your Junior Suite.
                    Located on the corners of the hotel, these bright and airy suites offer exhilarating panoramic views
                    of Ottawa seen through dramatic floor-to-ceiling windows.
                </p>
                <div>
                    <span>$300.00</span>
                    <input id="7" type="button" value="" disabled onclick="buttonOnclick(7)">
                </div>
            </div>
            <div class='room double'>
                <img src='./images/executive_suite.jpg' alt='executive suite image'>
                <h3>Executive suite</h3>
                <p>
                    Settle in to your Executive Suite. This corner space is your contemporary hotel retreat with
                    floor-to-ceiling windows, natural light and impressive views of downtown Ottawa, Rideau Canal and
                    Parliament Hill. The living area offers a loveseat, two wing chairs and a comfortable king Murphy
                    bed.
                </p>
                <div>
                    <span>$350.00</span>
                    <input id="6" type="button" value="" disabled onclick="buttonOnclick(6)">
                </div>
            </div>
            <div class='room single'>
                <img src='./images/element_single.jpg' alt='element single room image'>
                <h3>Element single room</h3>
                <p>
                    Group Eleven Hotel is a hotel located in the recently revitalised centre of Ottawa, Canada. Each hotel
                    room features Egyptian cotton bedding. Free Wi-Fi is available in all guest rooms, along with a
                    flat-screen television and a desk. Each room has an en-suite bathroom with a shower.
                </p>
                <div>
                    <span>$60.00</span>
                    <input id="5" type="button" value="" disabled onclick="buttonOnclick(5)">
                </div>
            </div>
            <div class='room double'>
                <img src='./images/element_double_1.jpg' alt='element double-1 room image'>
                <h3>Element double-1 room</h3>
                <p>
                    Group Eleven Hotel is a hotel located in the recently revitalised centre of Ottawa, Canada. Each hotel
                    room features Egyptian cotton bedding. Free Wi-Fi is available in all guest rooms, along with a
                    flat-screen television and a desk. Each room has an en-suite bathroom with a shower.
                </p>
                <div>
                    <span>$80.00</span>
                    <input id="3" type="button" value="" disabled onclick="buttonOnclick(3)">
                </div>
            </div>
            <div class='room double'>
                <img src='./images/element_double_2.jpg' alt='element double-2 room image'>
                <h3>Element double-2 room</h3>
                <p>
                    Group Eleven Hotel is a hotel located in the recently revitalised centre of Ottawa, Canada. Each hotel
                    room features Egyptian cotton bedding. Free Wi-Fi is available in all guest rooms, along with a
                    flat-screen television and a desk. Each room has an en-suite bathroom with a shower.
                </p>
                <div>
                    <span>$90.00</span>
                    <input id="4" type="button" value="" disabled onclick="buttonOnclick(4)">
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div><a href="mailto:sun00190@algonquinlive.com">Email us</a></div>
    </footer>

</body>

</html>

