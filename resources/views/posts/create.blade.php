@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nouveau post') }}</div>

                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <textarea name="content" style="width: 100%"></textarea><br>
                            <button style="width : 100px" type="submit"> GO mon gars!</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

