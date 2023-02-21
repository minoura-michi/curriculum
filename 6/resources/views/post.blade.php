@extends('layouts.app')
@section('title', 'つぶやき一覧')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                
                <form class="card p-3 mb-3" action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">
                    

 

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="つぶやく">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    {{-- 今ログイン中のユーザーのidがauthで取れる --}}
                </form>

            <div>
            @foreach($posts as $post)
            <div class="card p-3">

            @foreach($users as $user)
            @if($post -> user_id == $user -> id)
                <div>{{ $user -> name }}</div>
                <div class="text-right">{{ $post -> created_at }}</div>
                <div>{{ $post -> body }}</div>
                @if($post -> user_id == Auth::user()->id )
                <div class="text-right"><a href="{{ action('PostController@delete',['id' => $post-> id]) }}">削除</a></div>
                @endif
            @endif
            @endforeach
            </div>
            @endforeach
            </div>

            </div>
        </div>
    </div>
@endsection