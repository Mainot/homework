<?php

namespace App\Services;

use App\Services\Contracts\ShardManagerContract;


class ShardService implements ShardManagerContract
{
    private $_table, $_clinicId;


    public function table($table)
    {
        $this->_table = $table;
        return $this;
    }

    public function clinicId($clinicId)
    {
        $this->_clinicId = (int) $clinicId;

        if ($this->_clinicId <= 0) {
            throw new \Exception('$this->_clinicId <= 0');
        }

        return $this;
    }

    public function get()
    {
        if ($this->_table === null || $this->_clinicId === null) {
            throw new \Exception('$this->_table === null || $this->_clinicId === null');
        }

        switch ($this->_table) {
            case 'doctors':
                $table = $this->_table . '_' . ($this->_clinicId % 5);
                break;

            default:
                throw new \Exception('Unknown value in $this->_table');
                break;
        }

        return $table;
    }
}
