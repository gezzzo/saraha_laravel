@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user->name}}</div>
                <div class="card-body">
                    <form action="{{route('message.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <textarea class="form-control" name="text"  id="" cols="30" rows="10"></textarea>
                        </div>
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <input class="btn btn-primary" type="submit" value="send">

                    </form>
                    no of visits : {{$no_visits}}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
