<?php
namespace App\Repositories\Interfaces;

Interface TeamRepositoryInterface{
    
    public function allTeam();
    public function storeTeam($data);
    public function findTeam($id);
    public function updateTeam($data, $id); 
    public function destroyTeam($id);
}