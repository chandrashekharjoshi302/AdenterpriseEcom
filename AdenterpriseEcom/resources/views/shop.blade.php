@extends("layouts.base");
@push('styles')
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">
    <style>
        nav svg{
            height: 20px;
        }
        .product-box .product-details h5 {            
            width: 100%;	
        }
    </style>
@endpush
@section("content")

<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Shop</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.htm">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 category-side col-md-4">
                <div class="category-option">
                    <div class="button-close mb-3">
                        <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                    </div>
                    <div class="accordion category-name" id="accordionExample">
                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Brand
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">
                                        @foreach ($brands as $brand)
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br{{$brand->id}}" name="brands" @if(in_array($brand->id,explode(',',$q_brands))) checked="checked" @endif value="{{$brand->id}}" type="checkbox" onchange="filterProductsByBrand(this)">
                                                <label class="form-check-label">{{$brand->name}}</label>
                        
                        
                                                <p class="font-light">({{$brand->products->count()}})</p>
                                            </div>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-color">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    Color
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-price">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour">Price</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse show"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="range-slider category-list">
                                        <input type="text" class="js-range-slider" id="js-range-price" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-price">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive">
                                    Size
                                </button>
                            </h2>

                            <div id="collapseFive" class="accordion-collapse collapse show"
                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <a href="javascript:void(0)">xs</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">sm</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">md</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">lg</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">xl</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">xxl</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix">
                                    Category
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">
                                        @foreach ($categories as $category)
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" id="ct{{$category->id}}" name="categories" type="checkbox" @if(in_array($category->id,explode(',',$q_categories))) checked="checked" @endif  value="{{$category->id}}" onchange="filterProductsByCategory(this)">
                                                    <label class="form-check-label">{{$category->name}}</label>
                        
                        
                                                    <p class="font-light">({{$category->products->count()}})</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven">
                                    Discount Range
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse show"
                                aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault19">
                                                <label class="form-check-label" for="flexCheckDefault19">5% and
                                                    above</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault20">
                                                <label class="form-check-label" for="flexCheckDefault20">10% and
                                                    above</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault21">
                                                <label class="form-check-label" for="flexCheckDefault21">20% and
                                                    above</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="category-product col-lg-9 col-12 ratio_30">

                <div class="row g-4">
                    <!-- label and featured section -->
                    <div class="col-md-12">
                        <ul class="short-name">


                        </ul>
                    </div>

                    <div class="col-12">
                        <div class="filter-options">
                            <div class="select-options">
                                <div class="page-view-filter">
                                    <div class="dropdown select-featured">
                                        <select class="form-select" name="orderby" id="orderby">
                                            <option value="-1" {{ $order==-1? 'selected':''}}>Default</option>
                                            <option value="1" {{ $order==1? 'selected':''}}>Date, New To Old</option>
                                            <option value="2" {{ $order==2? 'selected':''}}>Date, Old To New</option>
                                            <option value="3" {{ $order==3? 'selected':''}}>Price, Low To High</option>
                                            <option value="4" {{ $order==4? 'selected':''}}>Price, High To Low</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="dropdown select-featured">
                                    <select class="form-select" name="size" id="pagesize">
                                          <option value="12" {{ $size == 12 ? 'selected':'' }}>12 Products Per Page</option>
                                          <option value="24" {{ $size == 24 ? 'selected':'' }}>24 Products Per Page</option>                       
                                          <option value="52" {{ $size == 52 ? 'selected':'' }}>52 Products Per Page</option>
                                          <option value="100" {{ $size == 100 ? 'selected':'' }}>100 Products Per Page</option>
                                    </select>
                              </div>
                            </div>
                            <div class="grid-options d-sm-inline-block d-none">
                                <ul class="d-flex">
                                    <li class="two-grid">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid-2.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="three-grid d-md-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid-3.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="grid-btn active d-lg-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="list-btn">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/list.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- label and featured section -->

                <!-- Prodcut setion -->
                {{-- <div
                    class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">

                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/nihil-beatae-sit-sed.html">
                                        <img src="assets/images/fashion/product/front/12.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/nihil-beatae-sit-sed.html">
                                        <img src="assets/images/fashion/product/back/12.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Cupiditate Minus</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/nihil-beatae-sit-sed.html" class="font-default">
                                        <h5 class="ms-0">Nihil Beatae Sit Sed</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Cupiditate Minus</span>
                                        <p class="font-light">Aut et dolores ipsam dolores aspernatur. Id nostrum
                                            itaque maxime ea at inventore nam. Repudiandae dolor recusandae sint
                                            magnam praesentium.</p>
                                    </div>
                                    <h3 class="theme-color">$19</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/2.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/2.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Dolores Et</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Doloremque Quibusdam Maxime Natus</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Dolores Et</span>
                                        <p class="font-light">Hic fugiat molestiae sed. Impedit iusto nihil odio
                                            eos. Nisi et est aperiam ut non culpa amet. Nemo aut et ipsa pariatur
                                            cumque. Totam eveniet voluptatibus nostrum.</p>
                                    </div>
                                    <h3 class="theme-color">$11</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/3.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/3.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Qui Ut</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Fuga Officia Quaerat Fugiat</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Qui Ut</span>
                                        <p class="font-light">Consequuntur aperiam voluptates sequi exercitationem.
                                            Voluptatem alias consequatur soluta laborum dolor. Qui illum sint
                                            voluptate. Eos sit sed ea. Hic sunt commodi ea rem recusandae suscipit
                                            ad.</p>
                                    </div>
                                    <h3 class="theme-color">$4</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/17.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/17.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Blanditiis Error</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Nulla Sapiente Sunt Ipsam</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Blanditiis Error</span>
                                        <p class="font-light">Veritatis deleniti occaecati sint ea quis omnis
                                            voluptates. Mollitia voluptatem doloribus harum pariatur reprehenderit.
                                            Eius est natus voluptate qui voluptatum dolorem ut.</p>
                                    </div>
                                    <h3 class="theme-color">$8</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/10.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/10.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Dolores Et</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Quia Non Soluta Aut</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Dolores Et</span>
                                        <p class="font-light">Et delectus sint rerum sequi qui enim repellendus.
                                            Minus omnis autem inventore vel. Est dolore debitis id in.</p>
                                    </div>
                                    <h3 class="theme-color">$3</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/10.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/10.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Dolores Et</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Dolorem Libero Tempore Voluptatem</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Dolores Et</span>
                                        <p class="font-light">Sunt aut eveniet dolor iusto dolorem et at. Porro
                                            delectus eveniet minima et. Amet esse earum repudiandae.</p>
                                    </div>
                                    <h3 class="theme-color">$5</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/3.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/3.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Cupiditate Minus</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Non Sed Tempora Accusamus</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Cupiditate Minus</span>
                                        <p class="font-light">In saepe non rerum voluptas rerum ducimus. Et
                                            repellendus ut delectus velit voluptatibus dolores sunt minima. Nobis
                                            dicta culpa magni temporibus ea temporibus commodi.</p>
                                    </div>
                                    <h3 class="theme-color">$4</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/24.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/24.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Cupiditate Minus</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Non Tempora Commodi Et</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Cupiditate Minus</span>
                                        <p class="font-light">At quia non quas molestiae omnis id omnis. Voluptas
                                            delectus officia quidem minus repudiandae placeat. Dolorem suscipit quas
                                            ipsam tempore voluptates cumque officia.</p>
                                    </div>
                                    <h3 class="theme-color">$8</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/23.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/23.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Cupiditate Minus</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Qui Laboriosam Quas Beatae</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Cupiditate Minus</span>
                                        <p class="font-light">Dolorem nihil quia qui laudantium expedita aut dolor.
                                            Qui eligendi voluptatem autem ullam et. Voluptas nemo eum nihil aliquam
                                            eos aperiam. Numquam dolorum veniam non magnam illum odit deleniti.</p>
                                    </div>
                                    <h3 class="theme-color">$1</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/20.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/20.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Qui Ut</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Excepturi Et In Cum</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Qui Ut</span>
                                        <p class="font-light">Sed voluptatem nesciunt consequatur tempora maxime sit
                                            quae. Ea et esse sed voluptas quia eum. Culpa autem beatae aut eaque vel
                                            unde magni.</p>
                                    </div>
                                    <h3 class="theme-color">$21</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/20.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/20.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Qui Ut</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Error Itaque Debitis Commodi</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Qui Ut</span>
                                        <p class="font-light">Quos voluptates aut dolorum. Velit delectus eligendi
                                            quia est. Explicabo sit dolores laboriosam ullam voluptas.</p>
                                    </div>
                                    <h3 class="theme-color">$5</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/front/11.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product/details.html">
                                        <img src="assets/images/fashion/product/back/11.jpg"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">Cupiditate Minus</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product/details.html" class="font-default">
                                        <h5 class="ms-0">Quidem Architecto Deleniti Hic</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Cupiditate Minus</span>
                                        <p class="font-light">Sit repellat fugit recusandae voluptates et est.
                                            Similique et consequuntur alias officia eos. Quos sed temporibus magnam
                                            est quo aut. Totam at ducimus occaecati sequi sint sed enim.</p>
                                    </div>
                                    <h3 class="theme-color">$7</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div> --}}

                <div class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                    @foreach ($products as $product)                            
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="{{route('shop.product.details',['slug'=>$product->slug])}}">
                                        <img src="assets/images/fashion/product/front/{{$product->image}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="{{route('shop.product.details',['slug'=>$product->slug])}}">
                                        <img src="assets/images/fashion/product/back/{{$product->image}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye" onclick="alert('refresh'); return false;"></i>
                                            </a>
                                        </li>
                                        
                                        <form id="wishlist-form-{{ $product->id }}" method="POST" action="{{ route('wishlist.store') }}">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="product_name" value="{{ $product->name }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="price" value="{{ 10 }}">
                                        </form>
                                        
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist" onclick="submitWishlistForm({{ $product->id }})">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">{{$product->category->name}}</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="{{route('shop.product.details',['slug'=>$product->slug])}}" class="font-default">
                                        <h5 class="ms-0">{{$product->name}}</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">{{$product->category->name}}</span>
                                        <p class="font-light">{{$product->short_description}}</p>
                                    </div>
                                    <h3 class="theme-color">${{$product->regular_price}}</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{$products->links("pagination.default")}}
                {{-- {{$products->links()}} --}}
                {{-- <nav class="page-section">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Previous"
                                style="color:#6c757d;">
                                <span aria-hidden="true">
                                    <i class="fas fa-chevron-left"></i>
                                </span>
                            </a>
                        </li>


                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="shop-1.html?page=2">2</a>
                        </li>

                        <li class="page-item">
                            <a href="shop-1.html?page=2" class="page-link" aria-label="Next">
                                <span aria-hidden="true">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </li>

                    </ul>
                </nav> --}}

            </div>
        </div>
    </div>
