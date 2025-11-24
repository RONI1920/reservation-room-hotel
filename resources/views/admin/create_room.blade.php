<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 30px;
        }

        .div_center {
            text-align: center;
            padding-top: 40px;
        }
    </style>


</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">

                    <div>
                        <form action="{{ url('add_room') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="div_center">
                                <h1 style="font-size: 30px; font-weight; bold;">Add New Rooms</h1>
                            </div>
                            <div class="div_deg">
                                <label> Room Tittle</label>
                                <input type="text" name="room_title">
                            </div>

                            <div class="div_deg">
                                <label> Description</label>
                                <textarea name="description"></textarea>
                            </div>

                            <div class="div_deg">
                                <label> Price</label>
                                <input type="number" name="price">
                            </div>

                            <div class="div_deg">
                                <label> Room Type</label>
                                <select name="room_type">
                                    <option value="reguler">Reguler</option>
                                    <option value="premium">Premium</option>
                                    <option value="deluxe">Deluxe</option>
                                </select>
                            </div>

                            <div class="div_deg">
                                <label> Free Wifi</label>
                                <select name="Wifi">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="div_deg">
                                <label>Upload Image</label>
                                <input type="file" name="image">
                            </div>

                            <div>
                                <input class="btn btn-primary" type="submit" value="Add Room">
                            </div>

                        </form>
                    </div>



                </div>
            </div>
        </div>



    </div>
    <!-- JavaScript files-->
    @include('admin.footer')
</body>

</html>
