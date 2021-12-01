<!DOCTYPE html>
<html>

<head>
    <title>Laporan Resi Pengiriman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h4 class="justify-content-center">LAPORAN RESI PENGIRIMAN</h4>
    <div class="container">
        <div class="row justify-content-center">



            <br />
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                @php $i=1 @endphp
                @foreach($response as $rd)
                <tbody>
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$rd['location']}}</td>
                        <td>{{$rd['desc']}}</td>
                        <td>{{$rd['date']}}</td>

                    </tr>
                </tbody>
                @endforeach
            </table>

        </div>
    </div>

</body>

</html>