<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-time"></i> </span>
        <h5>Top Queries</h5>
    </div>
    <div class="widget-content nopadding">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Query SQL</th>
                    <th>Avg. Time (s)</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($queries as $query)
                <tr>
                    <td title="{{ $query->sql }}">
                        <a href="{{ route('profiler-admin.queries-by-hash', ['hash' => $query->hash]) }}">
                            {{ substr($query->sql, 0, 50)}}
                        </a>
                        @if (strlen($query->sql) > 50)
                            ...
                        @endif
                    </td>
                    <td>
                        {{ number_format($query->avg_execution_time, 4) }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>