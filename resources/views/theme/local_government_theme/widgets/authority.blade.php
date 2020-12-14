@if($widget->get_content($widget->id)[1] > 0)
    <div class="city_jobs_wrap">
        <div class="city_jobs_fig">
            <div class="city_job_text">
                <span>County</span>
                <h2>Meet Dorien Daniels</h2>
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis </p>
                <a class="theam_btn" href="#" tabindex="0">Get In Touch</a>
            </div>
        </div>
        <div class="city_jobs_list">
            <ul>
                @foreach($widget->get_content($widget->id)[0] as $content)
                <li>
                    <div class="city_jobs_item overlay">
                        <span><i class="fa icon-team"></i></span>
                        <div class="ciy_jobs_caption">
                            <h2>{{@$content->title}}</h2>
                            <p>{{@$content->description}}</p>
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </div>

@else
    <div class="city_jobs_wrap">
        <div class="city_jobs_fig">
            <div class="city_job_text">
                <span>Mayor of the city</span>
                <h2>Meet Dorien Daniels</h2>
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis </p>
                <a class="theam_btn" href="#" tabindex="0">Get In Touch</a>
            </div>
        </div>
        <div class="city_jobs_list">
            <ul>
                <li>
                    <div class="city_jobs_item overlay">
                        <span><i class="fa icon-team"></i></span>
                        <div class="ciy_jobs_caption">
                            <h2>Living Here</h2>
                            <p>This is Photoshop's ersion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
                            <a href="#">Find Out More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="city_jobs_item pull-right overlay">
                        <div class="ciy_jobs_caption">
                            <h2>Visit Here</h2>
                            <p>This is Photoshop's ersion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
                            <a href="#">Find Out More</a>
                        </div>
                        <span><i class="fa icon-urban"></i></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endif

