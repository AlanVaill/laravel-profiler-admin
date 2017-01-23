<div id="content-header">
    <div id="breadcrumb">
        @for($i = 0; $i <= count(\Request::segments()); $i++)
            @if ($i == 0)
                <!--
                <a href="{{ route('profiler-admin.dashboard') }}" title="Go to Home" class="tip-bottom">
                    <i class="icon-home"></i> Home
                </a>
                -->
            @else
            <a href=""  class="tip-bottom">
                <i class="icon-home"></i> {{\Request::segment($i)}}
            </a>
            @endif
            @if ($i < count(\Request::segments()) && $i > 0)
                {!!'<i class="fa fa-angle-right"></i>'!!}
            @endif
        @endfor
    </div>
</div>