<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Layer_1" />
                    <g id="Layer_2">
                        <g>
                            <path d="M401.8,206.5c-1.4-2-3.7-3.2-6.1-3.2h-46.5v-19.8c0-4.1-3.4-7.5-7.5-7.5H173.2c-4.1,0-7.5,3.4-7.5,7.5v121.2    c0,4.1,3.4,7.5,7.5,7.5h21.2c3.9,13.6,16.5,23.7,31.3,23.7s27.4-10,31.3-23.7h83.1c3.9,13.6,16.5,23.7,31.3,23.7    s27.4-10,31.3-23.7h15.5c4.1,0,7.5-3.4,7.5-7.5V243c0-1.6-0.5-3.1-1.4-4.3L401.8,206.5z M410.8,245.2h-33.6v-26.8h14.7    L410.8,245.2z M180.7,191.1h153.5v106.2h-76.5c-2.9-15.1-16.1-26.5-32-26.5s-29.2,11.4-32,26.5h-13V191.1z M225.7,320.9    c-9.7,0-17.6-7.9-17.6-17.6s7.9-17.6,17.6-17.6s17.6,7.9,17.6,17.6S235.4,320.9,225.7,320.9z M371.5,320.9    c-9.7,0-17.6-7.9-17.6-17.6s7.9-17.6,17.6-17.6s17.6,7.9,17.6,17.6S381.2,320.9,371.5,320.9z M403.5,297.3    c-2.9-15.1-16.1-26.5-32-26.5c-8.6,0-16.5,3.4-22.3,8.9v-61.3h12.9v34.3c0,4.1,3.4,7.5,7.5,7.5h41.3v37.1H403.5z" />
                            <path d="M93.6,191.1h53.5c4.1,0,7.5-3.4,7.5-7.5s-3.4-7.5-7.5-7.5H93.6c-4.1,0-7.5,3.4-7.5,7.5S89.5,191.1,93.6,191.1z" />
                            <path d="M147.1,203.4h-41.2c-4.1,0-7.5,3.4-7.5,7.5s3.4,7.5,7.5,7.5h41.2c4.1,0,7.5-3.4,7.5-7.5S151.3,203.4,147.1,203.4z" />
                            <path d="M147.1,230.7h-26c-4.1,0-7.5,3.4-7.5,7.5s3.4,7.5,7.5,7.5h26c4.1,0,7.5-3.4,7.5-7.5S151.3,230.7,147.1,230.7z" />
                            <path d="M147.1,258h-9c-4.1,0-7.5,3.4-7.5,7.5s3.4,7.5,7.5,7.5h9c4.1,0,7.5-3.4,7.5-7.5S151.3,258,147.1,258z" />
                        </g>
                    </g>
                </svg>
                Cek Resi
            </a>
        </div>
    </nav>


    <!-- akhir navbar -->

    <!-- content -->
    <div>
        @yield('content')


    </div>
    <!-- akhir content -->

</body>

</html>