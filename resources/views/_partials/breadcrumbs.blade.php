{{--<div class="container bc-container">--}}
    {{--<ul class="breadcrumb">--}}
        {{--<li><a href="{{ \Illuminate\Support\Facades\URL::to('/') }}">Home</a></li>--}}
        {{--{{ dd(Request::segment(5)) }}--}}

        {{--@for($i = 1; $i < 5; $i++)--}}
            {{--@if (Request::segment($i) != null)--}}
                {{--@if ($i == 4)--}}
                    {{--<li class="active">{{ Request::segment($i) }}</li>--}}
                {{--@else--}}
                    {{--<li><a href="--}}
                        {{--@for ($j = 1; $j <= $i; $j++)--}}

                        {{--@endfor--}}
                    {{--">{{ Request::segment($i) }}</a></li>--}}
                {{--@endif--}}
            {{--@endif--}}
        {{--@endfor--}}
    {{--</ul>--}}
{{--</div>--}}

<div class="container bc-container">
    <ul class="breadcrumb">
        @yield('breadcrumbs')
    </ul>
</div>