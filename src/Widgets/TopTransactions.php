<?php

namespace AlanVaill\LaravelProfilerAdmin\Widgets;

use AlanVaill\LaravelProfilerAdapter\Models\TransactionReport;
use Arrilot\Widgets\AbstractWidget;

class TopTransactions extends AbstractWidget
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
        $transactions = TransactionReport::select('label', \DB::raw('avg(elapsed_time) as elapsed_time'))
            ->groupBy('label')
            ->orderBy('elapsed_time', 'desc')
            ->limit(15)
            ->get();

        return view("profiler-admin::widgets/top_transactions", [
            'config' => $this->config,
            'transactions' => $transactions
        ]);
    }
}