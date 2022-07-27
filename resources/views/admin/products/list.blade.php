@extends('layout.master')
@section('title', ' List Product')
@section('content-title',  ' list product')

@section('content')
    <a class="m-2 btn btn-info" href="{{route('products.create')}}">Thêm</a>
    <form action="" method="get">
        <input type="text" class="" value="" name="serach" placeholder="Tìm kiếm">
    </form>
    <table class="table table-light ">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>IMG</th>
                <th>Trạng thái</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($db as $index => $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}đ</td>
                    <td><img src="{{asset($product->thumbnail_url )}}" alt="" width="100"></td>
               
                    
                    @if ($product->status == 1)
                        <td >
                            <a class="btn btn-outline-danger" name="" href="{{route('products.status', $product->id)}}">Không kích hoạt</a>
                            </td>
                    @elseif ($product->status == 0)
                        <td>
                            <a class="btn btn-outline-success" name="st" href="{{route('products.status', $product->id)}}">Kích hoạt</a>
                           </td>
                    @endif
         
                    <td>
                        <form action="{{route('products.delete', $product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm mt-2">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$db->links()}}
@endsection
