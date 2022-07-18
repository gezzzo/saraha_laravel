@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Messages') }} - <span style='direction: rtl;'>no of visits = <a style="text-decoration: none" href="/visits">{{$visits}}</a> </span> </div>

                <div class="card-body">
                    @forelse($messages as $message)
                        <p class="form-control">{{$message->text}}</p>
                        <hr>
                    @empty
                        no message
                    @endforelse

                    <div class="d-flex justify-content-center">
                        {!! $messages->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
