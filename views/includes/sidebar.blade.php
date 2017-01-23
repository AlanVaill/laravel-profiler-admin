<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="{{ \Route::currentRouteName() == 'profiler-admin.dashboard' ? 'active' : '' }}">
            <a href="{{ route('profiler-admin.dashboard') }}">
                <i class="icon icon-home"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="{{ strpos(\Route::currentRouteName(), 'profiler-admin.transactions') === 0 ? 'active' : '' }}">
            <a href="{{ route('profiler-admin.transactions') }}">Transactions</a>
        </li>
        <li class="{{ \Route::currentRouteName() == 'profiler-admin.queries' ? 'active' : '' }}">
            <a href="{{ route('profiler-admin.queries') }}">Queries</a>
        </li>
        <li class="{{ \Route::currentRouteName() == 'profiler-admin.errorLog' ? 'active' : '' }}">
            <a href="{{ route('profiler-admin.errorLog') }}">
                <i class="icon icon-info-sign"></i>
                <span>Error Log</span> @widget('AlanVaill\LaravelProfilerAdmin\Widgets\ErrorCount')
            </a>
        </li>
    </ul>
</div>
