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
                    <h2 class="mb-4 heading text-center">How to use Report like a Pro?</h2>
                    <section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">

                        <div class="cd-faq__items">
                            <div class="new_block">
                                <p>
                                    I know you are finding a way which can grow your store revenue. These ways you might
                                    have tried:
                                    - Find out trending product or niche product that adapt customer need
                                    - Invest more and optimize your marketing campaigns to grow traffic
                                    - Build better customer experience on your store by UI/UX design techniques

                                    But, in this product, I will introduce another approach in many different ways which
                                    used by many successful salesmen, E-commerce platforms like Amazon, eBay,... even in
                                    a traditional retail store like Walmart. It is Upsell & Cross-sell: Increase sales
                                    from every visitor to your store or Increase AOV by another name.

                                    So, what is the value we focus on? In our perspective, the key success of this
                                    method is Customer Experience:</p>
                                <img src="" alt="">
                                <p>As you can see, our Goals are the center circle with 4 criteria you have to achieve
                                    in your Upsell offer on your store - Its link with Customer Engage Interface itself:
                                    * Right Need (Upsell/ Cross-sell Offers)
                                    * Right Time (Product Triggers; Limit Pop-ups)
                                    * Right Place (Trigger Location)
                                    * Right Context (Fit Store, Fit Moment, Fit Interest, Fit Event,...)
                                    * Right Urgency (Countdown effect, Limit stock,...)

                                    Those things we provide in our App function too, you can release that easily:</p>
                                <img src="" alt=""/>
                                <img src="" alt=""/>
                                <img src="" alt=""/>
                                <p>But the interesting question is, how do I know it works? What the efficient I got?
                                    What criteria I have to optimize? How do I know the changing is better or not?

                                    The answer is the rectangle under the model: Tracking & Optimizing with Peasi Native
                                    Upsell’s Report and Manage Offer. Our approach to upselling/ cross-selling data
                                    analysis is analysing from overview to detail, I will show you right here:</p>
                                <img src="" alt=""/>
                                <p>Note: Để ứng dụng việc phân tích và đưa ra quyết định dựa trên dữ liệu (Key concept
                                    của Report và Manage Offer), chúng tôi sẽ đưa ra 1 số mô hình phân tích tiêu biểu
                                    làm định hướng triển khai.

                                    Bạn có thể thấy rằng, khi quản lý rất nhiều Offers đa dạng thể loại, chúng ta bắt
                                    đầu phân tích những offer cụ thể chi tiết để tối ưu ngay được, như vậy rất tốn thời
                                    gian.

                                    Việc đầu tiên chúng ta cần phải làm là nhìn bức tranh tổng quan qua Standard
                                    Report:</p>
                                <img src="" alt=""/>
                                <p>Biểu đồ Performance cung cấp cho chúng ta một cái nhìn tổng thể nhất hiệu quả của các
                                    Offers theo thời gian: “What happend?”

                                    Nhìn vào biểu đồ này cho chúng ta biết những thời điểm đã xảy ra vấn đề và cần tối
                                    ưu (Điểm thấp nhất) và những thời điểm các offers hoạt động cực kì tốt (Điểm cao
                                    nhất), nó cũng có thể cho biết xu hướng hiệu quả qua thời gian (đang tăng hoặc đang
                                    giảm).

                                    Sau khi biết được điểm cần phân tích, chúng ta sẽ tiến tới bước phân tích sâu hơn:
                                    “How many, how often, where”. Đến đây chúng ta sẽ kết hợp biểu đồ Performance và
                                    những chỉ số ở Top Dashboard, những chỉ số này sẽ sẽ biểu thị những kết quả đạt được
                                    theo Customer Journey trong store:
                                    Lúc nhìn thấy: Impression
                                    Có ý định mua: Click
                                    Quyết định mua hàng: C.O Success.</p>
                                <img src="" alt=""/>
                                <p>
                                    Bằng cách xem những chỉ số này đang tăng/ giảm, số lượng các chỉ số biểu thị chúng
                                    ta sẽ biết được hiệu quả tổng thể các Offers đã setting.
                                    Hoặc, chúng ta cũng có thể xem tỷ lệ phân bổ Revenue theo loại hình Offers:</p>
                                <img src="" alt=""/>
                                <p>Bằng cách xem xét các chỉ số ảnh hưởng đến kết quả Revenue tổng thể, chúng ta phải
                                    xác định được chỉ số nào thực sự đang có vấn đề để tiến hành tối ưu nó: “What
                                    exactly is the problem?”

                                    Để tiến tới phân tích sâu hơn, tôi sẽ giả định chỉ số cần tối ưu mà chúng ta đã xác
                                    định được là chỉ số Clicks của Upsell đang thấp

                                    Câu hỏi đặt ra là: Tại sao chỉ số Click lại giảm mạnh?. Để trả lời, chúng ta sẽ tiến
                                    đến phân tích các Offers cụ thể một cách chi tiết:</p>
                                <img src="" alt=""/>
                                <p>Với tính năng Filter, chúng ta sẽ lọc ra được những Upsell Offers đang có chỉ số
                                    Clicks ở mức báo động - Đây là những Offers cần tối ưu.

                                    Quay trở lại với câu hỏi: Tại sao chỉ số Clicks lại giảm?, câu trả lời là có nhiều
                                    yếu tố ảnh hưởng đến chỉ số Click và do đó, chúng ta cần phải thực hiện phương pháp
                                    phân tích A/B testing có thể tối ưu các yếu tố quyết định đến chỉ số chính: “What if
                                    we try this?”

                                    Bắt đầu phân tích A/B test, chúng ta cần liệt kê ra các yếu tố chúng ta sẽ test:
                                    Ví dụ:
                                    Nhóm test 1: Offer Type: With boost; Without boost
                                    Nhóm test 2: Location: Add-to-cart; Before Checkout
                                    Nhóm test 3: Product Offers: Product A, Product B, C,...
                                    Ect,...

                                    Bước 2: Với mỗi nhóm yếu tố muốn test, lập ra 2 offers tương tự nhau chỉ đổi yếu tố
                                    muốn tối ưu (Hãy đặt tên để dễ phân biệt nhé):

                                    Nhóm test 1:
                                    Offer A: With boost
                                    Offer B: Without boost

                                    Nhóm test 2:
                                    Offer A: Add-to-cart
                                    Offer B: Before Checkout
                                    Nhóm test 3:
                                    Offer A: Product A
                                    Offer B: Product B
                                    …

                                    Bước 3: Hoàn tất và theo dõi hiệu quả của các offer mỗi nhóm test trong những ngày
                                    tiếp theo để đưa ra Offer tối ưu tại Manage Offer.

                                    Lưu ý: Bạn nên quan tâm đến độ lớn của mẫu test bởi vì điều này sẽ ảnh hưởng đến sai
                                    số kết quả cuối cùng.</p>
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
