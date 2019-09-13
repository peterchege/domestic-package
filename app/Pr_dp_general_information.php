<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pr_dp_general_information extends Model
{
    //
    protected $fillable = ['id'];

    /**
     * For removing error when updating db.(trailing error)
     *
     * @var array
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}