</section>



<!-- Shop Section end -->
<!-- Subscribe Section Start -->
<section class="subscribe-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="subscribe-details">
                    <h2 class="mb-3">Subscribe Our News</h2>
                    <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                        and fantastic Products.</h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                <div class="subsribe-input">
                    <div class="input-group">
                        <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                        <button class="btn btn-solid-default" type="button" >Button</button>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="frmFilter" method="GET">
        <input type="hidden" name="page" id="page" value="{{$page}}" />
        <input type="hidden" name="size" id="size" value="{{$size}}" />  
        <input type="hidden" id="order" name="order" value="{{$order}}" />   
        <input type="hidden" id="brands" name="brands" value="{{$q_brands}}" />  
        <input type="hidden" id="categories" name="categories" value="{{$q_categories}}" />
        <input type="hidden" name="prange" id="prange" value="" />  
    </form>

 
    

    @push('scripts')
      <script>
            $("#pagesize").on("change",function(){                    
                  $("#size").val($("#pagesize option:selected").val());
                  $("#frmFilter").submit(); 
            });
      </script>
@endpush
@push('scripts')
<script>
    $("#orderby").on("change",function(){                    
          $("#order").val($("#orderby option:selected").val());
          $("#frmFilter").submit(); 
    });
</script>
@endpush
@push('scripts')
<script>        
  function filterProductsByBrand(brand){
    var brands = "";
    $("input[name='brands']:checked").each(function(){
        if(brands=="")
        {
            brands += this.value;
        }
        else{
            brands += "," + this.value;
        }
    });
    $("#brands").val(brands);
    $("#frmFilter").submit();
}



</script>


@endpush


@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

<script>        
    function filterProductsByCategory(brand){
    var categories = "";
    $("input[name='categories']:checked").each(function(){
        if(categories=="")
        {
            categories += this.value;
        }
        else{
            categories += "," + this.value;
        }
    });
    $("#categories").val(categories);
    $("#frmFilter").submit();
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
@endpush

@push('scripts')

<script>        
    $(function(){           

        var $range = $(".js-range-slider");
        instance = $range.data("ionRangeSlider");
        instance.update({
            from:{{$from}},
            to:{{$to}}
        });

        $("#prange").on("change",function(){
            setTimeout(()=>{
                $("#frmFilter").submit();
            },1000);
        });
    });
</script> 
    
@endpush

@push('scripts')
<script>
    function submitWishlistForm(productId) {
        var form = document.getElementById('wishlist-form-' + productId);
        if (form) {
            form.submit();
        } else {
            console.error("Form not found for product ID:", productId);
        }
    }
</script>
@endpush

@stack('scripts')


</section>

@endsection
<!-- Subscribe Section End -->