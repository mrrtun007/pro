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
        <div class="" style="margin-top: 0.3cm"
    <form wire:submit.prevent="updatePassword">
        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
          <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-400">
     <form>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name" >
                ชื่อร้านลูกค้า
            </label>
            <input class="border-gray-300 focus:border-indigo-300 focus:ring
            focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
            id="storename" name="storename" type="text" value="{{ $product->storename }}" class="form-control" placeholder="ชื่อร้านลูกค้า">
                </div>

           <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name" >
                ชื่อลูกค้า
            </label>
            <input class="border-gray-300 focus:border-indigo-300 focus:ring
            focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
            id="name" name="name" type="text" value="{{ $product->name }}" class="form-control" placeholder="ชื่อลูกค้า">
                </div>
           
        <div class="col-span-6 sm:col-span-4">
            <div class="form-group">
                <label class="block font-medium text-sm text-gray-700" for="name"style="margin-top: 5px">ที่อยู่</label>
                <textarea class="form-control" style="height:100px" id="address" name="address" placeholder="ที่อยู่"> {{ $product->address }}</textarea>
            </div>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name" >
                เบอร์โทร
            </label>
            <input class="border-gray-300 focus:border-indigo-300 focus:ring
            focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
            id="number" name="number" type="text" value="{{ $product->number }}" class="form-control" placeholder="เบอร์โทร">
                </div>
            <div class="col-span-6 sm:col-span-4">
                    <label class="block font-medium text-sm text-gray-700" for="name" >
                        link
                    </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
                    id="link" name="link" type="text" value="{{ $product->link }}" class="form-control" placeholder="link">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700" for="name" >
                                sn
                            </label>
                            <input class="border-gray-300 focus:border-indigo-300 focus:ring
                            focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
                            id="sn" name="sn" type="text" value="{{ $product->sn }}" class="form-control" placeholder="sn">
                                </div>
                     <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700" for="name" >
                                        code
                            </label>
                                    <input class="border-gray-300 focus:border-indigo-300 focus:ring
                                    focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" 
                                    id="code" name="code" type="text" value="{{ $product->code }}" class="form-control" placeholder="code">

                                        </div>
                                        <form  action="/action_page.php">
                                            <label style="margin-top: 0.2cm" class="block font-medium text-sm text-gray-700" for="name"style="margin-top: 5px">วันที่</label>
                                           <input type="datetime-local" id="time" name="time" value="{{ $product->time }}">
                                         </form>
            <div class="input-group mb-3" style="margin-top: 2.5ch">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">สถานะ</label>
            </div>
            <select class="custom-select" id="st" name="st">
              <option  >{{ $product->st }}</option>
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
              <label class="custom-file-label" for="inputGroupFile01">{{ $product->image }}</label>
            </div>
          </div>
          <img src="/image/{{ $product->image }}" width="300px">
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-success">แก้ไข</button>
            </div>
        </div>
     
    </form>
</x-app-layout>
@endsection