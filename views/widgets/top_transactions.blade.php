<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-time"></i> </span>
        <h5>Top Transactions</h5>
    </div>
    <div class="widget-content nopadding">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Transaction Name</th>
                    <th>Avg. Time (s)</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td title="{{ $transaction->label }}">
                        @if (strlen($transaction->label) > 50)
                            ...
                        @endif
                            <a href="{{ route('profiler-admin.transactions-by-label', ['label' => $transaction->label]) }}">
                                {{ substr($transaction->label, - 50)}}
                            </a>
                    </td>
                    <td>{{ number_format($transaction->elapsed_time, 4) }}</td>
                </tr>
            @endforeach
                <tr>
                    <td colspan="2">
                        <a href="{{ route('profiler-admin.transactions') }}">Show all transactions</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>