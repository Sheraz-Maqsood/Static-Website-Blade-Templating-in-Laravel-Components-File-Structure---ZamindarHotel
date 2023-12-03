@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
@endpush
@section('content')

@push('preload')
     @include('layouts.partials.preload')
@endpush

 <!-- Restaurant Slider -->
 <header class="header slider">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/restaurant/4.jpg"></div>
        <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/restaurant/6.jpg"></div>
        <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/restaurant/5.jpg"></div>
    </div>
    <!-- arrow down -->
    <div class="arrow bounce text-center">
        <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
    </div>
</header>
<!-- Restaurant Content -->
<section class="rooms-page section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <div class="section-subtitle">An Experience for the Senses</div>
                <div class="section-title">The Restaurant</div>
            </div>
            <div class="col-md-12">
                <p class="mb-30">Step into The Restaurant, a culinary haven guided by the expertise of best Chefs of Lahore. Celebrated for its exquisite cuisine and authentic Pakistani ambiance, this dining destination is a tribute to the rich tapestry of Pakistani flavors. The captivating dining room showcases three open studio kitchens, allowing you to be part of the vibrant culinary artistry in action. The menu is a blend of Pakistani heritage and global inspirations, presenting an enticing array of traditional favorites and innovative creations for you to savor. Don't miss a visit to The Wine and Cheese Cellar, a treasure within towering glass walls, where our knowledgeable team takes you on a journey through Pakistan's gastronomic delights. Come, relish an unforgettable encounter with Pakistani culinary traditions at their finest.</p>
                <h6>Hours</h6>
                <ul class="list-unstyled page-list mb-30">
                    <li>
                        <div class="page-list-icon"> <span class="ti-time"></span> </div>
                        <div class="page-list-text">
                            <p>Breakfast: 7.00 am – 11.00 am (daily)</p>
                        </div>
                    </li>
                    <li>
                        <div class="page-list-icon"> <span class="ti-time"></span> </div>
                        <div class="page-list-text">
                            <p>Lunch: 12.00 noon – 2.00 pm (daily)</p>
                        </div>
                    </li>
                    <li>
                        <div class="page-list-icon"> <span class="ti-time"></span> </div>
                        <div class="page-list-text">
                            <p>Dinner: open from 6.30 pm, last order at 10.00 pm (daily)</p>
                        </div>
                    </li>
                </ul>
                {{-- <h6>Dress Code</h6>
                <p>Smart casual (no shorts, hats, or sandals permitted)</p> --}}
                <h6>Terrace</h6>
                <p>Open for drinks</p>
            </div>
        </div>
    </div>
