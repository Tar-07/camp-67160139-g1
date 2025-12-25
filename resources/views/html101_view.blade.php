@extends('template.default')
@section('content')
<label>ชื่อ</label>
<input value="{{ $fname }}" readonly class="form-control">
<label>นามสกุล</label>
<input value="{{ $lname }}" readonly class="form-control">
<label>วันเดือนปีเกิด</label>
<input value="{{ $birthday }}" readonly class="form-control">
<label>อายุ</label>
<input value="{{ $age }}" readonly class="form-control">
<label>เพศ</label>
<input value="{{ $gender }}" readonly class="form-control">
<label>รูป</label>
<input value="{{ $photo }}" readonly class="form-control">
<label>ที่อยู่</label>
<input value="{{ $address }}" readonly class="form-control">
<label>สีที่ชอบ</label>
<input value="{{ $fav_color }}" readonly class="form-control">
<label>เพลงที่ชอบ</label>
<input value="{{ $fav_music }}" readonly class="form-control">
<label>ความยินยอมเก็บข้อมูล</label>
<input value="{{ $privacy }}" readonly class="form-control">
@endsection
