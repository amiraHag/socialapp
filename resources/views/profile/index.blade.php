@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   Welcome to your profile
                      <br/>
                        <img src="{{url('.')}}/public/img/{{Auth::user()->pic}}" width="80px" height="80px"/>
                    <br/>
                        <a href="{{url('/')}}/changePhoto">Change Image</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
