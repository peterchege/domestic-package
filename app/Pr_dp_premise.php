<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pr_dp_premise extends Model
{
    //
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
