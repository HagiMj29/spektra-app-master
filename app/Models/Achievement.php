<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    protected $table = 't_achievement';

    protected $primaryKey = 'achievement_id';

    protected $fillable = [
        'student_id',
        'type',
        'description',
    ];

    public static $createRules = [
        'student_id' => 'required',
        'type' => 'required',
        'description' => 'required',
    ];

    public static $customMessage = [
        'student_id.required'=> 'Major cannot be empty!',
        'type.required'=> 'Grade cannot be empty!',
        'description.required'=> 'Class cannot be empty!',
    ];
    public static $editRules = [
        'student_id' => 'required',
        'type' => 'required',
        'description' => 'required',

    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }
}
