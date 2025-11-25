<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
    @include('home.css');

</head>

<body class="main-layout">
    <!-- header -->
    @include('home.header');


    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div id="serv_hover" class="room">
                        <div style="padding: 20px" class="room_img">
                            <figure>
                                <img style="height: 300px; width: 800px" src="/room/{{ $detail->image }}"
                                    alt="#" />
                            </figure>
                        </div>
                        <div class="bed_room">
                            <h3>{{ $detail->room_title }}</h3>
                            <p>{{ $detail->description }}</p>
                            <h4>Price : Rp. {{ $detail->price }}</h4>
                            <h4>Wifi : {{ $detail->wifi }}</h4>
                            <h4>Class Room : {{ $detail->room_type }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home.footer');
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
