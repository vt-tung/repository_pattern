<?php
/**
 * @Author This PC
 * @Date   Feb 16, 2023
 */

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
interface BaseRepositoryInterface
{
    public function getAllList();
    public function getListById($id);
}