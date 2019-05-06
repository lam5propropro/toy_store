@extends('admin.index')
@section('content')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12 mb-2">
            <button class="btn btn-primary float-right" type="button" data-toggle="modal"
                data-target="#exampleModal">Them +</button>

        </div>
        <div class="col-md-12">
            <table id="dataTable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Ten</th>
                        <th scope="col">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sanpham as $item)
                    <tr id={{$item->id}}>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{ $item->ten}}</td>
                        <td>{{ $item->so_luong}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="them-san-pham" action="./admin/them_san_pham">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name-sp">Tên sản phẩm</label>
                            <input id="id_ten" name="ten" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name-sp">Kiểu sản phẩm</label>
                            <select id="inputState" name="kieu_sp" class="form-control">
                                <option selected value="1">Kieu 1</option>
                                <option value="2">Kieu 2</option>
                                <option value="3">Kieu 3</option>
                                <option value="4">Kieu 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name-sp">Nhà sản xuất</label>
                            <select id="id_nha_cc" name="nha_cc" class="form-control">
                                <option selected value="1">Kieu 1</option>
                                <option value="2">Kieu 2</option>
                                <option value="3">Kieu 3</option>
                                <option value="4">Kieu 4</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name-sp">Chất liệu chính</label>
                            <input id="id_chat_lieu_chinh" name="chat_lieu_chinh" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name-sp">Số lượng</label>
                            <input id="id_so_luong" name="so_luong" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name-sp">Giá bán</label>
                            <input id="id_gia_ban" name="gia_ban" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name-sp">Giá nhập</label>
                            <input id="id_gia_nhap" name="gia_nhap" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name-sp">Hình ảnh</label>
                            <input id="id_hinh_anh" name="hinh_anh" class="form-control" type="text">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="themSanPham()">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
    <script>
        function themSanPham(){
            document.getElementById("them-san-pham").submit();
        }
    </script>
@endsection