@extends('profiler-admin::layout')

@section('content')
    <div class="container-fluid">
        <h2>
            {{ $transaction->label }}
            <small>{{ $transaction->created_at }}</small>
        </h2>
    </div>



    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
                        <h5>Transaction Trace</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <pre style="font-size: 7pt; overflow: auto; word-wrap: normal; white-space: pre;">{!! $transaction->trace ? $transaction->trace->trace : '' !!}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


