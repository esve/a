@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 ">
			<div class="panel panel-default">
				<!-- edita perfil block -->
                <div class="panel-heading">Edit Profile</div>
				<div class="panel-body">Aqui ira mi perfil
                    @if( Auth::check() )
                        {{ Auth::user()->username }}<br><br>
                    @endif
                    {!! Form::open(['method' => 'PUT']) !!}
                    @include('partials.perfil')
                    <div class="panel-body">
                        {!! Form::submit('Editar', ['class' => 'btn btn-primary', 'style' => 'width:100%']) !!}
                    </div>
                    {!! Form::close() !!}
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
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection
