@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  <form action="/upload" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image"/>
                            <input type="submit" name="Upload"/>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
