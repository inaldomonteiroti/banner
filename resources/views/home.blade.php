@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Banners</h5>

                        <a href="{{asset('admin.banners')}}" class="btn btn-primary">Administrar</a>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
