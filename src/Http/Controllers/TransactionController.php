<?php


namespace AlanVaill\LaravelProfilerAdmin\Http\Controllers;


use AlanVaill\LaravelProfilerAdapter\Models\ErrorLog;
use AlanVaill\LaravelProfilerAdapter\Models\QueryLog;
use AlanVaill\LaravelProfilerAdapter\Models\TransactionReport;
use Illuminate\Http\Request;

class TransactionController
{
    const ITEMS_PER_PAGE = 20;

    public function indexAction(Request $request)
    {
        $transactions = TransactionReport::select(
            \DB::raw('max(elapsed_time) as max_elapsed_time'),
            \DB::raw('avg(elapsed_time) as avg_elapsed_time'),
            \DB::raw('transaction_reports.label')
        )
            ->groupBy('label')
            ->orderBy('max_elapsed_time', 'desc')
            ->simplePaginate(self::ITEMS_PER_PAGE);

        return view('profiler-admin::transactions/index', [
            'transactions' => $transactions
        ]);
    }

    public function labelAction(Request $request)
    {
        $label = $request->route('label');

        $transactions = TransactionReport::where('label', '=', $label)
            ->orderBy('elapsed_time', 'desc')
            ->simplePaginate(self::ITEMS_PER_PAGE);

        return view('profiler-admin::transactions/label', [
            'transactions' => $transactions
        ]);
    }

    public function detailAction(Request $request)
    {
        $id = $request->route('id');
        $transaction = TransactionReport::find($id);
        $errors = ErrorLog::where('transaction_report_id', '=', $id)
            ->orderBy('created_at', 'asc')
            ->get();
        $queries = QueryLog::where('transaction_report_id', '=', $id)
            ->orderBy('execution_time', 'desc')
            ->get();

        return view('profiler-admin::transactions/detail', [
            'transaction' => $transaction,
            'errors' => $errors,
            'queries' => $queries
        ]);
    }
}