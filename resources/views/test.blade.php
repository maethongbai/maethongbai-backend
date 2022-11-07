@extends('layouts.main')

@section('content')

    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Users</h1>
    <div>
        {{ $users }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Custom Order Workers</h1>
    <div>
        {{ $cows }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Gold Patterns</h1>
    <div>
        {{ $gold_patterns }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Gold Prices</h1>
    <div>
        {{ $gold_prices }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Gold Types</h1>
    <div>
        {{ $gold_types }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Wholesales</h1>
    <div>
        {{ $wholesales }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Employees</h1>
    <div>
        {{ $employees }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Gold List</h1>
    <div>
        {{ $gold_ls }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Redemptions</h1>
    <div>
        {{ $reds }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Onsite Sales</h1>
    <div>
        {{ $onss_ls }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Incomes</h1>
    <div>
        {{ $income_ls }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Withdrawals</h1>
    <div>
        {{ $wd_ls }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Online Sales</h1>
    <div>
        {{ $onls_ls }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">

    <h1 class="text-3xl my-3">Custom Orders</h1>
    <div>
        {{ $co_ls }}
    </div>
    <hr class="border my-3 border-l-4 border-amber-800">
@endsection
