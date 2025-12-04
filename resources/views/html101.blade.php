<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
<html>
    <head>
        <title>this is head of html</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }
        </style>
    </head>

    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML - FORM</h1>
            <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="lname">สกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control">
                    </div>
                </div>
            </form>
        </div>

        <h1 id="" class="">html&nbsp;&nbsp;&nbsp;101</h1> <!-- สเปคบาร์นับเป็นแท็ป --> <!-- &nbsp; = spacbar -->
        <h1 style="color:blue;">  &lt;html 101</h1> <!-- &lt; = < -->
        <h2>html 101</h2>
        <h3>&gt;html 101</h3> <!-- &gt; = > -->
        <hr/>
        <hr>

        <table border="1" width="100%"> <!-- สร้างตารางตาม thead และ tbody -->
            <thead>
                <tr>
                    <th>ลำดับ</th> 
                    <th>ชื่อ</th>
                    <!-- <th> = Table Header Cell ใช้ในหัวตารางทำให้ตัวอักษร ตัวหนา + จัดกลาง อัตโนมัติ -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td> <!-- td = เซลล์ข้อมูล -->
                    <td>thirapat</td>
                </tr>
            </tbody>
        </table>

        <style> 
            h1 { color:red;} 
        </style>
        <!-- ใช้ตามล่างสุดหากมี 2 สีในตำแหน่งเดียวกัน -->

    </body>
</html>