<form class="form-horizontal" xmlns="http://www.w3.org/1999/html">


            <div class="form-group">
                {!! Form::label('country_code', 'Pais', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                     {!! Form::text('country_code', null, ['class' => 'form-control', 'type' => 'text', 'placeholder' => myCountry()]) !!}
                </div>
            </div>

            <div class="form-group">
            {!! Form::label('username', 'Username', ['class' => 'col-md-4 control-label']) !!}
                     <div class="col-md-6">
                         {!! Form::text('username', null, ['class' => 'form-control', 'type' => 'text', 'placeholder' => myUsername()]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-Mail Address', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email', 'placeholder' => eMailAddress()]) !!}
                    <!-- input type="email" class="form-control" name="email" value="{ { old('email') }}" -->
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('steamid', 'SteamID', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('steamid', null, ['class' => 'form-control', 'type' => 'text', 'placeholder' => gosteamid()]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('firstname', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('firstname', null, ['class' => 'form-control', 'type' => 'text', 'placeholder' => myName()]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('lastname', 'Apellido', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('lastname', null, ['class' => 'form-control', 'type' => 'text', 'placeholder' => myLastname()]) !!}
                </div>
            </div>
            <div id="centerBlock" style="margin: 0 auto;width: 50%;display: table;">
            <img src="{{Auth::user()->getProfile->profilePic}}" style="margin: 0 auto;display: flex;}" id="profileImage" width="150px" height="150px">
                <br>
            <input type="file" id="profilePicture" name="profilePicture" class="col-lg-12">
            </div>


        </div> <!-- form-group -->
    </form>