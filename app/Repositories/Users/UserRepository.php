<?php
/**
 * @Author This PC
 * @Date   Feb 16, 2023
 */

namespace App\Repositories\Users;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    protected $user;

    public function __construct(User $user){
        parent::__construct($user);
    }

}