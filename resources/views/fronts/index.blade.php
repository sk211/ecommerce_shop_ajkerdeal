@extends('fronts.master')


@section('content')



{{-- side baar start --}}

@include('fronts.incl.nav')





<!-- product contant start -->
<!-- product-item-1-start -->

<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="300px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button onclick="location.href='single.php'"class="btn btn-warning btn-small">order</button></>
                                <button tyhpe="button" class="btn btn-danger btn-small btn-number">Add to Cart</button>

                            </div>

                        </div>
                    </div>
                    <!-- extra start -->


                    <!-- extra end -->
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-1-end-->



<div class="clear"></div>

<!-- product-item-2-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/prent/print-slider1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/prent/print-slider2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/prent/print-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/prent/print1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/prent/print2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/prent/print3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/prent/print4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/prent/print1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/prent/print2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-2-end -->
<div class="clear"></div>


<!-- product-item-3-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/polo-shirt/polo-slider1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/polo-shirt/polo-slider2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/polo-shirt/polo-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/polo-shirt/polo1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/polo-shirt/polo2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/polo-shirt/polo3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/polo-shirt/polo4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/polo-shirt/polo1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/polo-shirt/polo2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-3-end -->
<div class="clear"></div>



<!-- product-item-4-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/watch/watch-slider1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/watch/watch-slider2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/watch/watch-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/watch/watch1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/watch/watch2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/watch/watch3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/watch/watch4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/watch/watch1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/watch/watch2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>

                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-4-end -->
<div class="clear"></div>


<!-- product-item-5-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/three-pcs/threepic-slider1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/three-pcs/threepic-slider2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/three-pcs/threepic-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/three-pcs/threepic.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/three-pcs/threepic1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/three-pcs/threepic3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/three-pcs/threepic4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/three-pcs/threepic.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/three-pcs/threepic1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-5-end -->
<div class="clear"></div>

<!-- product-item-6-start geget-->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/geget/graget-slider1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/geget/graget-slider2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/geget/graget-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/geget/graget.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/geget/graget1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/geget/graget3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/geget/graget3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/geget/graget.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/geget/graget.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-6-end -->
<div class="clear"></div>

<!-- product-item-7-start shait-->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/shart/shart-slider1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/shart/shart-slider2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/shart/shart-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/shart/shart1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/shart/shart2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/shart/shart3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/shart/shart4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/shart/shart1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/shart/shart1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-7-end -->
<div class="clear"></div>

<!-- product-item-8-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/fan/fan-slider1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/fan/fan-slider2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/fan/fan-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/fan/fan1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/fan/fan2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/fan/fan3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/fan/fan4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/fan/fan1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/fan/fan4.jpg">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-8-end -->
<div class="clear"></div>


<!-- product-item-9-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/worldcup/world-slider1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/worldcup/world-slider2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/worldcup/world-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/worldcup/world1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/worldcup/world2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/worldcup/world3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/worldcup/world4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/worldcup/world2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/worldcup/world4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-9-end -->
<div class="clear"></div>


<!-- product-item-10-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-10-end -->
<div class="clear"></div>



<!-- product-item-11-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-11-end -->
<div class="clear"></div>


<!-- product-item-12-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-12-end -->
<div class="clear"></div>



<!-- product-item-13-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-13-end -->
<div class="clear"></div>



<!-- product-item-14-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-14-end -->
<div class="clear"></div>



<!-- product-item-15-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-15-end -->
<div class="clear"></div>



<!-- product-item-16-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-16-end -->
<div class="clear"></div>



<!-- product-item-17-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-17-end -->
<div class="clear"></div>


<!-- product-item-18-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-18-end -->
<div class="clear"></div>


<!-- product-item-19-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-19-end -->
<div class="clear"></div>

<!-- product-item-20-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6 col-sm-3 col-xs-3" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-20-end -->
<div class="clear"></div>

<!-- product-item-21-start -->
<div class="container-fluid" id="product_item">
    <div class="row">
        <div class="col-md-2 col-sm-12 col-xs-12" id="product_menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">থিমেটিক</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">টেক্সট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ডিজাইন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">সলিড কালার </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">১৯৯ টাকায় টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">ফুল-স্লীভ টি-শার্ট</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">কম্বো অফার </a>
                </li>
            </ul>


        </div>
        <div class="col-md-4 col-sm-12 col-xs-12" id="product_slider">
            <!-- slider start -->

            <div class="card" width="340px" heighr="480px">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <!-- + -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/t-shart-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}front/images/boy/slider/boy-slider3.jpg" alt="Third slide">
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- pdocut slider start -->

        </div>
        <div class="col-md-6 col-sm-12 col-xs-12" id="product_items">
            <div class="container">
                <div class="row">


                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/boy/slider/boy-3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                    <div class="card" style="height:276px; width:190px; margin-top:3px;">
                        <img class="card-img-top animated zoomIn" src="{{asset('/')}}front/images/boy/slider/boy-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:256px; width:190px; margin-top:3px;">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height:256px; width:190px; margin-top:3px; ">
                        <img class="card-img-top" src="{{asset('/')}}front/images/t-shart-6.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <span class="text-center font-weight-bold"> Baby Bouncer</span>
                            <p class="card-text text-center text-primary font-weight-bold">৳ 160 <del style="color:red">180</del>
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-warning btn-small">order</button>
                                <button class="btn btn-danger btn-small">Add to Cart</button>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-item-21-end -->
<div class="clear"></div>

    
@endsection