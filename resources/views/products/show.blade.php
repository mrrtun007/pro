<x-app-layout>
@extends('products.layout')
@section('content')

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <sstrong>ข้อมูลลูกค้า</sstrong>
           <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('products.index') }}"> กลับ</a>
        </div>
        </h2>
        
    </x-slot>

    <div class="container" >
                
<a target="_blank" href="/image/{{ $product->image }}">
    <img src="/image/{{ $product->image }}"  alt="Forest" style="width:500px">
  </a>

                <div class="row">
                    <div class="col-25" style="margin-left: 25ch" >
                <strong>ชื่อร้านค้า:</strong>
                {{ $product->storename }}
                </div>
                </div>
       
                <div class="row">
                <strong>ชื่อลูกค้า:</strong>
                {{ $product->name }}
            </div>
        
                <div class="row">
                <strong>ที่อยู่:</strong>
                {{ $product->address }}
            </div>

                <div class="row">
                <strong>เบอร์โทร:</strong>
                {{ $product->number }}
            </div>

                <div class="row">
                <strong>link:</strong>
                {{ $product->link }}
          </div>

                <div class="row">
                <strong>sn:</strong>
                {{ $product->sn }}
          </div>
                <div class="row">
                <strong>code:</strong>
                {{ $product->code }}
            </div>
            <div class="row">
                <strong>สถานะ:</strong>
                {{ $product->st }}
            </div>
          
</x-app-layout>
@endsection
