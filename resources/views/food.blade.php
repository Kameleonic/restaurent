<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

                <!-- // Loop through the food on the menu  -->
                @foreach ($data as $data)
                    <div class="item">
                        <div style="background-image: url('/foodimage/{{ $data->image }}')" class="card">
                            <div class="price">
                                <h6>£{{ $data->price }}</h6>
                            </div>
                            <div class="scroll-to-section">
                                <a href="#reservation">Order> <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                            <div class="info">
                                <h1 class="title">{{ $data->title }}</h1>
                                <p class="description">{{ $data->description }}</p>
                                <div class="h-20">

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->