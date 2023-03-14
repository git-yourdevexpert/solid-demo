<?php
namespace App\Repository\Interface;

interface UserInterface
{
    public function create($data);

    public function update($user,$data);

    public function delete($data);

    public function find($id);

    public function getAll();
}
