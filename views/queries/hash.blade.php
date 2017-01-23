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
                                <th>Sql</th>
                                <th>bindings</th>
                                <th>execution_time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($queries as $query)
                                <tr>
                                    <td>
                                        {{ $query->sql }}
                                    </td>
                                    <td>
                                        {{ substr( $query->bindings, 0, 250 ) }}
                                    </td>
                                    <td>
                                        {{ number_format($query->execution_time, 4) }} s
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


