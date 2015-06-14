@extends('app')
@section('page-scripts')
    <!--Google Maps API-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5DLwPPVAz88_k0yO2nmFe7T9k1urQs84"></script>
@stop
@section('content')
    <!-- Team -->
    <section class="space-bottom-3x">
        <div class="container">
            <hr class="with-shadow">
            <!-- Badge -->
            <div class="badge badge-primary badge-reverse">
                {{--Smart people in here--}}
                <span class="icon"><i class="fa fa-users"></i></span>
            </div>
            <!-- Grid -->
            <div class="team-grid space-top-2x">
                <!-- Item -->
                {{--<div class="item">--}}
                    {{--<img src="/img/team/davis.jpg" alt="Susanna Davis">--}}
                    {{--<div class="overlay">--}}
                        {{--<h3>Susanna Davis</h3>--}}
                        {{--<span>Marketing Director</span>--}}
                        {{--<div class="social-buttons">--}}
                            {{--<a href="#" class="sb-twitter"><i class="bi-twitter"></i></a>--}}
                            {{--<a href="#" class="sb-google-plus"><i class="bi-gplus"></i></a>--}}
                            {{--<a href="#" class="sb-facebook"><i class="bi-facebook"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- Facebook -->
                <div class="item">
                    <a href="https://www.facebook.com/onesecretfantasy" class="facebook-tile">
                        <img src="/img/team/blank.png" alt="Facebook">
                        <div class="inner">
                            <i class="bi-facebook"></i>
                            <h3><span>Befriend us on</span> facebook
                            </h3>
                        </div>
                    </a>
                </div>
                <!-- Twitter -->
                <div class="item">
                    <a href="{{ \Thujohn\Twitter\Facades\Twitter::linkUser("@OSFtheGame") }}" class="twitter-tile">
                        <img src="/img/team/blank.png" alt="Facebook">
                        <div class="inner">
                            <div class="icon"><img src="/img/twitter-icon.png" alt="Twitter">
                            </div>
                            <h3>follow us on twitter</h3>
                        </div>
                    </a>
                </div>
                <!-- YouTube -->
                <div class="item">
                    <a href="{{ \Thujohn\Twitter\Facades\Twitter::linkUser("@OSFtheGame") }}" class="twitter-tile">
                        <img src="/img/team/blank.png" alt="Facebook">
                        <div class="inner">
                            <div class="icon"><img src="/img/twitter-icon.png" alt="Twitter">
                            </div>
                            <h3>follow us on twitter</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section><!-- Team End -->
    <!-- Contacts -->
    <section class="fw-white-bg">
        <hr class="with-shadow" />
        <div class="fw-container">
            <div class="column w-60">
                <div class="google-map" data-location="Rotterdam, the Netherlands" data-zoom="10">
                    <!--Insert Location in data-location, insert map zoom in data-zoom-->
                    <div id="map-canvas"></div>
                </div>
            </div>
            <div class="column w-40">
                <div class="contact-info padding-top-2x padding-bottom">
                    <!-- Block Heading -->
                    <div class="block-heading">
                        <h2>Where You<br>Can Find Us
                        </h2>
                        <span>In <i class="text-primary">Rotterdam</i> of course</span>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav-tabs space-top-2x">
                        <li class="active"><a href="#write" data-toggle="tab">Write</a></li>
                        <li><a href="#read" data-toggle="tab">Read</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane text-smaller transition scale fade in active" id="write">
                            <a href="mailto:info@onesecretfantasy.com">info@onesecretfantasy.com</a>
                            <p class="text-smaller">Email</p>
                            {{--TODO: Skype Integration--}}
                            <a href="mailto:onesecretfantasy">onesecretfantasy</a>
                            <p class="text-smaller">Skype</p>
                        </div>
                        <div class="tab-pane transition scale fade text-right" id="read">
                            <p class="text-smaller">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam temporibus dolor maiores fugit voluptas, quas voluptatibus culpa nulla eligendi optio eaque cupiditate minima voluptate accusamus minus architecto beatae.</p>
                            <p class="text-smaller">Sed ut perspiciatis unde omnis iste natus.</p>
                            <a href="{{ \Illuminate\Support\Facades\URL::to('/') }}" class="link text-smaller">Visit website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Contacts End -->
    <!-- Contact Form -->
    <section class="padding-bottom-2x fw-bg top-inner-shadow">
        <div class="container">
            <!-- Badge -->
            <div class="badge badge-primary badge-reverse">
                Drop us a line
                <span class="icon"><i class="fa fa-envelope-o"></i></span>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

                    @if(Session::get('message') != null)
                        <h3 class="text-gray text-light">{{ Session::get('message') }}</h3>
                    @endif
                    {!! Form::open(['url' => '#', 'class' => 'ajax-form space-top space-bottom']) !!}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-control">
                                    <input type="text" name="name" id="cont_form_name">
                                    <label for="cont_form_name">Name</label>
                                    <span class="error-label"></span>
                                    <span class="valid-label"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-control">
                                    <input type="email" name="email" id="cont_form_email">
                                    <label for="cont_form_email">Email</label>
                                    <span class="error-label"></span>
                                    <span class="valid-label"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-control">
                            <textarea name="message" id="cont_form_message"></textarea>
                            <label for="cont_form_message">Message</label>
                            <span class="error-label"></span>
                            <span class="valid-label"></span>
                        </div>
                        <div class="row space-top">
                            <div class="col-sm-6">
                                <label class="checkbox space-top">
                                    <input type="checkbox" checked="checked"> Subscribe to our news
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-6 col-md-8 col-md-offset-4 col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-float btn-block btn-sm waves-effect waves-light">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Validation Response -->
                        <div class="response-holder"></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- Contact Form End -->
@stop