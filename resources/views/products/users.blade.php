<x-app-layout>
    @extends('products.layout')
    
    @section('content')
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               <sstrong>แก้ไขข้อมูลลูกค้า</sstrong>
               <div class="pull-right">
            <a class="btn btn btn-success" href="{{ route('products.create') }}">เพิ่มข้อมูล</a>
            </div>
            </h2>
          
        </x-slot>
        
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <body>
            <section style="padding-top:60px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            {!! $dataTable->table() !!}
                        </div>
                    </div>
                </div>
            
            </section>
            {!! $dataTable->scripts() !!}
               
            </body>
      </x-app-layout>  
        {!! $products->links() !!}
            
    @endsection
    
    
    @section('script')
        <script>
    
    
        </script>
    @endsection