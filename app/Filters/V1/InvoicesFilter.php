<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter {
    protected $safeParms = [
        'customerId' => ['eq'],
        'status' => ['eq', 'ne'],
        'amount' => ['eq', 'gt', 'lt', 'lte', 'gte'],
        'billedDate' => ['eq', 'gt', 'lt', 'lte', 'gte'],
        'paidDate' => ['eq', 'gt', 'lt', 'lte', 'gte']
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'status' => 'status',
        'amount' => 'amount',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];
}
