@extends('layouts.app')

@section('content')
<div class="container" id="dashboard">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="mb-4">Dashboard</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Agencies</h3>
                        </div>
                        <div class="card-body">
                            <span>12</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Subaccounts</h3>
                        </div>
                        <div class="card-body">
                            <span>150</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Themes</h3>
                        </div>
                        <div class="card-body">
                            <span>35</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>MRR</h3>
                        </div>
                        <div class="card-body">
                            <span>$2,800</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Customers</h3>
                        </div>
                        <div class="card-body">
                            <div class="no-result">
                                <span>No Results Found</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Failed Transactions</h3>
                        </div>
                        <div class="card-body">
                            <div class="no-result">
                                <span>No Results Found</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
