<?php
namespace App\Helpers;

class Helper
{
    const MALE = 1;
    const FEMALE = 2;
    const PASTOR = 0;
    const PRIMARY = 1;
    const ONE_FOUR_FOUR = 2;
    const ONE_SEVEN_TWO_EIGHT = 3;
    const TWENTY_THOUSAND = 4;


    public function getGender($gender)
    {
        return ($gender == self::MALE) ? "Male" : "Female";
    }

    public function getLevel($level)
    {
        $displayLevel = "";
        switch($level) {
            case 0:
                $displayLevel = "Pastor/Pastor's Wife";
                break;
            case 1;
                $displayLevel = "Primary Leaders";
                break;
            case 2;
                $displayLevel = "144 Leaders";
                break;
            case 3;
                $displayLevel = "1728 Leaders";
                break;
            case 4;
                $displayLevel = "20,000 Leaders";
                break;
            default:
                $displayLevel = "Invalid Level";
        }
        return $displayLevel;

    }


}
