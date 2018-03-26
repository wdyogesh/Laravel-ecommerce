@extends('admin.layout.admin')
@section('content')
    <h3>Add Product</h3>
    <div class="row" style="text-align: left">
        <div class="col-lg-8 col-lg-offset-1">
            {!! Form::open(['route' => 'product.store', 'method' => 'post' , 'files'=>true]) !!}
            <div class="form-group">
                {{form::label('name','Name',['class'=>'control-label'])}}
                {{form::text('name', null ,['class'=>'form-control','placeholder'=>'Enter Product Name'])}}
            </div>
            <div class="form-group">
                {{form::label('description','Description')}}
                {{form::text('description',null ,['class'=>'form-control','placeholder'=>'Enter Prodcut Description'])}}
            </div>
            <div class="form-group">
                {{form::label('size','Size')}}
                {{form::select('size' , ['small' => 'Small', 'medium' => 'Medium' , 'large' => 'Large'], '' ,['class'=>'form-control','placeholder'=>'Select Size'])}}
            </div>
            
            <div class="form-group">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price', null, ['class' => 'form-control', 'placeholder'=>'Please Enter Price']) !!}
            </div>
            
            <div class="form-group">
                {{form::label('category_id','Category')}}
                {{form::select('category_id' , $categories , '' ,['class'=>'form-control','placeholder'=>'Select Category'])}}
            </div>
            <div class="form-group">
                {{form::label('image','Image')}}
                {{form::file('image',null ,['class'=>'form-control'])}}
            </div>
            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection