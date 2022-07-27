@extends('client.layouts.master')

@section('client-content')
<section class="shop__area pb-65">
    <div class="shop__top grey-bg-6 pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-box d-flex">
                        <div class="product__modal-nav mr-20">
                            <nav>
                                <div class="nav nav-tabs" id="product-details" role="tablist">
                                    <a class="item nav-link " id="pro--tab" data-toggle="tab" href="" role="tab" aria-controls="pro-" aria-selected="true">
                                        <div class=" w-img">
                                            <img  src="{{asset('img/shop/product/Giuong.jpg')}}"  alt="">
                                        </div>
                                    </a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content mb-20" id="product-detailsContent">
                            <div class="tab-pane fade show " id="pro-" role="tabpanel" aria-labelledby="pro--tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="" alt="">
                                    <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-16%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-content product__modal-content-2">
                        <h4><a href="product-details.html">Giường ngủ</a></h4>
                        <div class="product__price-2 mb-25">
                        <h5><a href="#">Giá sản phẩm</a></h5>

                            <span>10.000.000 VNĐ</span>
                            <span class="old-price">11.000.000</span>
                        </div>
  
                        <div class="product__modal-form mb-30">
                            <form action="#">
                                <div class="product__price-2 mb-25">
                                    <h5><a href="#">Kích thước</a></h5>
            
                                        <span>1,5*3m</span>
                                    </div>
                                </div>
                                <div class="product__price-2 mb-25">
                                    <h5><a href="#">Chất liệu</a></h5>
            
                                        <span>Gỗ</span>
                                    </div>
                                </div>
                                <div class="pro-quan-area d-sm-flex align-items-center">
                                    <div class="product-quantity-title">
                                        <label>Số lượng</label>
                                    </div>
                                    <div class="product-quantity mr-20 mb-20">
                                        <div class="cart-plus-minus"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                    </div>
                                    <div class="pro-cart-btn">
                                        <a href="#" class="add-cart-btn mb-20">+ Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="product__tag mb-25">
                            <span>Danh mục:</span>
                            <span><a href="#">Giường,</a></span>
                            <span><a href="#">Tủ,</a></span>
                            <span><a href="#">Bàn,</a></span>                                    
                            <span><a href="#">Ghế</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="product__details-tab">
                        <div class="product__details-tab-nav text-center mb-45">
                            <nav>
                                <div class="nav nav-tabs justify-content-start justify-content-sm-center" id="pro-details" role="tablist">
                                    <a class="nav-item nav-link active" id="des-tab" data-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true">Mô tả</a>
                                    <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Đánh giá</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="pro-detailsContent">
                            <div class="tab-pane fade active show" id="des" role="tabpanel">
                                <div class="product__details-des">
                                    <p>Đồ nội thất </p>    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel">
                                <div class="product__details-review">
                                    <div class="postbox__comments">
                                        <div class="postbox__comment-title mb-30">
                                            <h3>Đánh giá</h3>
                                        </div>
                                        <div class="latest-comments mb-30">
                                            <ul>
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/blog/comments/avater-1.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>Abc</h5>
                                                                <span> Thời gian </span>
                                                            </div>

                                                            <p>Bình luận sản phẩm</p>
                                                        </div>
                                                    </div>
                                                </li>
  
                                    
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post-comments-form mb-100">
                                        <div class="post-comments-title mb-30">
                                            <h3>Đánh giá của bạn</h3>
                                            
                                        </div>
                                        <form id="contacts-form" class="conatct-post-form" action="#">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="contact-icon p-relative contacts-name">
                                                        <input type="text" placeholder="Họ tên">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="contact-icon p-relative contacts-name">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-icon p-relative contacts-email">
                                                        <input type="text" placeholder="Số điện thoại">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-icon p-relative contacts-message">
                                                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Bình luận"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <button class="os-btn os-btn-black" type="submit">Đăng bình luận</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection