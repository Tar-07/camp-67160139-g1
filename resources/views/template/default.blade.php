<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
<html >
    <head>
        <title>HTML - @yield('title')</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
                background-image: url("https://shared.steamstatic.com/community_assets/images/items/400740/7c6eccf699397b15c127f5a3c3f98ede89aad0c2.jpg");
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                position: relative;
            }
            /* กำหนดความกว้างสูงสุดและจัดให้อยู่กึ่งกลาง */
            .form-center {
                max-width: auto; /* กำหนดความกว้างสูงสุด */
                margin-left: auto;
                margin-right: auto;
            }
            .container {
                background: #535353ff;
                width: 480px;
                padding: 30px 40px;
                border-radius: 15px;
                box-shadow: 0px 4px 12px rgba(1, 1, 1, 0.1);
            }
            h1 {
                text-align: center;
                font-size: 30px;
            }
            .form-control {
                background: rgba(214, 214, 214, 0.87);
            }
            body {
                background-color: #2c254eff;
                color: #fffefeff;
            }
        </style>
        @stack('styles')
    </head>

    <body >
        <div class="container mt-4" >
            <h1>File Default</h1>
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>


