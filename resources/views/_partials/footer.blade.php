<!-- Footer -->
<footer class="footer padding-top-3x">
    <div class="container space-top">
        <div class="body padding-top-2x">
            <!-- Copyright -->
            <div class="column copyright">
                <p>&copy; 2015 <a href="{{ \Illuminate\Support\Facades\URL::to('/') }}" target="_blank">One Secret Fantasy</a>. One of the best Virtual Dating games</p>
            </div>
            {{--<nav class="column footer-nav">--}}
                {{--<ul>--}}
                    {{--<li><a href="press.html">Press Kit</a></li>--}}
                    {{--<li><a href="legal.html">Terms</a></li>--}}
                    {{--<li><a href="#">Privacy</a></li>--}}
                    {{--<li><a href="legal.html">Legal</a></li>--}}
                    {{--<li><a href="#">Security</a></li>--}}
                {{--</ul>--}}
            {{--</nav>--}}
        </div>
    </div>
</footer><!-- Footer End -->

<!-- Scripts -->
{{--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>--}}
{{--<script src="//oss.maxcdn.com/modernizr/2.8.3/modernizr.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/detectizr/1.5.0/detectizr.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}
<script src="{{ asset('/js/vendor.js') }}" async></script>

<script data-cfasync="false">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-52872706-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55986a05432f7646#async=1" async="async"></script>

{{--<script type="text/javascript">--}}
    {{--function downloadJSAtOnload() {--}}
        {{--var element = document.createElement("script");--}}
        {{--element.src = "js/vendor.js";--}}
        {{--document.body.appendChild(element);--}}
    {{--}--}}
    {{--if (window.addEventListener)--}}
        {{--window.addEventListener("load", downloadJSAtOnload, false);--}}
    {{--else if (window.attachEvent)--}}
        {{--window.attachEvent("onload", downloadJSAtOnload);--}}
    {{--else window.onload = downloadJSAtOnload;--}}
{{--</script>--}}

<script>
    var cb = function() {
        var l = document.createElement('link'); l.rel = 'stylesheet';
        l.href = 'css/app.css';
        var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
            webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) raf(cb);
    else window.addEventListener('load', cb);
</script>
