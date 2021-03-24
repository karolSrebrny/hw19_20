<?php


namespace App\Repository\Post;

use App\Models\Post;

class PdoPostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function find($id)
    {
        return Post::find($id);
    }

    public function create(array $filed)
    {
        return Post::create($filed);
    }

    public function update(array $filed, $id)
    {
        $ad = $this->find($id);

        $ad->update($filed);

        return $ad;
    }

    public function delete($id)
    {
        $ad = $this->find($id);

        return $id->delete();
    }

}
