<!DOCTYPE html>
<html>
<head>
    <title>TRAKOOL</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>


<x-app-layout>
@extends('products.layout')

@section('content')
<x-slot name="header">
    <div class="container">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
           <sstrong>ข้อมูลลูกค้า</sstrong>
           <div class="pull-right">
        <a class="btn btn btn-success" href="{{ route('products.create') }}">เพิ่มข้อมูล</a>
        </div>
        <div class="pull-right" style="padding-right: 3ch">
            <input type="text" id="myInput"  onkeyup="myFunction()" class="form-control" placeholder="Search..." wire:model="searchTerm" title="Type in a name" />
             </div>
        </h2>
    </div>
      
    </x-slot>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="table-responsive" id=".data-table">
        <table class="table" id="myTable"  >
        <thead>
            <tr>
                <th>ชื่อร้านลูกค้า</th>
            <th>Image</th>
            <th>ชื่อลูกค้า</th>
            <th>ที่อยู่</th>
            <th>เบอร์โทร</th>
            <th>link</th>
            <th>sn</th>
            <th>code</th>
            <th>สถานะ</th>
            <th>เวลาบันทึก</th>
            <th>เวลาแก้ไข</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
    
        @foreach ($products as $product)
       <tbody>
        <tr>
            <td>{{ $product->storename }}</td>
            <td><a target="_blank" href="/image/{{ $product->image }}">
                <img src="/image/{{ $product->image }}"  alt="Forest" style="width:100px">
              </a></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->address }}</td>
            <td>{{ $product->number }}</td>
            <td>{{ $product->link }}</td>
            <td>{{ $product->sn }}</td>
            <td>{{ $product->code }}</td>
            <td>{{ $product->st }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
    </table>
    </div>
 
    {!! $products->links() !!}
  
  


@section('script')
<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  
    <script>
        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          }
        }
        </script>
@endsection
</x-app-layout>
</html>