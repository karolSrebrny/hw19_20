<?php


namespace App\Repository\Post;

interface PostRepositoryInterface
{
    public function all();

    public function find($id);

    public function create(array $filed);

    public function update(array $filed, $id);

    public function delete($id);


}
