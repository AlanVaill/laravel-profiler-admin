@extends('profiler-admin::layout')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
                        <h5>Queries</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>SQL</th>
                                <th>MAX Execution Time</th>
                                <th>AVG Execution Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($queries as $query)
                                <tr>
                                    <td>
                                        <a href="{{ route('profiler-admin.queries-by-hash', ['hash' => $query->hash]) }}">
                                            <span class="icon"><i class="icon-folder-close"></i> </span>
                                            {{ $query->sql }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ number_format($query->max_execution_time, 4) }} s
                                    </td>
                                    <td>
                                        {{ number_format($query->avg_execution_time, 4) }} s
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ $queries->links('profiler-admin::includes/pagination') }}
@endsection


