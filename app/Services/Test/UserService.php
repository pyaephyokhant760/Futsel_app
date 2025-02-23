<?php
namespace App\Services\Test;

use App\Models\User;
use App\Services\Test\CommonService;

class UserService extends CommonService
{
    public function connection()
    {
        return new User;
    }
    
    public function getAllData()
    {
        return $this->connection()->all();
    }

    public function getDataById($id)
    {
        return $this->connection()->where('id', $id)->first();
    }

    public function insert(array $data)
    {
        return $this->connection()->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->connection()->where('id', $id)->update($data);
    }

    public function destroy($id)
    {
        return $this->connection()->destroy($id);
    }
}