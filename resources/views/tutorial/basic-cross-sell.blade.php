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
                    <h3 class="mb-4 heading text-center">Create Basic Cross-Sell</h3>
                    <section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
                        <ul class="cd-faq__categories">
                            <li><a class="cd-faq__category cd-faq__category-selected truncate" href="#step1">Step 1:
                                    Create new offer</a></li>
                            <li><a class="cd-faq__category truncate" href="#step2">Step 2: Choose your objective</a>
                            </li>
                            <li><a class="cd-faq__category truncate" href="#step3">Step 3: Choose your trigger
                                    location</a></li>
                            <li><a class="cd-faq__category truncate" href="#step4">Step 4: Set up a sale offer</a></li>
                            <li><a class="cd-faq__category truncate" href="#info">- Basic Info</a></li>
                            <li><a class="cd-faq__category truncate" href="#product">- Select Product</a></li>
                            <li><a class="cd-faq__category truncate" href="#discount">- Discount setting</a></li>
                            <li><a class="cd-faq__category truncate" href="#display">- Display setting</a></li>
                            <li><a class="cd-faq__category truncate" href="#step5">Step 5: Test popup</a></li>
                        </ul> <!-- cd-faq__categories -->

                        <div class="cd-faq__items">
                            <div id="step1" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h3 class="font-weight-bold">Step 1: Create new offer</h3>
                                <p>Click on the Label: <b>Create New</b> on the Menu bar.</p>
                            </div><!-- Step 1 -->
                            <div id="step2" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h3 class="font-weight-bold">Step 2: Choose your Objective
                                </h3>
                                <p>Choose <b>Basic Cross-sell</b>
                                </p>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-step2.png"
                                     alt="choose-basic-cross-sell.png"/>
                            </div><!-- Step 2 -->
                            <div id="step3" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h3 class="font-weight-bold">Step 3: Choose your Trigger location

                                </h3>
                                <p>Choose where and when the popups appear on your customer buying journey

                                </p>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-step3.png"/>
                                <p>
                                    * Trigger <b>Add-to-cart</b>: Pop-ups will appear when customers click on
                                    Add-to-cart
                                    button
                                    * Trigger <b>Before Checkout</b>: Pop-ups will appear when customers click on
                                    Checkout
                                    button
                                    * Trigger <b>After Checkout (coming soon)</b>: Pop-ups will appear when customers
                                    click on
                                    Confirm-Payment button
                                </p>
                            </div><!-- Step 3 -->
                            <div id="step4" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h3 class="font-weight-bold">Step 4: Set up a sale offer

                                </h3>
                                <p><b>Setup promotion, date range, message,...</b> for your Upsell Offer:
                                </p>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-step4.png"/>
                            </div><!-- Step 4 -->
                            <div id="info" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h3 class="font-weight-bold">Basic info</h3>
                                <p><b>* Offer’s name
                                    </b></p>
                                <p>Name the offer in your way to distinguish other offers.
                                    *Note: Offer's name will not be shown to your store's customers.</p>
                                <p><b>* Group name (optional)
                                    </b></p>
                                <p>At group name, you can create a new group for your offer or move your offer to an
                                    existed group
                                    *Note: a Group can have many offers for the purpose of managing and classifying more
                                    efficiently.</p>
                            </div><!-- Step 4.1 -->
                            <div id="product" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h3 class="font-weight-bold">Select product</h3>
                                <p>We provide 2 Cross-sell techniques for you to implement:
                                    <b>* Normal Cross-sell:</b> Allows you to implement cross-selling on each product
                                    separately
                                    <b>* Bundled Cross-sell:</b> Allows you to implement cross-selling within a product
                                    package</p>
                                <img src="" alt=""/>
                                <p><b>* Trigger Product
                                    </b></p>
                                <p>When customers choose to buy these products, it will activate your Offers. The
                                    left-side is where you can choose the products. On the right is a list of products
                                    you have selected. You can select as many Trigger products as you like.
                                </p>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-trigger-product.png">
                                <p><b>* Offer Product
                                    </b></p>
                                <p>These are the products will be in the Upsell Offer. You can select more than one
                                    Offer products if you like.
                                    After choosing the product(s) on the Left-side, you can customize the variations
                                    <b>(quantity and size)</b> for your products in the Right-side..
                                </p>
                                <p>If you use <b>Bundled Cross-sell</b>, you have to choose which of your products in the
                                    bundle is/are the trigger product(s). You can choose all the products if you
                                    want.</p>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-offer-product.png">
                            </div><!-- Step 4.2 -->
                            <div id="discount" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h3 class="font-weight-bold">- Discount setting</h3>
                                <p>This is where you select the appropriate Discount method for the Upsell Offer that
                                    you have created to attract customers.

                                    With the Discount feature, you will have 3 ways to set a discount:
                                    <b>Percentage</b>: Discount by % of original product price
                                    <b>Fixed amount</b>: Discount by a certain amount of $
                                    <b>Free shipping</b>: Free-ship plan for products that are upsell

                                    With the Default option, the discount setting will be applied to all of your Offer
                                    products
                                </p>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-discount-setting1.png">
                                <p>With the Customize option, you can setup your discount option one by one
                                </p>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-discount-setting2.png">
                                <p><i>If you want to make an offer visible on a specific date, you can setup a Start
                                        Date and End Date for it.
                                    </i></p>
                            </div><!-- Step 4.3 -->
                            <div id="display" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h3 class="font-weight-bold">- Display setting</h3>
                                <img src="public/images/basic-upsell-display-setting1.png.png"/>
                                <div class="italian-group">
                                    <p>* Headline</p>
                                    <p>A headline helps you to make your customers pay attention at your unique Offers.
                                        In the example above, the default title is <b>"Limit time offer!"</b>
                                        You can find out more about the titles that attract customers here: Link</p>
                                </div>
                                <div class="italian-group">
                                    <p>* Description</p>
                                    <p>The description helps you to persuade customers or describe in more detail the
                                        offer that you make. In the example above, the default description is <b>"Add
                                            these
                                            Items and Saves".</b>
                                    </p>
                                </div>
                                <div class="italian-group">
                                    <p>* Popup Template
                                    </p>
                                    <p>To attract more attention to the popup from your customers, you can change the
                                        template for your popup. To choose the template, click <b>Change</b> in the
                                        right
                                        corner of <b>Display Settings</b></p>
                                </div>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-display-setting2.png"/>
                                <div class="italian-group">
                                    <p>* Description</p>
                                    <p>The description helps you to persuade customers or describe in more detail the
                                        offer that you make. In the example above, the default description is <b>"Add
                                            these
                                            Items and Saves".</b>
                                    </p>
                                </div>

                                <div class="italian-group">
                                    <p>* Popup Template</p>
                                    <p>To attract more attention to the popup from your customers, you can change the
                                        template for your popup. To choose the template, click <b>Change</b> in the
                                        right
                                        corner of <b>Display Settings</b>
                                    </p>
                                </div>
                                <img src="../../../public/adminLte/dist/img/tutorial/basic-upsell-display-setting2.png"/>

                                <div class="italian-group">
                                    <p>* Show ... product at a time</p>
                                    <p>You can present up to 3 Offer products in your Pop-up. Let's continuously do A/B
                                        testing to find the most fit option.
                                    </p>
                                </div>
                            </div><!-- Step 4.4-->
                            <div id="step5" class="tutorial-items cd-faq__trigger cd-faq__group">
                                <h3 class="font-weight-bold">Step 5: Test popup
                                </h3>
                                <p>After completing the offer settings, you should test your offer by <b>experience it
                                        yourself</b> on your Store, this will help you have better understanding to <b>optimize
                                        your customer experience.</b> Therefore, grow-hack your <b>Conversion rate.</b>
                                </p>
                            </div><!-- Step 5 -->
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
