@extends('profiler-admin::layout')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
                        <h5>Transactions</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>label</th>
                                <th>MAX Execution Time</th>
                                <th>AVG Execution Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>
                                        <a href="{{ route('profiler-admin.transactions-by-label', ['label' => $transaction->label]) }}">
                                            <span class="icon"><i class="icon-folder-close"></i> </span>
                                            {{ $transaction->label }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ number_format($transaction->max_elapsed_time, 4) }} s
                                    </td>
                                    <td>
                                        {{ number_format($transaction->avg_elapsed_time, 4) }} s
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

    {{ $transactions->links('profiler-admin::includes/pagination') }}
@endsection


