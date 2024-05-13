<!-- Bootstrap template for Car Rental page -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/styles.css">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        {{-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style> --}}

        <style>
            @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
            @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
            
            body {
                font-family: 'Poppins', sans-serif;
                flex-direction: column;
            }

            p {
                font-family: 'Poppins', sans-serif;
                font-size: 1.1em;
                font-weight: 300;
                line-height: 1.7em;
                color: #999;
            }

            h1 {
                font-family: 'Poppins', sans-serif;
                font-size: 1.1em;
                font-weight: 300;
                line-height: 1.7em;
            }

            a,
            a:hover,
            a:focus {
                color: inherit;
                text-decoration: none;
                transition: all 0.3s;
            }

            /* ---------------------------------------------------
                NAVBAR STYLE
            ----------------------------------------------------- */

            .navbar {
                margin-bottom: 0;
                background-color: #11ADA4;
                z-index: 9999;
                border: 0;
                font-size: 15px !important;
                line-height: 2 !important;
                letter-spacing: 3px;
                border-radius: 0;
                font-family: Montserrat, sans-serif;
                height: 50px;
            }
            
            .navbar li a, .navbar .navbar-brand {
                color: white !important;
                text-decoration:none;
            }

            .toggle {
                background-color: #0958A3;
            }

            .navbar-nav li a:hover, .navbar-nav li.active a {
                color: #11ADA4 !important;
                background-color: #FCDA37 !important;
                font-weight: bold;
            }

            .navbar-default .navbar-toggle {
                border-color: transparent;
                color: #0958A3 !important;
            }

            footer {
                margin-top: auto;
            }

            footer .glyphicon {
                font-size: 20px;
                margin-bottom: 20px;
                color: #f4511e;
            }
            .slideanim {visibility:hidden;}
            .slide {
                animation-name: slide;
                -webkit-animation-name: slide;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                visibility: visible;
            }
            @keyframes slide {
                0% {
                opacity: 0;
                transform: translateY(70%);
                } 
                100% {
                opacity: 1;
                transform: translateY(0%);
                }
            }
            @-webkit-keyframes slide {
                0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
                } 
                100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
                }
            }
            @media screen and (max-width: 768px) {
                .col-sm-4 {
                text-align: center;
                margin: 25px 0;
                }
                .btn-lg {
                width: 100%;
                margin-bottom: 35px;
                }
            }
            @media screen and (max-width: 480px) {
                .logo {
                font-size: 150px;
                }
            }

            /* ---------------------------------------------------
                CONTENT STYLE
            ----------------------------------------------------- */

            #content {
                width: 100%;
                padding: 20px;
                min-height: 100vh;
                transition: all 0.3s;
            }

            /* ---------------------------------------------------
                MEDIAQUERIES
            ----------------------------------------------------- */

            @media (max-width: 768px) {
                #sidebar {
                    margin-left: -250px;
                }
                #sidebar.active {
                    margin-left: 0;
                }
                #sidebarCollapse span {
                    display: none;
                }
            }

            /* ---------------------------------------------------
                CUSTOM
            ----------------------------------------------------- */

            .customFont {
                color: white;
            }

            #backButton {
                background-color: #11ADA4;
                border: none;
                color: white;
                padding: 20px 30px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }

            #backButton:hover {
                background-color: #FCDA37;
                color: black;
            }

            #customButton {
                background-color: #11ADA4;
                border: none;
                border-radius: 15px;
                color: white;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }

            #customButton:hover {
                background-color: #FCDA37;
                color: black;
            }

            .customButton2 {
                background-color: #0958A3;
                border: 1px solid #0958A3;
                border-radius: 10px;
                color: white;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
            }

            .customButton2:hover {
                background-color: white;
                color: #0958A3;
                border: 1px solid #0958A3;
            }

            .customButton2active {
                background-color: white;
                color: #0958A3;
                border: 1px solid #0958A3;
                border-radius: 10px;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
            }

            #customBtn {
                background-color: #0958A3;
                color: white;
                padding: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                border: none;
                border-radius: 10px;
            }

            #customBtn:hover {
                background-color: #FCDA37;
                color: #0958A3;
            }

            #searchButton {
                background-color: #11ADA4;
                border: none;
                color: white;
                padding: 50px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                width: 100%;
            }

            #searchButton:hover {
                background-color: #FCDA37;
                color: black;
            }

            #customAlert {
                background-color: #436e70;
                border: none;
                color: white;
            }
        </style>

        <!-- put logo on browser tab -->
        <link rel="icon" href="images/UMPCablogowhite.png">
    </head>

    <body id="myPage" data-spy="scroll">

        <!-- js code -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function(){
                    
                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
                
                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
            
        </script>

        <!-- When user choose the different payment methods -->
        <script>
            //function to display required field when user choose different payment methods
            function displayField() {
                //if user choose credit card
                if(document.getElementById('creditCard').checked == true) {
                    //display the credit card info field
                    
                }
            }
        </script>

        {{-- for GEOLOCATION (Latest) --}}


        <!-- For geolocation function in GOOGLE MAP  -->
        {{-- <script>
            //function to get user's current location/position
            var x = document.getElementById("location");
            
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            //function to display position in latitude & longitude form
            function showPosition(position) {
                x.innerHTML = 
                "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
            }

            //function to handle errors & rejections
            function showError(error) {
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        x.innerHTML = "User denied the request for Geolocation."
                        break;
                    case error.POSITION_UNAVAILABLE:
                        x.innerHTML = "Location information is unavailable."
                        break;
                    case error.TIMEOUT:
                        x.innerHTML = "The request to get user location timed out."
                        break;
                    case error.UNKNOWN_ERROR:
                        x.innerHTML = "An unknown error occurred."
                        break;
                }
            }
        </script> --}}

        <script>
            //search function
            const searchButton = document.getElementById('search-button');
            const searchInput = document.getElementById('search-input');
            searchButton.addEventListener('click', () => {
            const inputValue = searchInput.value;
            alert(inputValue);
            });
        </script>
    </body>
</html>