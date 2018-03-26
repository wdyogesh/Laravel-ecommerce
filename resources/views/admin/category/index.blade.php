@extends('admin.layout.admin')
@section('body')
    <div class="navbar">
    	<a class="navbar-brand" href="#">Categories</a>
    	<ul class="nav navbar-nav">
    		@if (!empty($categories))
                @foreach ($categories as $category)
                    <li class="active"><a href="{{ route('category.show',$category->id) }}">{{$category->name}}</a></li>
                @endforeach
    		@endif
        </ul>
        {{--Model Value goes here --}}
        <a class="btn btn-primary" data-toggle="modal" href="#category-model">Add Category</a>
        <div class="modal fade" id="category-model">
        	<div class="modal-dialog">
                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add new Category</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::label('name', 'Category:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Add new category'])!!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
                {!! Form::close() !!}

        	</div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
   
    @if (!empty($products))
        <section><h3>Products</h3></section>
        <table class="table table-hover">
        	<thead>
        		<tr>
        			<th>Products</th>
        		</tr>
        	</thead>
        	<tbody>
        		@forelse ($array as $element)
                    <tr>
                        <td>{{$products->name}}</td>
                    </tr>
        		@empty

        		@endforelse

        	</tbody>
        </table>
    @endif
@endsection