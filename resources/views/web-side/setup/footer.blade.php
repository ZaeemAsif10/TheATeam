<footer>
    
    {{-- <div class="text-center">
      <p class="text-white fot-p">Copyright © 2021 – Tha A Team. All rights reserved.</p>
    </div> --}}


    <div class="container mt-4">

       <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "105031947800412");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

        <div class="row">
            <div class="col-md-3">
                <h5 class="text-white font-weight-bold us">ABOUT US</h5>
                <p class="text-white lahore mt-4">The A Team is a Lahore-Based main authorized dealer of Al Jalil
                    Developers that helps
                    small-budget property investors grow their wealth, build their dream home, and secure their loved
                    ones’ future.</p>
            </div>
            <div class="col-md-3">
                <h5 class="text-white font-weight-bold us">PROJECTS</h5>
                <ul class="foot-link mt-4">
                    @php
                        $navbars = App\Models\Project::take(3)->get();
                    @endphp
                    @foreach ($navbars as $navbarItem)
                        <li> > <a href="{{ url('projects/' . $navbarItem->id) }}"
                                class="ml-2">{{ $navbarItem->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="text-white font-weight-bold us">LINKS</h5>
                <ul class="foot-link mt-4">
                    <li> > <a href="{{ url('/') }}" class="ml-2">Home</a></li>
                    <li> > <a href="{{ url('about') }}" class="ml-2">About Us</a></li>
                    <li> > <a href="{{ url('contact') }}" class="ml-2">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="text-white font-weight-bold us">GET IN TOUCH</h5>

                <form action="{{ url('subscribe') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3 mt-4">
                        <input type="text" id="email-input" name="email" class="form-control" placeholder="Email"
                            aria-label="email" aria-describedby="basic-addon2" required>
                        <div class="input-group-append">
                            <button class="btn btn-default" type="submit" id="subscribe">SUBSCRIBE</button>
                        </div>
                    </div>
                </form>

                <ul class="text-center" id="modal-icon">
                    <li><a href="https://www.facebook.com/theateam.pk" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://twitter.com/theateampk" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/theateam.pk/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/company/theateampk/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/c/TheATeamPk/" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="row mt-4">
        <div class="underline"></div>
    </div>

    <div class="container mt-4">
        <div class="row text-center">
            <div class="col-md-4">
                <p class="text-white lahore1">Copyright © 2021–Tha A Team.All rights reserved.</p>
            </div>
            <div class="col-md-4">
                <p class="text-white lahore1">Manage by Shahraan Tech Pvt Ltd</p>
            </div>
            <div class="col-md-4">
                <a href="{{ url('pirvacy') }}"><p class="text-white lahore1">Privacy Policy</p></a>
            </div>
        </div>
    </div>


</footer>
