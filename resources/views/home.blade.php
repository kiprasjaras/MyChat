@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div  style="background-color: #4A4C4E; color: lightblue;"   class="card-header">MyChat</div>

                <div style="background-color: #212121; color: lightblue;" class="card-body" id="app">
                    <chat-app :user="{{ auth()->user() }}"></chat-app>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
