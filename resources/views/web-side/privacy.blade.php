@extends('web-side.setup.master')

@section('content')
    <section class="detail-section mt-5">

        <div class="details mb-5">
            <div class="container" id="cont">
                <div class="row">
                    <div class="col-md-8">


                        <h3 class="mt-4">Privacy Policy</h3>

                        <div class="desc mt-4">
                            <h6 class="font-weight-bold">Privacy Policy for The A Team</h6>
                        </div>

                        <p class="mt-4" id="privacy">At The A Team, accessible from theateam.pk, one of our main priorities is
                            the privacy of our visitors. This Privacy Policy document contains types of information that is
                            collected and recorded by The A Team and how we use it.</p>

                        <p class="desc mt-4" id="privacy">If you have additional questions or require more information about our
                            Privacy Policy, do not hesitate to contact us</p>

                        <p class="desc mt-4" id="privacy">This Privacy Policy applies only to our online activities and is valid
                            for
                            visitors to our website with regards to the information that they shared and/or collect in The A
                            Team. This policy is not applicable to any information collected offline or via channels other
                            than this website.</p>

                        <h6 class="mt-4">Consent</h6>

                        <p class="desc mt-4" id="privacy">By using our website, you hereby consent to our Privacy Policy and
                            agree to its terms.</p>

                        <h6 class="mt-4">Information we collect</h6>

                        <p class="desc mt-4" id="privacy">The personal information that you are asked to provide, and the reasons
                            why you are asked to provide it, will be made clear to you at the point we ask you to provide
                            your personal information.</p>


                        <p class="desc mt-4" id="privacy">If you contact us directly, we may receive additional information about
                            you such as your name, email address, phone number and the contents of the message and/or
                            attachments you may send us, and any other information you may choose to provide.</p>

                        <p class="desc mt-4" id="privacy">When you register for an Account, we may ask for your contact
                            information, including items such as name, company name, address, email address, and telephone
                            number.</p>

                        <h6 class="mt-4">How we use your information</h6>


                        <p class="desc mt-4" id="privacy">We use the information we collect in various ways, including to:</p>


                        <ul>
                            <li>
                                <p class="privacy">Provide, operate, and maintain our website</p>
                            </li>
                            <li>
                                <p class="privacy">Improve, personalize, and expand our website</p>
                            </li>
                            <li>
                                <p class="privacy">Understand and analyze how you use our website</p>
                            </li>
                            <li>
                                <p class="privacy">Develop new products, services, features, and functionality</p>
                            </li>
                            <li>
                                <p class="privacy">Communicate with you, either directly or through one of our
                                    partners, including for
                                    customer service, to provide you with updates and other information relating to the
                                    website, and for marketing and promotional purposes.</p>
                            </li>
                            <li>
                                <p class="privacy">Send you emails</p>
                            </li>
                            <li>
                                <p class="privacy">Find and prevent fraud</p>
                            </li>
                        </ul>

                        <h6 class="mt-4">Log Files</h6>


                        <p class="desc mt-4" id="privacy">The A Team follows a standard procedure of using log files. These files
                            log visitors when they visit websites. All hosting companies do this and a part of hosting
                            services’ analytics. The information collected by log files include internet protocol (IP)
                            addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit
                            pages, and possibly the number of clicks. These are not linked to any information that is
                            personally identifiable. The purpose of the information is for analyzing trends, administering
                            the site, tracking users’ movement on the website, and gathering demographic information.</p>


                    </div>
                    <div class="col-md-4">
                        <h5 class="text-secondary post">Recent Posts</h5>

                        <ul class="recent">
                            @foreach ($blog_detail as $detail)
                                <li><a href="{{ url('more/' . $detail->id) }}">{{ $detail->title }}</a></li>
                            @endforeach
                        </ul>


                        <h5 class="text-secondary post mt-5">Categories</h5>
                        <ul class="recent">
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('news') }}">News</a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
