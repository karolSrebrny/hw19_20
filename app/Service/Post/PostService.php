<?php


namespace App\Service\Post;


use App\Repository\Post\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostService
{

    protected $repository;

    public function __construct(PostRepositoryInterface $repository)
    {
        $this->repository= $repository;
    }

    public function index()
    {
        return $this->repository->all();
    }
    public function store(Request $request)
    {
        $data = $request->validate([]);

        $this->repository->create($data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([]);

        $this->repository->update($data, $id);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
    }


}
