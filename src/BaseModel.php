<?php

namespace Musonza\Chat;

//  use Jenssegers\Mongodb\Eloquent\Model;
use Zs\Mongodb\Eloquent\Model;

class BaseModel extends Model
{
    protected $tablePrefix = 'chat_';
}
