@extends('layout.index')
@section('css')
    <link rel="stylesheet" href="./css/chiTietSP.css">
@endsection
@section('content')
    <div class="container-fluid container_fluid" id="watch">
        <div class="row">
            <div class="card col-xs-5 col-sm-6 col-md-5 col-lg-5 col-xm-2" >
                <div class=" w-100 card-img-top" style="background-image: url('images/7.jpg');">
                </div>
                <hr>
                <div class="images">
                    <ul>
                            <div class="card-img-top card_images_one_five"
                            style="background-image: url('images/2.jpg'); ">
                            </div>

                            <div class="card-img-top card_images_one_five"
                            style="background-image: url('images/5.jpg'); ">
                            </div>

                            <div class="card-img-top card_images_one_five"
                            style="background-image: url('images/3.jpg'); ">
                            </div>

                            <div class="card-img-top card_images_one_five"
                            style="background-image: url('images/4.jpg'); ">
                            </div>

                            <div class="card-img-top card_images_one_five"
                            style="background-image: url('images/1.jpg');">
                            </div>
                    </ul> 
                </div>
                <hr style="margin-bottom: 34px;">         
                <ul>
                        <li>
                            <span class="label_share">Chia sẻ </span> 
                        </li>
                        <li>
                            <a href="#"><button type="button" class="btn btn-primary btn-sm icon">
                                <i class="fab fa-facebook-f"></i></button></a>
                        </li>

                        <li>
                            <a href="#"><button type="button" class="btn btn-danger btn-sm icon">
                                <i class="fab fa-youtube"></i></button></a>
                        </li>
                        <li>
                            <a href="#"><button type="button" class="btn btn-info btn-sm icon">
                                <i class="fab fa-twitter"></i></button></a>
                        </li>
                        <li>
                            <a href="#"><button type="button" class="btn btn-warning btn-sm icon">
                                <i class="fab fa-google-plus-g"></i></button></a>
                        </li>
                        <li>
                                <span class="xoec">|</span>
                        </li>
                        <li>
                            <span class="yeuthich">Yêu thích </span> 
                        </li>
                        <li>
                                <a href="#" class="tym">
                                    <i class="far fa-heart"></i><i class="fas fa-heart"></i><i class="fas fa-heartbeat"></i>
                                </a> 

                        </li>

                </ul>                
            </div>

            <div class="card col-xs-7 col-sm-6 col-md-7 col-lg-7 col-xm-2 p-0">
                <div class="card-body">
                    <div style="height: 60px;">
                            <h4 class="mb-0"">Máy bay trực thăng di chuyển phát nhạc</h4>
                    </div>
                    <div>
                        <span class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </span>
                    </div>
                    <hr>
                    <div class="alert alert-secondary" role="alert">
                            <span class="gia">1.150.000₫</span>
                            <span class="giamGia">2.000.000₫</span>
                            <span class="badge badge-danger ">GIẢM 44%</span>
                    </div>

                    <hr style="margin-bottom:5px;">     
                     <span class="vanChuyen">Vận chuyển</span>
                    <br>
                     <span class="free"><i class="fab fa-foursquare"style="color:green">ree</i> Miễn Phí Vận Chuyển khi đạt mức giá đơn hàng tối thiểu.</span>
                    <br>
                    <span class="ship"><i class="fas fa-shipping-fast"style="color:red;font-size:22px" ></i> Nhận hàng trong vòng 24 giờ (trừ Chủ Nhật và ngày Lễ).</span>

                    
                    <hr style="margin-bottom:5px;margin-top:13px">
                    <span class="vanChuyen">Số lượng</span>
                    <div style="display:flex;margin-top:8px;">
                         
                        <button type="button" class="btn btn-primary btn_x">-</button>
                        <input type="text" class="form-control input_x" value="1">
                        <button type="button" class="btn btn-primary btn_x">+</button>
                        <span class="sanPham">380 sản phẩm có sẵn <i class="fas fa-check-double" style="color:green"></i></span>
                    </div>
                    <hr style="margin-top:23px;margin-bottom:24px;">
                    <div style="display:flex">
                            <button class="btn btn-danger btn_them" type="button"> Thêm vào giỏ <i class="fas fa-cart-plus" style="margin-right:8px;"></i></button>
                            <button class="btn btn-danger btn_mua" type="button">Mua ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection