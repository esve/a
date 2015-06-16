@section('title', 'Amigos')
    @extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <!-- edita perfil block -->
                    <div class="panel-heading">
                        Edit Profile
                    </div>
                    <div class="panel-body">

                        <div>
                            <h2 class="subheader">My Friends</h2>
                            <table class="table" border="0px" style="width:100%;">
                                <thead>
                                <tr>
                                    <th width="20%">Username</th>
                                    <th width="40%">Email</th>
                                    <th width="40%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach (Auth::user()->friends as $friend)
                                    <tr>
                                        <td>{{ $friend->getFullName() }}</td>
                                        <td>{{ $friend->email }}</td>
                                        <td>{!! link_to_action('DashboardController@getDelFriend', 'Remove friend', array('id' => $friend->id)) !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <h2 class="subheader">Others</h2>
                            <table class="table" border="0px" style="width:100%;">
                                <thead>
                                <tr>
                                    <th width="20%">Username</th>
                                    <th width="40%">Email</th>
                                    <th width="40%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($not_friends as $friend)
                                    <tr>
                                        <td>{{ $friend->getFullName() }}</td>
                                        <td>{{ $friend->email }}</td>
                                        <td>{!! link_to_action('DashboardController@getAddFriend', 'Add friend', array('id' => $friend->id, 'alt' => 'Nada')) !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
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
            </div>
        </div>
    </div>
@endsection