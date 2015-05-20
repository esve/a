    <form class="form-horizontal">
        <div class="form-group">
            {!! Form::label('username', 'Username', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('username', null, ['class' => 'form-control', 'type' => 'text']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-Mail Address', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email']) !!}
                    <!-- input type="email" class="form-control" name="email" value="{ { old('email') }}" -->
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('steamid', 'SteamID', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('steamid', null, ['class' => 'form-control', 'type' => 'text']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('firstname', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('firstname', null, ['class' => 'form-control', 'type' => 'text']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('lastname', 'Apellido', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('lastname', null, ['class' => 'form-control', 'type' => 'text']) !!}
                </div>
            </div>
            </div> <!-- form-group -->
    </form>