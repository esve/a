    <form class="form-horizontal">
        <div class="form-group">
                <label class="col-md-4 control-label">Username</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail Address</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">SteamID</label>
                <div class="col-md-6">
                    <input type="steamid" class="form-control" name="steamid">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>
                <div class="col-md-6">
                    <input type="firstname" class="form-control" name="firstname">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Last Name</label>
                <div class="col-md-6">
                    <input type="lastname" class="form-control" name="lastname">
                </div>
            </div>

                <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Editar
                </button>
            </div>
        </div>
    </form>