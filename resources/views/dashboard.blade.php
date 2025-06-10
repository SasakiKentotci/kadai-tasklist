@extends('layouts.app')

@section('content')
@if (Auth::check())
    <div class="row">
            <aside class="col-sm-4">
                {{-- ユーザー情報 --}}
                @include('tasks.index')
            </aside>
            <aside class="col-sm-4">
                {{-- ユーザー情報 --}}
                @include('tasks.create')
            </aside>
        
                
                {{-- 投稿フォーム --}}
              
                {{-- 投稿一覧 --}}
              
            </div>
        </div>
@else
    <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
        <div class="hero-content text-center my-10">
            <div class="max-w-md mb-10">
                <h2>Welcome to the Microposts</h2>
                {{-- ユーザー登録ページへのリンク --}}
                <a class="btn btn-primary btn-lg normal-case" href="{{ route('register') }}">Sign up now!</a>
            </div>
        </div>
    </div>
@endif
@endsection