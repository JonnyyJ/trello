<?php
namespace App\Repository\Interfaces;

interface TaskInterface
{



    public function all();

    public function create(array $attributes);

    public function update(array $attributes, $id);

    public function delete($id);

    public function show($id);


}