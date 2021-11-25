@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="padding-top: 100px">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center"><b>Export Excel from database</b></div>
                    <div class="card-body" style="text-align: center">
                      <a href="/get" type="button" class="btn btn-success" style="width: 20%; margin: auto; padding: 10px">Export</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top: 200px  ">
            <div class="col-md-8">
                    <div class="card" >
                    <div class="card-header" style="text-align: center"><b>Import Excel to database</b></div>
                    <div class="card-body" style="text-align: center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="/" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" required/>
                                <button type="submit" class="btn btn-primary" style="width: 20%; margin: auto; padding: 10px">Import</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
