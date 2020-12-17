<?php

namespace Masoud5070\VandarAuthBasic\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    /**
     * @inheritdoc
     */
    protected $connection = 'mysql';

    /**
     * @inheritdoc
     */
    protected $table = 'admins';

    /**
     * @inheritdoc
     */
    protected $fillable = ['email', 'password'];

    /**
     * @inheritdoc
     */
    protected $hidden = ['password'];
}
