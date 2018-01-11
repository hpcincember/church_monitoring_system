<?php

namespace App;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use DB;
class Leader extends Model
{
    public $helper;

    public function __construct()
    {
        $this->helper = new Helper();
    }

    public function getLevelAttribute($level)
    {
        return $this->helper->getLevel($level);
    }

    public function getGenderAttribute($gender)
    {
        return $this->helper->getGender($gender);
    }

    public function findLeaders()
    {
        $sql = "SELECT leaders.id , first_name, middle_name, last_name, suffix, gender, school, work_place, contact_number, fb_account, email_address, level, (SELECT name from cell_groups where id = cg.network_id) as network, (SELECT name from cell_groups where id = cg.id) as cell_group, birth_date, first_attend, leaders.created_at, leaders.updated_at 
                FROM leaders 
                LEFT JOIN cell_groups as cg ON cg.leader_id = leaders.id";
        return DB::select($sql);
    }
}
