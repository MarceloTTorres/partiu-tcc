<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    use softDeletes;
    //colunas que eu posso editar
    protected $fillable = ['conteudo', 'post_id', 'user_id'];
    //colunas que representam datas
    protected $dates = ['created_at', 'update_at', 'deleted_at'];
    //relacionamento com o usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //relacionamento com o post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
