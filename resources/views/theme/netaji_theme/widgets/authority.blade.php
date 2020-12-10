
@if($widget->get_content($widget->id)[1] > 0)

    @foreach($widget->get_content($widget->id)[0] as $content)
        <div class="donation-area pt-240 pb-140" style="background-image:url({{asset('images/'.$content->content_image)}})">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                        <div class="donation-wrapper">
                            <div class="donation-text">
                                <h1 contenteditable="true">{{@$content->title}}</h1>
                                <p contenteditable="true">{{\Illuminate\Support\Str::limit(@$content->description,150,'...')}}</p>


                                <a class="btn" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



@else
    <div class="donation-area pt-240 pb-140" style="background-image:url(theme/netaji/img/bg/4.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                    <div class="donation-wrapper">
                        <div class="donation-text">
                            <h1 contenteditable="true">Join Our Activities <br> By a Donation</h1>
                            <p contenteditable="true">But I must explain to you how all this mistaken idea of denople asure and praising pain was born and I will give you a complete.</p>
                            <div class="donation-button donation-button2">
                                <button contenteditable="true">$15</button>
                                <button contenteditable="true" >$50</button>
                                <button contenteditable="true">$100</button>
                            </div>
                            <div class="cart-plus-minus">
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <a class="btn" href="#">donate now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

