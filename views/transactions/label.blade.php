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
                                <th>elapsed_time</th>
                                <th>date</th>
                                <th>trace</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>
                                        <a href="{{ route('profiler-admin.transactions-detail', ['id' => $transaction->transaction_report_id]) }}">
                                            {{ $transaction->label }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ number_format($transaction->elapsed_time, 4) }} s
                                    </td>
                                    <td>
                                        {{ $transaction->created_at }}
                                    </td>
                                    <td>
                                        {{ $transaction->trace ? substr( $transaction->trace->trace, 0, 250 ) : '' }}
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


