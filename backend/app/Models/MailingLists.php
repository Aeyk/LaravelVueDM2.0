<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailingLists extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['file'];
    
    public function mailing_list()
    {
        return $this->hasMany(MailingList::class);
    }
}
