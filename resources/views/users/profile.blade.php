@section('title', '@'.$user->username)
@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <!-- edita perfil block -->
                    <div class="panel-heading"><h1>{{$user->username}}</h1></div>
                    <div class="panel-body">
                        <table class="table" style="width:100%">
                            <tr>
                                <td>Username:</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                            </tr>
                            <tr>
                                <td>Country:</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <!-- edita perfil block -->
                    <div class="panel-heading">Edit Profile</div>
                    <div class="panel-body">BODY</div>
                </div>
            </div>
    </div>
    </div>
@endsection