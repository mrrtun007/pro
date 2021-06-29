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
    
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
     <form>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ชื่อร้านค้า:</strong>
                    <input type="text" name="storename" value="{{ $product->storename }}" class="form-control" placeholder="ชื่อร้านค้า">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ชื่อลูกค้า:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ที่อยู่:</strong>
                    <textarea class="form-control" style="height: 100px" name="address"   placeholder="address">{{ $product->address }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>เบอร์โทร:</strong>
                    <input type="text" name="number" value="{{ $product->number }}" class="form-control" placeholder="number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>link:</strong>
                    <input type="text" name="link" value="{{ $product->link }}" class="form-control" placeholder="link">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sn:</strong>
                    <input type="text" name="sn" value="{{ $product->sn }}" class="form-control" placeholder="sn">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>code:</strong>
                    <input type="text" name="code" value="{{ $product->code }}" class="form-control" placeholder="code">
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
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/image/{{ $product->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-success">แก้ไข</button>
            </div>
        </div>
     
    </form>
</x-app-layout>
@endsection