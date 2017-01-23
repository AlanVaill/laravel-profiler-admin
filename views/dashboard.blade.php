@extends('profiler-admin::layout')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6">
                @widget('AlanVaill\LaravelProfilerAdmin\Widgets\TopTransactions')
            </div>
            <div class="span6">
                @widget('AlanVaill\LaravelProfilerAdmin\Widgets\TopQueries')
            </div>
        </div>
    </div>
@endsection