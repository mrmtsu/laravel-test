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
                    <form method="GET" action="{{ route('contact.create') }}">
                    <button type="submit" class="btn btn-primary">
                      新規登録
                    </button>
                    </form>

                    <form method="GET" action="{{ route('contact.index') }}" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索" aria-label="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
                    </form>

                    @foreach($contacts as $contact)
                    {{ $contact->id }}
                    {{ $contact->your_name }}
                    {{ $contact->title }}
                    <a href="{{ route('contact.show', ['id' => $contact->id ]) }}">詳細を見る</a>
                    @endforeach

                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
