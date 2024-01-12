<?php

namespace App\Model;

class CategorieModel extends Model
{
    public function fetchAllCategories(){
       return  $this->read("categorie");
    }
}