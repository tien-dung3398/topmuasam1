@extends('admin.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm thương hiệu sản phẩm
                        </header>
                         @if(session()->has('mess'))
                            <p style="color:red">{{session()->get('mess')}}</p>
                         @endif
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{route('brand.store')}}" method="post">
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu</label>
                                <input type="text" name="name" class="form-control"  id="slug" placeholder="Tên danh mục" value="{{old('name')}}">
                                    <p style="color:red"> {{$errors->has('name') ? $errors->first('name') : ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="desc" id="exampleInputPassword1" placeholder="Mô tả danh mục" >{{old('desc')}}</textarea>
                                    <p style="color:red"> {{$errors->has('desc') ? $errors->first('desc') : ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="status" class="form-control input-sm m-bot15">
                                            <option value="0">Hiển thị</option>
                                            <option value="1">Ẩn</option>                          
                                    </select>
                                </div>
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm thương hiệu</button>
                                </form>
                            </div>

                        </div>
                    </section>
            </div>
@endsection