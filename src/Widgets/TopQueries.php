<?php


namespace AlanVaill\LaravelProfilerAdmin\Widgets;

use AlanVaill\LaravelProfilerAdapter\Models\QueryLog;
use Arrilot\Widgets\AbstractWidget;

class TopQueries extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $queries = QueryLog::select('sql','hash',
            \DB::raw('avg(execution_time/1000) as avg_execution_time'),
            \DB::raw('max(execution_time/1000) as max_execution_time'),
            \DB::raw('min(execution_time/1000) as min_execution_time'))
            ->groupBy('sql', 'hash')
            ->orderBy('avg_execution_time', 'desc')
            ->limit(15)
            ->get();

        return view("profiler-admin::widgets/top_queries", [
            'config' => $this->config,
            'queries' => $queries
        ]);
    }
}