<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <title>Soccer &mdash; Website by Colorlib</title> --}}
    <title>FUTSEL APP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #f3f3f3; */

        }

        .scoreboard {
            margin-botton: 200px;
            /* max-width: 100%; */
            /* margin: auto; */
            /* background-color: #fff; */
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .match {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
            border-bottom: 1px solid #eee;
        }

        .team {
            display: flex;
            align-items: center;
        }

        .team img {
            width: 32px;
            height: 32px;
            margin-right: 10px;
        }

        .score {
            font-size: 24px;
            font-weight: bold;
        }

        .status {
            font-size: 12px;
            color: #999;
            text-align: center;
        }

        .match:last-child {
            border-bottom: none;
        }

        /* button */
    </style>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }

        .date-container {
            /* background-color: #111; */
            padding: 15px;
            border-radius: 12px;
            /* box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); */
            margin: 30px auto;
            max-width: 90%;
            overflow: hidden;
            opacity: 0.9;
        }

        .date-buttons {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding-bottom: 10px;
            /* scroll-snap-type: x mandatory; */
            border-radius: 10px
        }

        .date-buttons::-webkit-scrollbar {
            height: 8px;
        }

        .date-buttons::-webkit-scrollbar-thumb {
            background-color: #007bff;
            border-radius: 4px;
        }

        .date-buttons::-webkit-scrollbar-track {
            background: transparent;
        }

        .date-button {
            flex: 0 0 auto;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 16px;
            font-size: 14px;
            cursor: pointer;
            white-space: nowrap;
            transition: 0.3s;
            scroll-snap-align: start;
        }

        .date-button:hover {
            background-color: #0056b3;
        }

        .today {
            background-color: #28a745;
        }

        .today:hover {
            background-color: #1e7e34;
        }

        @media (max-width: 768px) {
            .date-button {
                font-size: 13px;
                padding: 8px 12px;
            }
        }
    </style>
</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="site-logo">

                    </div>
                    <div class="ml-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                                <li><a href="matches.html" class="nav-link">Matches</a></li>
                                <li><a href="players.html" class="nav-link">Players</a></li>
                                <li><a href="blog.html" class="nav-link">Blog</a></li>
                                <li><a href="contact.html" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>

                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                                class="icon-menu h3 text-white"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 ml-auto">
                        <h1 class="text-white">World Cup Event</h1>
                       
                        <div id="date-countdown"></div>

                    </div>
                </div>
            </div>
        </div>




    </div>
    <div class="">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex team-vs">

                    @foreach ($matches as $date => $match)
                        <form action="{{ route('coach.index') }}" method="get"
                            class="date-container d-flex justify-content-center">
                            @csrf
                            <input type="hidden" name="date" value="{{ $date }}">
                            <input type="submit" class="date-buttons" value="{{ $date }}">
                        </form>
                    @endforeach


                </div>
            </div>
        </div>
    </div>



    <div class="container mt-3 mb-5">
        <div class="scoreboard">
            <div class="mt-3 mb-3">

                @foreach ($dates as $leagueId =>  $matches)
                    <div style="display: flex; ">
                        <h2 class="ms-4 text-strat font-weight-bold mt-4 text-success"> {{ $matches->first()->league->name ?? 'Unknown League' }}
                        
                        </h2>
                        <h5 class="mt-4 pt-1">({{$matches->first()->league->season}})</h5>
                    </div>

                    @foreach($matches as $data)
                    <div class="match">
                        <div class="team">
                            <a href="{{ route('user.match',$data->id) }}">
                                {{-- <img src="{{ asset('storage/' . $data->homeTeam->team_logo) }}" alt="Team A Logo"> --}}
                                <img src="https://ssl.gstatic.com/onebox/media/sports/logos/fhBITrIlbQxhVB6IjxUO6Q_64x64.png"
                                alt="Team A Logo">
                            </a>
                            
                            <span style="width: 100px">{{ $data->homeTeam->team_name }}</span>
                        </div>
                        <div class="score">{{ $data->goal->home_team_goal}} - {{ $data->goal->away_team_goal}}</div>
                        <div class="team">
                            <a href="{{ route('user.match',$data->id)}}">
                                <img src="https://ssl.gstatic.com/onebox/media/sports/logos/z44l-a0W1v5FmgPnemV6Xw_64x64.png"
                                alt="Team B Logo">
                            </a>
                           
                            <span style="width: 100px">{{ $data->awayTeam->team_name }}</span>
                        </div>
                    </div>
                    <div class="status">Full Time</div>
                    @endforeach
                @endforeach
            </div>

        </div>
    </div>


    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>News</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Club News</a></li>
                            <li><a href="#">Media Center</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">RSS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>Tickets</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Online Ticket</a></li>
                            <li><a href="#">Payment and Prices</a></li>
                            <li><a href="#">Contact &amp; Booking</a></li>
                            <li><a href="#">Tickets</a></li>
                            <li><a href="#">Coupon</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>Matches</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Standings</a></li>
                            <li><a href="#">World Cup</a></li>
                            <li><a href="#">La Lega</a></li>
                            <li><a href="#">Hyper Cup</a></li>
                            <li><a href="#">World League</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>Social</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row text-center">
                <div class="col-md-12">
                    <div class=" pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>



    </div>
    <!-- .site-wrap -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>


    <script src="js/main.js"></script>
    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
    <script>
        function generateDateButtons() {
            const container = document.getElementById('dateButtons');
            const today = new Date();

            for (let i = -5; i <= 5; i++) {
                const date = new Date(today);
                date.setDate(today.getDate() + i);

                const button = document.createElement('button');
                button.classList.add('date-button');

                const dayStr = date.toLocaleDateString('en-US', {
                    weekday: 'short',
                    month: 'short',
                    day: '2-digit',
                    year: 'numeric'
                });

                if (i === 0) {
                    button.classList.add('today');
                    button.textContent = `Today (${dayStr})`;
                } else {
                    button.textContent = dayStr;
                }

                container.appendChild(button);
            }
        }

        generateDateButtons();
    </script>
</body>

</html>
