
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Guide Estate')</title>

    <!-- Include JQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Include Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!--Font Awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!--Costum css file-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
    
@include('main.header')
<div class="my-3 py-3"></div>

@yield('content')

<!-- footer section starts  -->
<section class="footer">

    <div class="footer-container">

        <div class="box-container">

            <div class="box">
                <h3>branch location</h3>
                <a href="#">New cairo</a>
                <a href="#">elmohandssin</a>
                <a href="#">Maadi</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">services</a>
                <a href="#">featured</a>
                <a href="#">properties</a>
                <a href="#">agents</a>
                <a href="#">contact</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my favorite</a>
                <a href="#">my list</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div>

        </div>

        <div class="credit">created by <span> mr. ahmed kamel </span> | all rights reserved! </div>

    </div>

</section>
<!-- footer section ends -->

<!--javascript link-->
<script src="{{ asset('assets/js/script.js') }}"></script>

<!-- Include bootstrap.bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>



