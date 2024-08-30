<?php
namespace App\Repositories\Interfaces;

Interface EpaperRepositoryInterface{

    public function allEpaper();
    public function storeEpaper($data);
    public function findEpaper($id);
    public function updateEpaper($data, $id);
    public function destroyEpaper($id);
}
