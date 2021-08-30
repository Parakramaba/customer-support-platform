<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seller | Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keyword" content="customer support, seller">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- /Bootstrap -->
    
    {{-- <!-- jQuery --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    {{-- <!-- DataTables-->
    <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- /DataTables--> --}}

    <!-- FontAwesome --> <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- SweetAlert --> <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>

<body>
    <div class="bg-dark bg-gradient">
        {{-- Header --}}
        <header>
            <div class="container">
                <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mt-2">
                        <a class="nav-link bg-dark text-light text-uppercase" href=""><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                    </li>
                </ul>
                <div class="justify-content-center mt-2">
                </div>
            </div>
        </header>
        {{-- /Header --}}

        {{-- Content --}}
        <div class="bg-light">
            @yield('content')
        </div>
        {{-- /Content --}}
    </div>

    {{-- Footer --}}
    <footer class="bg-secondary bg-gradient text-center text-dark p-2">
        <div class="text-center">
            <a href="" class="text-dark m-2" style="font-size: 35px;"><i class="fab fa-whatsapp"></i></a>
            <a href="" class="text-dark m-2" style="font-size: 35px;"><i class="fab fa-facebook-square"></i></a>
            <a href="" class="text-dark m-2" style="font-size: 35px;"><i class="fab fa-linkedin"></i></a>
            <a href="" class="text-dark m-2" style="font-size: 35px;"><i class="fab fa-twitter-square"></i></a>
        </div>
        Copyright &copy; 2021 @ CustomerSupportOrg
    </footer>
    {{-- /Footer --}}
</body>
</html>