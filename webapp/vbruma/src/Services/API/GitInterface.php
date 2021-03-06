<?php


namespace App\Services\API;


interface GitInterface
{
    /**
     * Get public user info
     *
     * @param $username
     * @return array
     */
    public function getUser($username): array;

    /**
     * @param $username
     * @return string
     */
    public function getProfileLink($username): string;
}

