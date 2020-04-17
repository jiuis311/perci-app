@extends('tutorial.layouts.tutorial')

@section('header')
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link rel="stylesheet" href="{{ asset('landingpage/css/tutorial-style.css') }}" type="text/css" media="all"/>
@endsection

@section('content')
    <section class="services py-5">
        <div class="container py-md-5 py-3">
            <div class="row text-justify">
                <div class="col-1"></div>
                <div class="col-10">
                    <h2 class="mb-4 heading text-center">Smart Popup Control</h2>
                    <section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">

                        <div class="cd-faq__items">
                            <div class="new_block">
                                <img src="">

                                <p>With Peasi's Smart Popup control system, you can fully control the display of Popups,
                                    this will help you optimize your resources (effective popups) and give a better
                                    customer experience.
                                </p>
                                <p>Note: These settings will apply to all of your offers that are active.
                                </p>
                                <p>How is the offer shown to each customer?</p>
                                <p>
                                    You can edit the number of impressions per customer who visits your store with 3
                                    different modes
                                    * Only one offer per customer
                                    * Show multiple offers but not the same twice
                                    * Show the offer everytime whether the customers have seen it or not
                                    Specify your goals to have the most suitable setting for your Offers
                                </p>
                                <p>Frequency</p>
                                <p>You can control the frequency of popup occurrences over time. Remember, customers
                                    will very upset if you spam them to much.
                                </p>
                            </div><!-- Step 1 -->
                        </div> <!-- cd-faq__items -->

                        <a class="cd-faq__close-panel text-replace">Close</a>

                        <div class="cd-faq__overlay" aria-hidden="true"></div>
                    </section> <!-- cd-faq -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('landingpage/js/util.js') }}"></script> <!-- util functions included in the CodyHouse framework -->
    <script src="{{ asset('landingpage/js/main.js') }}"></script>
@endsection
