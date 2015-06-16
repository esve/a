@section('title', '@'.$user->username)
@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <!-- edita perfil block -->
                    <div class="panel-heading">
                    </div>
                    <br>
                    <div class="panel-body" style="display: flex;">
                        <div id="tabs">
                            <div style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;">
                                <a id="profileThumbBig" href="../{{getUserPhoto($user)}}">
                                    {!! Html::image(''.getUserPhoto($user), 'a picture', array('class' => 'profileIMG', 'title' => 'User Pic')) !!}
                                </a>
                                    <h1>
                                        {{$user->username}}
                                        {!! Html::image('images/flags/'.$user->country_code.'.png', 'ALT', array('title' => 'Flag', 'style' => 'margin-right:10px'))!!}
                                        <i style="font-size:40px;" class="fa fa-user"> </i>
                                    </h1>
                                </div>
                            <ul>
                                <li><a href="#general">General</a></li>
                                <li><a href="#book">Libro</a></li>
                                <li><a href="#stats">Stats</a></li>
                                <li><a href="#misc">Misc</a></li>
                                <li><a href="#friends">Friends</a></li>
                            </ul>
                            <div id="general">
                                <table class="table" width="100%">
                                    <tr>
                                        <td>Player:</td>
                                        <td>{{ $user->firstname }} '<b>{{ $user->username }}</b>' {{ $user->lastname }}</td>
                                    </tr>
                                    <td width="25%">Country:</td>
                                    <td>
                                        {!! Html::image('images/flags/'.$user->country_code.'.png', 'CountryFlag', array('title' => 'Country', 'style' => 'margin-right:10px'))!!}
                                    </td>
                                    </tr>
                                    <td width="25%">SteamID:</td>
                                    <td>{{ $user->gosteamid }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="book">
                                <div class="tabContenido"">No hay entradas</div>
                            </div>
                            <div id="stats">
                                <!-- stats v1 -->
                                <table class="table" style="width:100%;">
                                    <tr>
                                        <td>Username: {{$user->username}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email: {{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Country: {{$user->country_code}}</td>
                                    </tr>
                                </table>
                            </div> <!-- stats -->
                             <div id="misc">
                                 <div class="tabContenido"">No content yet.</div>
                            </div> <!-- misc -->
                            <div id="friends">
                                <div class="tabContenido"">
                                No hay friends.
                            </div>
                            </div>
                        </div> <!-- tabs -->
                    </div> <!-- panel body -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <!-- edita perfil block -->
                    <div class="panel-heading">Friends</div>
                    <div class="panel-body">
                        <ul style="list-style-type: none">
                            <li><a href="#">aqui el placeholder</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection