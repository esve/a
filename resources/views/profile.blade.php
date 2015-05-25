@extends('app')
<?php $usuario = Auth::user()->username; ?>
@section('title', 'Perfil: '.$usuario)
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 ">
			<div class="panel panel-default">
				<!-- edita perfil block -->
                <div class="panel-heading">Edit Profile</div>
				<div class="panel-body">Player:
                    @if( Auth::check() )
                        {{ Auth::user()->id }} {{ Auth::user()->username }}<br><br>
                    @endif
                    <!-- {!! Form::open(['method' => 'PUT']) !!} -->
                    @include('partials.editProfileFields')
                    <div class="panel-body">
                   {!! Form::submit('Editar', ['class' => 'btn btn-primary', 'style' => 'margin: 0 auto;width: 50%;display: table;
                        }']) !!}
                   {!! /* carga JS perfil */
                    Html::script('js/editProfile.js') !!}
                    </div>
                    <!-- {!! Form::close() !!} -->
                </div>
            </div>
                <div class="col-md-4">
                    <!-- edita perfil block -->
                <div class="panel panel-default">
                    <div class="panel-heading">Options</div>
                    <div class="panel-body">
                        <ul style="list-style: none;">
                            <li>Change Password</li>
                            <li>Upload Avatar</li>
                            <li>Item 1</li>
                            <li>Item 1</li>
                        </ul>

                        <ul style="list-style:none;">
                            <li style="border: 1px solid red;">{!! Form::label('csgo', 'CSGO'); !!} <span>{!! Form::checkbox('csgo', '1'); !!}</span></li>
                            <li style="border: 1px solid red;">{!! Form::label('dota', 'DOTA'); !!} <span>{!! Form::checkbox('dota', '1'); !!}</span></li>
                            <li style="border: 1px solid red;">{!! Form::label('cs1.6', 'CS 1.6'); !!} <span>{!! Form::checkbox('cs1.6', '1'); !!}</span></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection
