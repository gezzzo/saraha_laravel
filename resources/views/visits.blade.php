@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">The date of the first ten visits - <span style='direction: rtl;'>no of visits = {{$visits}} </span> </div>

                <div class="card-body">
                    @forelse($visits_date as $visit_date)
                        <p class="form-control">{{ Carbon\Carbon::make($visit_date->created_at)->diffForHumans() }}</p>
                        <hr>
                    @empty
                        no visit
                    @endforelse


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
