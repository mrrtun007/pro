<x-app-layout>
@extends('products.layout')
@section('content')
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <sstrong>แก้ไขข้อมูลลูกค้า</sstrong>
           <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('products.index') }}"> กลับ</a>
        </div>
        </h2>
      
    </x-slot>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
   </div>
@endif
     <div class="container">
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 "style="margin-top:20px">
            <div class="input-group input-group-sm mb-2">
                <span class="input-group-text">ชื่อร้านค้า</span>
                <input type="text" aria-label="First name" class="form-control"  name="storename" class="form-control" placeholder="ชื่อร้านค้า">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อลูกค้า:</strong>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" class="form-control" placeholder="ชื่อลูกค้า">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ที่อยู่:</strong>
                <textarea class="form-control" style="height:100px" name="address" placeholder="ที่อยู่"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>เบอร์โทร:</strong>
                <input type="text"  name="number"class="form-control" placeholder="เบอร์โทร">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>link:</strong>
                <input type="text"  name="link"class="form-control" placeholder="ลิงก์">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>sn:</strong>
                <input type="text"  name="sn"class="form-control" placeholder="เลขซีเรียลนัมเบอร์">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>code:</strong>
                <input type="text"  name="code"class="form-control" placeholder="รหัสลับ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="browser">สถานะ:</label>

                <input list="browserdata" id="st" name="st" size="100" autocomplete="off" />
                
                <datalist id="browserdata">
                  <option>ONLINE</option>
                  <option>OFFLINE</option>
                </datalist>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="รูปภาพ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">เพิ่ม</button>
        </div>
    </div>
     
</form>
</div>
</x-app-layout>
@endsection