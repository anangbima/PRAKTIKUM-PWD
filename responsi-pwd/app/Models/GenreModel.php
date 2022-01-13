<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class GenreModel extends Model
{
    protected $table = 'genre';
    protected $primaryKey = 'genre_id';
    protected $allowedFields = ['genre_nama'];
   
}