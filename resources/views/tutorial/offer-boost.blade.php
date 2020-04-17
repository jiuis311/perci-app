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
                    <h2 class="mb-4 heading text-center">Create Offer with Boost</h2>
                    <section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
                        <ul class="cd-faq__categories">
                            <li><a class="cd-faq__category cd-faq__category-selected truncate" href="#step1">Step 1:
                                    Create new offer</a></li>
                            <li><a class="cd-faq__category truncate" href="#step2">Step 2: Choose your objective</a>
                            </li>
                            <li><a class="cd-faq__category truncate" href="#step3">Step 3: Choose your trigger
                                    location</a></li>
                            <li><a class="cd-faq__category truncate" href="#step4">Step 4: Set up your booster</a></li>
                            <li><a class="cd-faq__category truncate" href="#step5">Step 5: Set up a booster offer</a>
                            </li>
                            <li><a class="cd-faq__category truncate" href="#step6">Step 6: Test popup</a></li>
                        </ul> <!-- cd-faq__categories -->

                        <div class="cd-faq__items">
                            <div id="step1" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h2>Step 1: Create new offer</h2>
                                <p>Click on the Label: Create New on the Menu bar.</p>
                            </div><!-- Step 1 -->
                            <div id="step2" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h2>Step 2: Choose your Objective
                                </h2>
                                <p>Choose Basic Cross-sell
                                </p>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-step2.png"/>
                                <p><i>Note: If you want to add Boosters to one of your existed Basic Offer, you can
                                        click on the Label Choose from…
                                    </i></p>
                                <p><i>Choose your Basic Offer that you want to add Booster into -> Click Apply
                                        You will skip Step 3 and move forward to Step 4 for this action</i></p>
                            </div><!-- Step 2 -->
                            <div id="step3" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h2>Step 3: Choose your Trigger location

                                </h2>
                                <p>Choose where and when the popups appear on your customer buying journey

                                </p>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-step3.png"/>
                                <p>
                                    * Trigger Add-to-cart: Pop-ups will appear when customers click on Add-to-cart
                                    button
                                    * Trigger Before Checkout: Pop-ups will appear when customers click on Checkout
                                    button
                                    * Trigger After Checkout (coming soon): Pop-ups will appear when customers click on
                                    Confirm-Payment button
                                </p>
                            </div><!-- Step 3 -->
                            <div id="step4" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h2>Step 4: Set up a sale offer

                                </h2>
                                <p>You can choose to add up to 3 Boosters to your Offer. You can do A/B testing to
                                    define the most suitable option for your customers, thereby rocket your conversion
                                    rate
                                </p>
                                <p>* Countdown Timer: Display a time limit effect (countdown to 0 for the promotion
                                    time)</p>
                                <p>* Countdown Cart: Display a limit effect on the number of items (only x remaining
                                    left)
                                </p>
                                <p>* Traffic Boost: Give a condition of sharing on Facebook to receive your special
                                    Offer
                                </p>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-step4.png"/>
                            </div><!-- Step 4 -->
                            <div id="step5" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h2>Step 5: Set up a booster offer
                                </h2>
                                <i>After apply the Boosters for your Offers, you can customize the booster
                                </i>
                                <p>With the Default option, the Booster setting will be applied to all of your Offer
                                    products
                                    With the Customize option, you can setup your Booster option one by one
                                </p>
                            </div><!-- Step 5 -->
                            <div id="step6" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h2>Step 6: Test popup</h2>
                                <p>After completing the offer settings, you should test your offer by experience it
                                    yourself on your Store, this will help you have better understanding to optimize
                                    your customer experience. Therefore, grow-hack your Conversion rate.
                                </p>
                            </div>
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
