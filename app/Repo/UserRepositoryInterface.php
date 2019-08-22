<?php
namespace App\Repo;

use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
	/**
     * @codeCoverageIgnore
     * @param int $id
     *
     * @return array
     */
    public function getAllUser();

    /**
     * @codeCoverageIgnore
     * @param array $params
     *
     * @return
     */
    public function create($params);
    /**
     * @param int $id
     *
     * @return boolean
     */
    public function checkUserExistById($id);
    /**
     * @param int $id
     *
     * @return int
     */
    public function deleteUserById($id);

    /**
     * @codeCoverageIgnore
     * @param int $id
     *
     * @return array
     */
    public function findById($id);

    /**
     * @codeCoverageIgnore
     * @param int $id
     * @param array $data
     *
     * @return int
     */
    public function update($id, $data);

    /**
     * @codeCoverageIgnore
     *
     * @return boolean
     */
    //public function checkDBHasMoreThanOneAdmin();
}
?>