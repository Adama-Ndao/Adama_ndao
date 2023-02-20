<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour 
{
    public int $num;
    public string $nom;
    public int $duree;
    public function __construct(int $num, string $nom, int $duree){
        $this->num = $num;
        $this->nom = $nom;
        $this->duree = $duree;
    }
}
