<html>
<head>
    <title>🌱 Bokchoy</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

        body {
            font-family: "Josefin Sans", sans-serif;
        }

        .bio-image {
            max-width: 120px;
            position: absolute;
            top: -65px;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
        }

        .bio-wrapper {
            margin-top: 110px !important;
        }

        .main-header {
            font-size: 4.5em;
        }

        .badge-text {
            font-size: 0.8em;
            margin-bottom: 10px;
            padding: 8px;
        }

        body {
            background-color: #eff3fd;
        }

        .container {
            background-color: white;
        }

        .nav-links {
            color: gray !important;
        }

        .nav-links > a {
            color: #747882 !important;
        }

        .post-card-link {
            color: black;
        }

        .post-card-link:hover {
            color: black;
            text-decoration: none;
        }

        .post-card-link > .card:hover {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .page-item {
            margin: 0 5px;
            text-align: center;
        }

        .page-item > a, .page-item > span {
            border-radius: 50% !important;
            background-color: transparent;
        }

        .input-search-wrapper input, .input-search-wrapper .input-group-text {
            background-color: #61d67c;
            border: none;
            color: black;
        }

        .input-search-wrapper input:focus, .input-search-wrapper input:active {
            background-color: #61d67c;
            border: none;
            box-shadow: none;
        }


    </style>
</head>
<body>

{{ $slot }}

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
