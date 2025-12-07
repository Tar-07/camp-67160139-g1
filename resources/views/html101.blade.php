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

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="daymonthyear">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input id="daymonthyear" type="date">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="age">อายุ</label>
                    </div>
                    <div class="col">
                        <input id="age" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="gender">เพศ</label>
                    </div>
                    <div class="col">
                        <input id="male" type="radio" name="gender" value="Male">
                        <label for="male">Male</label>
                        <input id="female" type="radio" name="gender" value="Female">
                        <label for="female">Female</label>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="photo">รูป</label>
                    </div>
                    <div class="col">
                        <input id="photo" type="file">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="address">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <textarea id="address" name="address" rows="4" cols="50"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="fav-color">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <select name="fav_color" id="fav-color">
                        <option value="">-- กรุณาเลือก --</option> 
                        <option value="red">สีแดง</option>
                        <option value="blue">สีน้ำเงิน</option>
                        <option value="green">สีเขียว</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="fav-music">เพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input id="forlife" type="radio" name="fav-music" value="Forlife">
                        <label for="forlife">เพื่อชีวิต</label>
                        <input id="childfield" type="radio" name="fav-music" value="Childfield">
                        <label for="childfield">ลูกทุ่ง</label>
                        <input id="other" type="radio" name="fav-music" value="Other">
                        <label for="other">อื่นๆ</label>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <input id="privacy" type="checkbox" name="privacy" value="True">
                        <label for="privacy">ยินยอมให้เก็บข้อมูล</label>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <input type="reset" value="Reset" id="reset-button">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>

        <style> 
            h1 { color:black;} 
            #reset-button {
                /* กำหนดระยะห่างด้านขวา 10 พิกเซล */
                margin-right: 500px; 
            }
        </style>
    </body>
</html>