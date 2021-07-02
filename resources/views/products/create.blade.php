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
    <div class="" style="margin-top: 0.3cm"
    <form wire:submit.prevent="updatePassword">
        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
          <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-400">
   
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name" >
                ชื่อร้านลูกค้า
            </label>
            <input class="border-gray-300 focus:border-indigo-300 focus:ring
            focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
            id="storename" name="storename" type="text" placeholder="ชื่อร้านลูกค้า">
                </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name"style="margin-top: 5px">ชื่อลูกค้า</label>
            <input class="border-gray-300 
            focus:border-indigo-300 focus:ring
             focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
             id="name" type="text" name="name" placeholder="ชื่อลูกค้า" >
        </div>

        <div class="col-span-6 sm:col-span-4">
            <div class="form-group">
                <label class="block font-medium text-sm text-gray-700" for="name"style="margin-top: 5px">ที่อยู่</label>
                <textarea class="form-control" style="height:100px" name="address" placeholder="ที่อยู่"></textarea>
            </div>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name"style="margin-top: 5px">เบอร์โทร</label>
            <input class="border-gray-300 
            focus:border-indigo-300 focus:ring
             focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
             id="number" name="number" type="text"placeholder="เบอร์โทร" >
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name"style="margin-top: 5px">link</label>
            <input class="border-gray-300 
            focus:border-indigo-300 focus:ring
             focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
             id="link" name="link" type="text"placeholder="link" >
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name"style="margin-top: 5px">sn</label>
            <input class="border-gray-300 
            focus:border-indigo-300 focus:ring
             focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
             id="sn" name="sn" type="text"placeholder="sn" >
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name"style="margin-top: 5px">code</label>
            <input class="border-gray-300 
            focus:border-indigo-300 focus:ring
             focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
             id="code" name="code" type="text"placeholder="code" >
        </div>

        <form  action="/action_page.php">
             <label style="margin-top: 0.2cm" class="block font-medium text-sm text-gray-700" for="name"style="margin-top: 5px">วันที่</label>
            <input type="datetime-local" id="time" name="time">
          </form>

        <div class="input-group mb-3" style="margin-top: 2.5ch">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">สถานะ</label>
            </div>
            <select class="custom-select" id="st" name="st">
                <option value=""></option>
              <option value="ONLINE">ONLINE</option>
              <option value="ONLINE">OFFLINE</option>
            </select>
          </div>
        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">LOGO</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input"  id="image" name="image" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">LOGO</label>
            </div>
          </div>
          
          
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">เพิ่ม</button>
        </div>
    </div>
</div>
</div>
</form>

</form>
</x-app-layout>
@endsection