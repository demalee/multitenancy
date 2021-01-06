
@extends('our_layouts.layouts.appss')
@section('content')

    <!-- Grid row -->
    <style>
        ul.timeline {
            list-style-type: none;
            position: relative;
        }
        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }
        ul.timeline > li {
            margin: 20px 0;
            padding-left: 20px;
        }
        ul.timeline > li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #22c0e8;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
        }
    </style>

    <!------ Include the above in your HEAD tag ---------->

    <!------ Include the above in your HEAD tag ---------->
<br><br>
    <div class="container mt-5 mb-5" id="steps">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h4>Website Creation steps</h4>
                <ul class="timeline">
                    <li>
                        <a target="_blank" href="">Website Information </a>
                        <a href="#" class="float-right">step 1</a>
                        <p>Fill in your mapped website domain or subdomain and website description.</p>
                        <img src="/images/step1.PNG" alt="Image" class="img-fluid mb-4 mb-lg-0">
                    </li>
                    <li>
                        <a href="#">Choose Menu links </a>
                        <a href="#" class="float-right">Step2</a>
                        <p>The menus are the navigation links you would wish to have.They can be changed</p>

                        <img src="/images/step2.PNG" alt="Image" class="img-fluid mb-4 mb-lg-0">
                    </li>
                    <li>
                        <a href="#"> Choose theme </a>
                        <a href="#" class="float-right">Step 3
                        </a>
                        <p>The themes are for the looks and feels of the website.
                        </p>
                        <img src="/images/step3.PNG" alt="Image" class="img-fluid mb-4 mb-lg-0">
                    </li>
                    <li>
                        <a href="#"> Add settings </a>
                        <a href="#" class="float-right">Step 4 </a>
                        <p>Add your website logo and favicon,you can the company/website brand name</p>
                        <img src="/images/step4.PNG" alt="Image" class="img-fluid mb-4 mb-lg-0">
                    </li>
                    <li>
                        <a href="#">Choose preffered widgets</a>
                        <a href="#" class="float-right">  step 5</a>
                        <p>Widgets are used to display the content of your website.You can activate or deactivate .</p>
                        <img src="/images/step5.PNG" alt="Image" class="img-fluid mb-4 mb-lg-0">
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
