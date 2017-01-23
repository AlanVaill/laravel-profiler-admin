@extends('profiler-admin::layout')

@section('content')
    <div class="container-fluid">
        @if ($errorsToday > 0)
            <div class="row-fluid">
                <div class="alert alert-warning span12">
                    <strong>Warning!</strong> <span class="badge badge-warning">{{ $errorsToday }}</span> error(s) were logged today
                </div>
            </div>
        @endif
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
                        <h5>Error Log</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Message</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($logs as $log)
                                <tr>
                                    <td>
                                        {{ substr($log->message, 0, 80) }}

                                        @if (strlen($log->message) > 80)
                                            ...

                                            <a href="#modal-log-{{ $log->id }}" data-toggle="modal" class=""><span class="icon"> <i class="icon-eye-open"></i> </span></a>

                                            <div id="modal-log-{{ $log->id }}" class="modal hide" aria-hidden="true" style="display: none;">
                                                <div class="modal-header">
                                                    <button data-dismiss="modal" class="close" type="button">×</button>
                                                    <h3>Error Log Message</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        {!! nl2br(e($log->message)) !!}
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        {{ date_format($log->created_at, 'Y-m-d H:i:s') }}
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

    {{ $logs->links('profiler-admin::includes/pagination') }}
@endsection


