<?php

namespace App\Services\Contracts;


interface ShardManagerContract
{
    public function table($table);

    public function clinicId($clinicId);

    public function get();
}
