@extends('app')

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            <form class="search-field form-control">
                <button type="submit" class="search-btn"><i class="flaticon-search100"></i></button>
                <input type="text" id="search-input">
                <label for="search-input">Search</label>
            </form>
            <h2>Media</h2>
        </div>
    </div>

    <!-- Gallery -->
    <section class="padding-bottom">
        <div class="container">
            <hr class="with-shadow">
            <!-- Badge -->
            <div class="badge badge-primary">
                <span class="icon"><i class="fa fa-camera"></i></span>
                Moments of our game
            </div>
            <div class="row">
                <!-- Heading -->
                <div class="col-lg-4 col-lg-push-8 col-md-5 col-md-push-7 col-sm-6 col-sm-push-6">
                    <div class="block-heading">
                        <h2>Our Gallery</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                    </div>
                </div>
                <!-- Filters -->
                <div class="col-lg-8 col-lg-pull-4 col-md-7 col-md-pull-5 col-sm-6 col-sm-pull-6">
                    <ul class="nav-filters text-right space-top-3x">
                        <li class="active"><a class="waves-effect waves-primary" data-filter="*" href="#">All</a></li>
                        <li><a class="waves-effect waves-primary" data-filter=".picture" href="#">Pictures</a></li>
                        <li><a class="waves-effect waves-primary" data-filter=".video" href="#">Videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="masonry-grid filter-grid space-top-2x">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>
                <!-- Item -->
                <div class="item picture">
                    <a href="/img/gallery/03.png" class="gallery-item image-item popup-image waves-effect">
                        <figure>
                            <img src="/img/gallery/03.png" alt="Thumbnail">
                            <figcaption>
                                <h3>Our Team</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem velit unde repellat itaque molestias.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Item -->
                <div class="item video">
                    <a href="http://vimeo.com/109648489" class="gallery-item video-item popup-video waves-effect">
                        <figure>
                            <img src="/img/gallery/03.png" alt="Thumbnail">
                            <figcaption>
                                <h3>Our Office</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem velit unde repellat itaque molestias.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Item -->
                <div class="item picture">
                    <a href="/img/gallery/03.png" class="gallery-item image-item popup-image waves-effect">
                        <figure>
                            <img src="/img/gallery/03.png" alt="Thumbnail">
                            <figcaption>
                                <h3>Process</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem velit unde repellat itaque molestias.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </section><!-- Gallery End -->
@stop