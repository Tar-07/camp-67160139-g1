@extends('template.default')

@section('title' , 'Workshop FORM')
@section('content')
<h1>Workshop #HTML - FORM</h1>
    <form method="post" action="/senddata">
        @csrf
        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="fname">ชื่อ</label>
            </div>
            <div class="col">
                <input name="fname" id="fname" class="form-control" >
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุชื่อ
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="lname">นามสกุล</label>
            </div>
            <div class="col">
                <input name="lname" id="lname" class="form-control" >
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุนามสกุล
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="birthday">วัน/เดือน/ปีเกิด</label>
            </div>
            <div class="col">
                <input name="birthday" class="form-control" id="birthday" type="date">
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุวันเกิด
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="age">อายุ</label>
            </div>
            <div class="col">
                <input name="age" id="age" class="form-control" >
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุอายุ
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="gender-group">เพศ</label>
            </div>
            <div class="col" id="gender-group">
                <input id="male" type="radio" name="gender" value="Male">
                <label for="male">Male</label>
                <input id="female" type="radio" name="gender" value="Female">
                <label for="female">Female</label>
                <div class="valid-feedback " >
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดเลือกเพศ
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="photo">รูป</label>
            </div>
            <div class="col">
                <input name="photo" class="form-control" id="photo" type="file">
                <div class="valid-feedback " >
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดใส่รูป
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="address">ที่อยู่</label>
            </div>
            <div class="col">
                <textarea class="form-control" id="address" name="address" rows="3" cols="35"></textarea>
                <div class="valid-feedback " >
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดใส่ที่อยู่
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="fav-color">สีที่ชอบ</label>
            </div>
            <div class="col">
                <select name="fav_color" class="form-select" id="fav-color">
                <option value="">-- กรุณาเลือก --</option>
                <option value="red">สีแดง</option>
                <option value="blue">สีน้ำเงิน</option>
                <option value="green">สีเขียว</option>
                </select>
                <div class="valid-feedback " >
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดเลือกสีที่ชอบ
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="fav-music">เพลงที่ชอบ</label>
            </div>
            <div class="col" id="fav-music-group">
                <input id="EDM" type="radio" name="fav_music" value="EDM">
                <label for="EDM">EDM</label>
                <input id="classic" type="radio" name="fav_music" value="classic">
                <label for="classic">คลาสสิค</label>
                <input id="other" type="radio" name="fav_music" value="Other">
                <label for="other">อื่นๆ</label>
                <div class="valid-feedback " >
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดเลือกเพลงที่ชอบ
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col" id="privacy-group">
                <input id="privacy" type="checkbox" name="privacy" value="True">
                <label for="privacy">ยินยอมให้เก็บข้อมูล</label>
                <div class="valid-feedback " >
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดกดปุ่มให้ความยินยอมให้เก็บข้อมูล
                </div>
            </div>
        </div>

        <div class="row mt-2" id="button">
            <div class="col">
                <button type="reset" class="btn btn-light" value="Reset" id="reset-button" >Reset</button>
            </div>
            <div class="col d-flex justify-content-end">
                <button type="submit" class="btn btn-success" onclick="clickme()">Submit</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        let clickme = function (){
            // ชื่อ
            let fname = document.getElementById('fname')
            if(fname.value == ""){
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
            } else {
                fname.classList.remove('is-invalid')
                fname.classList.add('is-valid')
            }

            //นามสกุล
            let lname = document.getElementById('lname')
            if(lname.value == ""){
                lname.classList.remove('is-valid')
                lname.classList.add('is-invalid')
            } else {
                lname.classList.remove('is-invalid')
                lname.classList.add('is-valid')
            }

            //วันเกิด
            let birthday = document.getElementById('birthday')
            if(birthday.value == ""){
                birthday.classList.remove('is-valid')
                birthday.classList.add('is-invalid')
            } else {
                birthday.classList.remove('is-invalid')
                birthday.classList.add('is-valid')
            }

            //อายุ
            let age = document.getElementById('age')
            if(age.value == ""){
                age.classList.remove('is-valid')
                age.classList.add('is-invalid')
            } else {
                age.classList.remove('is-invalid')
                age.classList.add('is-valid')
            }

            let genderChecked = document.querySelector('input[name="gender"]:checked')
            let genderGroup = document.getElementById('gender-group')

            let validMsggender = genderGroup.querySelector('.valid-feedback')
            let invalidMsggender = genderGroup.querySelector('.invalid-feedback')

            // display = 'none' (ซ่อน)
            validMsggender.style.display = 'none'
            invalidMsggender.style.display = 'none'

            if (genderChecked == null) {
                genderGroup.classList.remove('is-valid')
                genderGroup.classList.add('is-invalid')

                // display = 'block' (แสดง)
                invalidMsggender.style.display = 'block'
            } else {
                genderGroup.classList.remove('is-invalid')
                genderGroup.classList.add('is-valid')

                validMsggender.style.display = 'block'
            }

            //รูป
            let photo = document.getElementById('photo')
            if(photo.value == ""){
                photo.classList.remove('is-valid')
                photo.classList.add('is-invalid')
            } else {
                photo.classList.remove('is-invalid')
                photo.classList.add('is-valid')
            }

            //ที่อยู่
            let address = document.getElementById('address')
            if(address.value == ""){
                address.classList.remove('is-valid')
                address.classList.add('is-invalid')
            } else {
                address.classList.remove('is-invalid')
                address.classList.add('is-valid')
            }

            //สีที่ชอบ
            let fav_color = document.getElementById('fav-color')
            if(fav_color.value == ""){
                fav_color.classList.remove('is-valid')
                fav_color.classList.add('is-invalid')
            } else {
                fav_color.classList.remove('is-invalid')
                fav_color.classList.add('is-valid')
            }

            //เพลงที่ชอบ
            let favmusicChecked = document.querySelector('input[name="fav-music"]:checked')
            let favmusicGroup = document.getElementById('fav-music-group')

            let validMsgfavmusic = favmusicGroup.querySelector('.valid-feedback')
            let invalidMsgfavmusic = favmusicGroup.querySelector('.invalid-feedback')

            validMsgfavmusic.style.display = 'none'
            invalidMsgfavmusic.style.display = 'none'

            if (favmusicChecked == null) {
                favmusicGroup.classList.remove('is-valid')
                favmusicGroup.classList.add('is-invalid')

                invalidMsgfavmusic.style.display = 'block'
            } else {
                favmusicGroup.classList.remove('is-invalid')
                favmusicGroup.classList.add('is-valid')

                validMsgfavmusic.style.display = 'block'
            }

            // การยินยอม
            let privacy = document.getElementById('privacy')
            let privacyGroup = document.getElementById('privacy-group')

            let validMsgPrivacy = privacyGroup.querySelector('.valid-feedback')
            let invalidMsgPrivacy = privacyGroup.querySelector('.invalid-feedback')

            validMsgPrivacy.style.display = 'none'
            invalidMsgPrivacy.style.display = 'none'

            if (!privacy.checked) {
                privacyGroup.classList.remove('is-valid')
                privacyGroup.classList.add('is-invalid')

                invalidMsgPrivacy.style.display = 'block'
            } else {
                privacyGroup.classList.remove('is-invalid')
                privacyGroup.classList.add('is-valid')

                validMsgPrivacy.style.display = 'block'
            }
        }

        let myfunc = (callback) => {
            callback("in Callback")
        }

        callme = (param) => {
            console.log(param)
        }

        myfunc(callme)

        // let myvar1 = 1
        // let myvar2 = "1"
        // myvar2 = parseInt(myvar2)

        // console.log(myvar2 + myvar1 +"\n\n\ntest")
        // console.log(1 == '1')
    </script>
@endpush
