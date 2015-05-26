@section('title', 'Editar Perfil')
@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 ">
			<div class="panel panel-default">
				<!-- edita perfil block -->
                <div class="panel-heading">Edit Profile</div>
				<div class="panel-body">
                    <!-- {!! Form::open(['method' => 'PUT']) !!} -->
                    @include('partials.editProfileFields')
                    <div class="panel-body">
                   {!! Form::submit('Editar', ['class' => 'btn btn-primary', 'style' => 'margin: 0 auto;width: 50%;display: table;}']) !!}
                   {{ Html::script('js/editProfile.js') }}
                    </div>
                    <!-- {!! Form::close() !!} -->
                </div>
            </div>
                <div class="col-md-3">
                    <!-- edita perfil block -->
                <div class="panel panel-default">
                    <div class="panel-heading">Options</div>
                        <div class="panel-body">
                            <ul style="list-style: none;">
                                <li>Change Password</li>
                                <li>Upload Avatar</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Mis Juegos</div>
                        <div class="panel-body">
                            <ul class="listGamesSidebar">
                                @foreach ($games as $game)
                                    <li>
                                        {!! Form::label($game, $game); !!} {!! Form::checkbox($game, $game); !!}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection