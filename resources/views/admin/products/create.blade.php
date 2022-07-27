@extends('layout.master')
@section('title', 'Product')
@section('content-title', 'product')

@section('content')

<form class="row g-3 p-4" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-10">
          <label for="inputEmail4" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="inputEmail4">
        </div>
                
        <div class="col-md-10">
          <label for="inputZip" class="form-label">Giá</label>
          <input type="text" name="price" class="form-control" id="inputZip">
        </div>
          <div class="col-md-10">
            <label for="formFileSm" class="form-label">Ảnh</label>
            <input class="form-control form-control" name="thumbnail_url" id="formFileSm" type="file">
          </div>
        <div class="col-12 mt-4">
            <label class="visually-hidden" for="inlineFormSelectPref">Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault1"checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  Kích hoạt
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="1" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                  Chưa kích hoạt
                </label>
              </div>
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-success mt-4">Thêm</button>
        </div>
      </form>
@endsection