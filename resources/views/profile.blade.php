@section('title', 'Editar Perfil')
@extends('app')
@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-default">
				<!-- edita perfil block -->
                <div class="panel-heading">
                    Edit Profile
                </div>
                <div class="panel-body">
                    <div>
                        <!-- {!! Form::open(['method' => 'PUT']) !!} -->
                        @include('partials.editProfileFields')
                        <!-- {!! Form::close() !!} -->
                        <br>
                            <div class="col-md-6">.col-md-6</div>
                            <div class="col-md-6">.col-md-6</div>
                    </div>
                </div>
            </div>
                <div class="col-md-3">
                    <!-- Friends -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Friends</div>
                        <div class="panel-body">
                            <ul style="list-style-type: none">
                                <li><a href="#">aqui el placeholder</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Fixed edita perfil block -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Options</div>
                            <div class="panel-body">
                                <div style="display: flex;flex-direction: column;align-items: center;">
                                    <a id="profileThumbBig" href="{{ checkMyUserPhoto() }}">
                                        <img src= "{{ checkMyUserPhoto()}}" class="profileIMG" id="profileImage" width="150px" height="150px">
                                    </a>
                                    <br>
                                    <input type="file" id="profilePicture" name="profilePicture" class="" style="border: 1px solid #3C3C3C;">
                                    <br>
                                    <div style="list-style: none;padding: 0;text-align: center;">
                                        <a href="#">Change Password</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Games -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Mis Juegos</div>
                        <div class="panel-body">
                            <ul class="listGamesSidebar">
                                @foreach ($games as $game)
                                    <li>
                                        {!! Form::label($game, $game); !!} &nbsp; {!! Form::checkbox($game, $game); !!}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection