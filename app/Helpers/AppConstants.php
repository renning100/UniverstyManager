<?php

namespace App\Helpers;

use App\Helpers\Interfaces\CacheKeys;
use App\Helpers\Interfaces\EmployerTypes;
use App\Helpers\Interfaces\EventTypes;
use App\Helpers\Interfaces\Paths;
use App\Helpers\Interfaces\PushSections;
use App\Helpers\Interfaces\RequestTypes;
use App\Helpers\Interfaces\Time;
use App\Helpers\Interfaces\Roles;
use App\Helpers\Interfaces\Status;
use App\Helpers\Interfaces\UniversityStatus;
use App\Helpers\Interfaces\UserAccountStatus;

class AppConstants implements Paths, Time, EmployerTypes, CacheKeys, Roles, Status, RequestTypes,
    UserAccountStatus, UniversityStatus, PushSections,EventTypes
{
}
