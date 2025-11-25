<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        body {
            /* Opsional: Memastikan seluruh halaman belakangnya gelap */
            color: #fff;
        }

        .table_deg {
            border-collapse: collapse;
            margin: 30px auto;
            width: 100%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            /* Bayangan lebih gelap */

            /* GANTI INI: Pakai warna gelap senada sidebar (biasanya kode ini) */
            background-color: #2d3035;

            border-radius: 8px;
            overflow: hidden;
        }

        .th_deg {
            /* Header tabel dibuat sedikit lebih gelap atau terang dari body tabel */
            background-color: #343a40;
            color: white;
            padding: 15px;
            font-size: 15px;
            font-weight: bold;
            white-space: nowrap;
            text-align: center;
            border-bottom: 2px solid #454d55;
            /* Garis pemisah header */
        }

        td {
            padding: 15px;
            text-align: center;

            /* GANTI INI: Garis pemisah antar baris dibuat abu gelap */
            border-bottom: 1px solid #454d55;

            /* PENTING: Warna teks jadi putih agar kelihatan di background gelap */
            color: #ffffff;

            vertical-align: middle;
        }

        /* GANTI STRIPING: Baris selang-seling warna abu yang sedikit beda */
        tr:nth-of-type(even) {
            background-color: #3a4049;
        }

        /* Efek Hover: Saat mouse lewat, warnanya jadi sedikit lebih terang */
        tr:hover {
            background-color: #4b545c;
            cursor: pointer;
        }

        /* Style gambar tetap sama */
        td img {
            width: 100px;
            height: auto;
            border-radius: 5px;
            object-fit: cover;
        }
    </style>

</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">

        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->


        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">

                    <table class="table_deg">
                        <tr>
                            <th class="th_deg">Room Title</th>
                            <th class="th_deg">Price</th>
                            <th class="th_deg">Room Type</th>
                            <th class="th_deg">Wifi</th>
                            <th class="th_deg">Description</th>
                            <th class="th_deg">image</th>
                        </tr>



                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->room_title }}</td>
                                <td>Rp. {{ $data->price }}</td>
                                <td>{{ $data->room_type }}</td>
                                <td>{{ $data->wifi }}</td>
                                <td>{!! Str::limit($data->description, 40) !!}</td>
                                <td>
                                    <img src="room/{{ $data->image }}">
                                </td>
                            </tr>
                        @endforeach

                    </table>





                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript files-->
    @include('admin.footer')
</body>

</html>
