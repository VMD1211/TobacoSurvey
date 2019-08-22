<?php
namespace App\Repo;

use Illuminate\Database\Connection;
use Illuminate\Support\Collection;
use \Carbon\Carbon;
class UserRepository implements UserRepositoryInterface
{
	/**
     * @var \Illuminate\Database\Connection
     */
    protected $db;
    /**
     * UserRepository constructor.
     *
     * @param \Illuminate\Database\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }
    /**
     * @return \Illuminate\Database\Query\Builder
     */
    protected function query()
    {
        return $this->db->table('users');
    }
    public function getAllUser(){
        return $this->query()->get();
    }
    public function create($params){

    }
    public function checkUserExistById($id){

    }
    public function deleteUserById($id){

    }

    public function findById($id){

    }
    public function update($id, $data){

    }
}
?>