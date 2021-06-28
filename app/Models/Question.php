<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;

    protected $fillable = array('question', 'user_id');

    protected $appends = ['author'];

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getAuthorAttribute(){
        return $this->user->name;
    }

    public function deleteQuestion(int $questionId){
        Answer::where('question_id', $questionId)->delete();
        $this->delete();
    }
}
