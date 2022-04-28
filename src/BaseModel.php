<?php

namespace Musonza\Chat;

use Jenssegers\Mongodb\Eloquent\Model;

class BaseModel extends Model
{
    protected $tablePrefix = 'chat_';
}
