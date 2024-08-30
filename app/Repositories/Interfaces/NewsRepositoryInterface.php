<?php
namespace App\Repositories\Interfaces;

Interface NewsRepositoryInterface{
    
    public function allNews();
    public function storeNews($data);
    public function findNews($id);
    public function updateNews($data, $id); 
    public function destroyNews($id);
}