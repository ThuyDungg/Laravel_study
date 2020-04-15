<?php

namespace App\Services;

// use App\Services\Admin\BaseService;
use App\Models\User;
use DB;
use Exception;
use Log;

class UserService
{
    public function getList($limit, $condition = [])
    {
        $users = User::orderBy('id', 'DESC');

        return $users->paginate($limit);
    }
}
