<?php

namespace App\Constants;

class UserConstants
{
    const GENDER_NOT_SPECIFIED = 0;
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    const GENDER_LIST = [
        self::GENDER_NOT_SPECIFIED => '未指定',
        self::GENDER_MALE => '男性',
        self::GENDER_FEMALE => '女性',
    ];

    public static function getGenderListSize()
    {
        return count(self::GENDER_LIST);
    }

    const ROLE_ADMIN = 0;
    const ROLE_PROF = 1;
    const ROLE_USER = 2;

    const ROLE_LIST = [
        self::ROLE_ADMIN => '管理者',
        self::ROLE_PROF => '先生',
        self::ROLE_USER => '生徒',
    ];

    public static function getRoleListSize()
    {
        return count(UserConstants::ROLE_LIST);
    }

    const SITUATION_INACTIVE = 0;
    const SITUATION_ACTIVE = 1;

    const SITUATION_LIST = [
        self::SITUATION_INACTIVE => '非活性状態',
        self::SITUATION_ACTIVE => '活性状態',
    ];

    public static function getSituationListSize()
    {
        return count(UserConstants::SITUATION_LIST);
    }
}
