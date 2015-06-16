<?php

// Chequea picture del usuario loggeado y establece una por defecto
function checkMyUserPhoto()
    {
        $imagePath = 'images/';
        if (Auth::user()->pic) {
            return $imagePath.Auth::user()->pic;
        } else {
            return $imagePath.'default-user.png';
        }
    }

// Chequea picture del $user solicitado y establece una por defecto
function getUserPhoto($user)
    {
        $imagePath = 'images/';
        if ($user->pic) {
            return $imagePath.$user->pic;
        } else {
            return $imagePath.'default-user.png';
        }
    }