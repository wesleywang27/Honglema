<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TFansProfile
 */
class FansProfile extends Model
{
    protected $table = 'fans_profile';

    public $timestamps = false;

    protected $fillable = [
        'weipai_uid',
        'total_fans',
        'female_fans',
        'fans_with_age',
        'fans_age_group1',
        'fans_age_group2',
        'fans_age_group3',
        'fans_age_group4',
        'fans_city1',
        'fans_num_city1',
        'fans_city2',
        'fans_num_city2',
        'fans_city3',
        'fans_num_city3',
        'fans_city4',
        'fans_num_city4',
        'fans_city5',
        'fans_num_city5',
        'fans_city6',
        'fans_num_city6',
        'fans_city7',
        'fans_num_city7',
        'fans_city8',
        'fans_num_city8',
        'fans_city9',
        'fans_num_city9',
        'fans_city10',
        'fans_num_city10'
    ];

    protected $guarded = [];

        
}