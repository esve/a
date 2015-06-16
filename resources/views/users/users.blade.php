@section('title', 'Usuarios Registrados')
@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <!-- edita perfil block -->
                    <div class="panel-heading"><h1>Usuarios registrados</h1></div>
                    <div class="panel-body">
                        <ul>
                        @foreach($usuarios as $user)
                            <li style="list-style: none">
                                <a href="{{ url('user/'.$user->username) }}">{{$user->username}}</a>
                            </li>
                        @endforeach
                        </ul>
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