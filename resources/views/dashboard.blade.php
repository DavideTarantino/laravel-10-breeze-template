@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Overview') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" class="fs-5">Name and Surname</th>
                            <th scope="col">P & L</th>
                            <th scope="col">P & L (%)</th>
                            <th scope="col">Ytd</th>
                            <th scope="col">Dev St.</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Davide Tarantino</th>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                          </tr>
                          <tr>
                            <th scope="row">Luigi Monaco</th>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                          </tr>
                          <tr>
                            <th scope="row">Aldo Jacopo Virno</th>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                          </tr>
                          <tr>
                            <th scope="row">xxx</th>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                          </tr>
                          <tr>
                            <th scope="row">xxx</th>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
