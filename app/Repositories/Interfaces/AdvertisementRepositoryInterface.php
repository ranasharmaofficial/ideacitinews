<?php
namespace App\Repositories\Interfaces;

Interface AdvertisementRepositoryInterface{
    
    public function allAdvertisements();
    public function storeAdvertisements($data);
    public function findAdvertisements($id);
    public function updateAdvertisements($data, $id); 
    public function destroyAdvertisements($id);
}