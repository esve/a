<form class="form-horizontal" xmlns="http://www.w3.org/1999/html">


            <div class="form-group">
                {!! Form::label('country_code', 'Pais', ['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                    <input type="text" name="country_code" style="background: url(images/flags/{{$miuser->country_code}}.png) no-repeat 13px 11px;
                    padding-left: 40px" class="form-control" placeholder="{{$miuser->country_code}}">
                    <!-- {!! Form::text('country_code', null, ['style' => 'background: url(images/flags/}) no-repeat 13px 10px;
                    padding-left: 40px', 'class' => 'form-control', 'type' => 'text', 'placeholder' => $miuser->country_code]) !!} -->
                </div>
            </div>

            <div class="form-group">
            {!! Form::label('username', 'Username', ['class' => 'col-md-3 control-label']) !!}
                     <div class="col-md-8">
                         {!! Form::text('username', null, ['class' => 'form-control', 'type' => 'text', 'placeholder' => $miuser->username]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-Mail Address', ['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email', 'placeholder' => $miuser->email]) !!}
                    <!-- input type="email" class="form-control" name="email" value="{ { old('email') }}" -->
                </div>
            </div>


            <div class="form-group">
                {!! Form::label('steamid', 'SteamID', ['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::text('steamid', null, ['class' => 'form-control', 'type' => 'text', 'placeholder' => $miuser->gosteamid]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('firstname', 'Nombre', ['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::text('firstname', null, ['class' => 'form-control', 'type' => 'text', 'placeholder' => $miuser->firstname]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('lastname', 'Apellido', ['class' => 'col-md-3 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::text('lastname', null, ['class' => 'form-control', 'type' => 'text', 'placeholder' => Auth::user()->lastname]) !!}
                </div>
            </div><!-- form-group -->
            </div>
    </form>