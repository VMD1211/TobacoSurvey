<?php

namespace App\Services;

use App\Repo\UserRepositoryInterface;
use DB;
use \Carbon\Carbon;

class AdminService extends BaseService
{
	 /**
	 * @var \App\Repo\UserRepositoryInterface
	 */
    protected $userRepository;
    
    /**
     *
     * @param \App\Repo\UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function getAllUser()
    {
        return $this->userRepository->getAllUser();
    }
}