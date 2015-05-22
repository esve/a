<?php

/**
 * Informacion Global del perfil del Usuario Logeado (Local)
 */


function myID()
{
    return Auth::user()->id;
}


function myUsername()
{
    return Auth::user()->username;
}

function myCountry()
{
    return Auth::user()->country_code;
}

function myName()
{
    return Auth::user()->firstname;
}

function myLastname()
{
    return Auth::user()->lastname;
}

function eMailAddress()
{
    return Auth::user()->email;
}

function goSteamId()
{
    return Auth::user()->gosteamid;
}

function myPic()
{
    return Auth::user()->pic;
}

