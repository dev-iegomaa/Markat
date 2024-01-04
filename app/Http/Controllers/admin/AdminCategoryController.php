<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\admin\AdminCategoryInterface;
use App\Http\Requests\admin\category\CheckIdCategoryRequest;
use App\Http\Requests\admin\category\CreateCategoryRequest;
use App\Http\Requests\admin\category\UpdateCategoryRequest;

class AdminCategoryController extends Controller
{
    private $categoryInterface;
    public function __construct(AdminCategoryInterface $interface)
    {
        $this->categoryInterface = $interface;
    }

    public function index()
    {
        return $this->categoryInterface->index();
    }

    public function create()
    {
        return $this->categoryInterface->create();
    }

    public function insert(CreateCategoryRequest $request)
    {
        return $this->categoryInterface->insert($request);
    }

    public function delete(CheckIdCategoryRequest $request)
    {
        return $this->categoryInterface->delete($request);
    }

    public function edit(CheckIdCategoryRequest $request)
    {
        return $this->categoryInterface->edit($request);
    }

    public function update(UpdateCategoryRequest $request)
    {
        return $this->categoryInterface->update($request);
    }
}
