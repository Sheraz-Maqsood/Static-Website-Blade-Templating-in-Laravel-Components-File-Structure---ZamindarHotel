@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
@endpush
@section('content')

@push('preload')

@endpush
  <!-- Header Banner -->
  <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5>F.A.Qs</h5>
                <h1>Frequently Asked Questions</h1>
            </div>
        </div>
    </div>
</div>
<!-- Faqs -->
<section class="section-padding bg-darkblack">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="accordion-box clearfix">
                    <li class="accordion block">
                        <div class="acc-btn">How can I confirm that you have received my reservation?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.</div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">Up to what age are they considered children?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.</div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">Do you have any discount code?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.</div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">How can I get in touch with my hotel?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.</div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">On the last day, can I leave the room later?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.</div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">Can I cancel my reservation?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.</div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">Do you have hotels with a spa?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@include('layouts.components.reservation-and-booking-index')

@include('layouts.components.clients-logo-index')
    {{-- <!-- @include('admin.transactions.components.addCost')-- --}}
    {{-- @include('admin.transactions.components.editCost') -->-- --}}
@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>

    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush
