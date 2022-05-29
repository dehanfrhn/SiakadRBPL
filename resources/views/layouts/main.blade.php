<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        }

        .header {
            position: fixed;
            top: 0;
            padding: 10px;
            padding-top: 20px;
            width: 100%;
            text-align: center;
            background: #3336fd;
            color: white;
            font-size: 20px;
        }
        </style>

</head>
<body>
   {{-- @include('partials.navbar'); --}}
    <div class="container mt-4">
      {{-- @yield('container') --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- style sendiri--}}
    <link rel="stylesheet" href="/css/style.css">
    <div class="header">
        <h1>SIAKAD</h1>
        <p>Sistem Informasi Akademik</p>
    </div>

    @section('konten')
    @show

    <footer id="footer" class="footer">
        <div class="copyright" style="margin-left: 10px">
            <h6>
                &copy; Hak Cipta oleh RBPL kelompok 3
            </h6>
        </div>
    </footer>
</body>
</html>
