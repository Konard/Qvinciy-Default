<?php
namespace Service\Profile;

use ServiceContainer;

class Profile extends ServiceContainer
{
    public function getRegisteredUsers()
    {
        return \Model\User::all();
    }
}
