@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    My Email : {{ Auth::user()->email }}
                    <br />
                    My Name : {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