</section>
<!-- Restaurant Menu -->
<section id="menu" class="restaurant-menu menu section-padding bg-darkblack">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-subtitle"><span>Luxury Hotel</span></div>
                <div class="section-title">Restaurant Menu</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="tabs-icon col-md-10 offset-md-1 text-center">
                        <div class="owl-carousel owl-theme">
                            <div id="tab-1" class="active item">
                                <h6>Starter</h6>
                            </div>
                            <div id="tab-2" class="item">
                                <h6>Salad</h6>
                            </div>
                            <div id="tab-3" class="item">
                                <h6>Salads</h6>
                            </div>
                            <div id="tab-4" class="item">
                                <h6>Wine</h6>
                            </div>
                            <div id="tab-5" class="item">
                                <h6>Breakfast</h6>
                            </div>
                            <div id="tab-6" class="item">
                                <h6>Dessert</h6>
                            </div>
                            <div id="tab-7" class="item">
                                <h6>Dessert2</h6>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-menu-content col-md-12">
                        <!-- Starters -->
                        <div id="tab-1-content" class="cont active">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="menu-info">
                                        <h5>Chicken Pakora <span class="price">Rs. 1200</span></h5>
                                        <p>Full</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Chicken Adabo <span class="price">Rs. 1900</span></h5>
                                        <p>Full</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Dhaka Chicken <span class="price">Rs. 1200</span></h5>
                                        <p>Full</p>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-2">
                                    <div class="menu-info">
                                        <h5>Special Chicken Chilli Dry <span class="price">Rs. 1250</span></h5>
                                        <p>Full</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>French Fries <span class="price">Rs. 250</span></h5>
                                        <p>Full</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mains -->
                        <div id="tab-2-content" class="cont">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="menu-info">
                                        <h5>Chicken Apple With Pineapple Salad <span class="price">Rs. 650</span></h5>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Russuan Salad Single Serving<span class="price">Rs. 350</span></h5>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Southern Fried Chicken <span class="price">52$</span></h5>
                                        <p>Cajun coated chicken breast, fries and honey mustard</p>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-2">
                                    <div class="menu-info">
                                        <h5>Crab Cake <span class="price">37$</span></h5>
                                        <p>Breaded crab cakes, tartar sauce, apple and fennel salad</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Baby Back Ribs <span class="price">32$</span></h5>
                                        <p>Bbq glazed baby pork ribs, coleslaw, fries</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Smokehouse Combo <span class="price">42$</span></h5>
                                        <p>Smoked beef brisket, rib and sausage, coleslaw, cornbread</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Salads -->
                        <div id="tab-3-content" class="cont">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="menu-info">
                                        <h5>Ceaser Salad <span class="price">47$</span></h5>
                                        <p>Romaine lettuce, croutons, parmigiano, Ceaser dressing.</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Waldorf Salad <span class="price">52$</span></h5>
                                        <p>Lettuce, celery, apple, grape, walnut, waldorf sauce</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Quinoa & Avocado Salad <span class="price">52$</span></h5>
                                        <p>Quinoa, avocado, mixed greens. Nuts, dried and fresh fruits</p>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-2">
                                    <div class="menu-info">
                                        <h5>Grilled Salmon Salad <span class="price">37$</span></h5>
                                        <p>Grilled salmon, mixed greens, capers, orange slices</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Chicken Cobb Salad <span class="price">32$</span></h5>
                                        <p>Iceberg lettuce, cherry tomatoes, blue cheese, avocado, bacon</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Salad Chicken <span class="price">42$</span></h5>
                                        <p> Ceaser dressing. Optional grilled chicken breast</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Wine -->
                        <div id="tab-4-content" class="cont">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="menu-info">
                                        <h5>Château d'Yquem 2011 <span class="price">400$</span></h5>
                                        <p>Dessert Wine, Bordeaux, Graves, Sauternes</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Alvear Cream NV <span class="price">30$</span></h5>
                                        <p>Dessert, Fortified Wine, Andalucia</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Chateau D'yquem 1990 <span class="price">900$</span></h5>
                                        <p>Dessert Wine, Bordeaux, Graves, Sauternes</p>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-2">
                                    <div class="menu-info">
                                        <h5>La Grande Année 2007 <span class="price">400$</span></h5>
                                        <p>Rosé, Champagne</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Sine Qua Non 2012 <span class="price">520$</span></h5>
                                        <p>Syrah, Shiraz & Blends, California</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>W.S. Keyes Winery 2006 <span class="price">240$</span></h5>
                                        <p>Merlot, California, Napa, Howell Mountain</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Breakfast -->
                        <div id="tab-5-content" class="cont">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="menu-info">
                                        <h5>Egg Benedict <span class="price">60$</span></h5>
                                        <p>English muffin, beef, hollandaise sauce, poached egg.</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Texas Benedict <span class="price">30$</span></h5>
                                        <p>English muffin, short ribs, bbq sauce, poached egg.</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Rusty’s Omlette <span class="price">22$</span></h5>
                                        <p>Mozzarella, cheddar, caramelized onion, black beans.</p>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-2">
                                    <div class="menu-info">
                                        <h5>Salmon Bagel <span class="price">30$</span></h5>
                                        <p>Smoked salmon, cream cheese, dill, rocket, red onion.</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Breakfast Bagel <span class="price">33$</span></h5>
                                        <p>Chocolate, marshmallow, biscuit bar</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Rusty’s Pancake <span class="price">40$</span></h5>
                                        <p>Strawberry, white chocolate, dark chocolate, crispearls</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dessert -->
                        <div id="tab-6-content" class="cont">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="menu-info">
                                        <h5>Bourbon Pecan Pie <span class="price">67$</span></h5>
                                        <p>Bourbon pecan stuffed pie, vanilla ice-cream</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>New York Cheesecake <span class="price">50$</span></h5>
                                        <p>Cheesecake, strawberry & lime salad</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Rusty’s ice-cream <span class="price">32$</span></h5>
                                        <p>Vanilla, bourbon, cookie, chocolate ice-cream</p>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-2">
                                    <div class="menu-info">
                                        <h5>S’mores <span class="price">40$</span></h5>
                                        <p>Chocolate chip cookies, marshmallow, chocolate</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Rocky Road <span class="price">42$</span></h5>
                                        <p>Chocolate, marshmallow, biscuit bar</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Apple & Pear Crumble <span class="price">42$</span></h5>
                                        <p>Caramelized pear and apple, oat crumble, vanilla ice-cream</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-7-content" class="cont">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="menu-info">
                                        <h5>Bourbon22222 Pecan Pie <span class="price">67$</span></h5>
                                        <p>Bourbon pecan stuffed pie, vanilla ice-cream</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>New York Cheesecake <span class="price">50$</span></h5>
                                        <p>Cheesecake, strawberry & lime salad</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Rusty’s ice-cream <span class="price">32$</span></h5>
                                        <p>Vanilla, bourbon, cookie, chocolate ice-cream</p>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-2">
                                    <div class="menu-info">
                                        <h5>S’mores <span class="price">40$</span></h5>
                                        <p>Chocolate chip cookies, marshmallow, chocolate</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Rocky Road <span class="price">42$</span></h5>
                                        <p>Chocolate, marshmallow, biscuit bar</p>
                                    </div>
                                    <div class="menu-info">
                                        <h5>Apple & Pear Crumble <span class="price">42$</span></h5>
                                        <p>Caramelized pear and apple, oat crumble, vanilla ice-cream</p>
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

@include('layouts.components.testimonials-guests-index')

    {{-- <!-- @include('admin.transactions.components.addCost')-- --}}
    {{-- @include('admin.transactions.components.editCost') -->-- --}}
@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>

    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush
