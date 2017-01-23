<?php


namespace AlanVaill\LaravelProfilerAdmin\Widgets;

use AlanVaill\LaravelProfilerAdapter\Models\ErrorLog;
use Arrilot\Widgets\AbstractWidget;

class ErrorCount extends AbstractWidget
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
        $count = ErrorLog::whereDate('created_at', '>=', date('Y-m-d'))
            ->count();

        return view("profiler-admin::widgets/error_count", [
            'config' => $this->config,
            'count' => $count
        ]);
    }
}