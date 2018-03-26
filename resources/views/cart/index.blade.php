@extends('admin.layout.admin')
@section('content')
    <h3>Cart Item</h3>
    <ol>

    </ol>
    
    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Name</th>
    			<th>price</th>
    			<th>qty</th>
    			<th>size</th>
    		</tr>
    	</thead>
    	<tbody>
        @forelse ($cartItems as $cartItem)
            <tr>
                <td>{{$cartItem->name}}</td>
                <td>{{$cartItem->price}}</td>
                <td width="50px;">{{$cartItem->qty}}
                    {!! Form::open(['route' => ['cart.update',$cartItem->qty], 'method' => 'post']) !!}
                    <input name="qty" type="text" value="{{$cartItem->qty}}">
                    <input type="submit" class="btn-success btn-xs" value="update">
                    {!! Form::close() !!}
                </td>
                <td>{{$cartItem->options->has('size')?$cartItem->options->size: ''}}</td>
                <td>
                    <form action="{{ route('$cartItem.destroy',$cartItem->rowId) }}" method="post">
                        {{csrf_field}}
                        {{method_field('DELETE')}}
                        <input type="submit" class="button" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <h3>Cart is Empty </h3>
        @endforelse
        <tr>
            <td>Sub Total {{Cart::}}</td>
            <td>Tax $ {{Cart::tax()}}</td>
            <td>Grand Total $ {{Cart::total()}}</td>
            <td>Items {{Cart::count()}}</td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <button class="btn btn-success" href="{{ route('') }}">Check Out</button>
@endsection