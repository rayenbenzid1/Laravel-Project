<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model{
    use HasFactory;
    public function messageWelcome(){
        return 'Hello, This is a message from the model!';
    }
}
?>
