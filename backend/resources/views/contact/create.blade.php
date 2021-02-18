@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    createです
                    <form method="POST" action="">
                    氏名
                    <input type="text" name="your_name">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
