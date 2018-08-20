<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ApplicationCategory
 *
 * @property int $id id
 * @property string $name 分类名称
 * @property int $order_number 排序
 * @property int $is_open 是否开启
 * @property \Carbon\Carbon $create_time 创建时间
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationCategory whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationCategory whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApplicationCategory whereOrderNumber($value)
 * @mixin \Eloquent
 */
class ApplicationCategory extends Model
{
    protected $table = 'application_category';

    protected $guarded = [
        'id',
    ];

    const CREATED_AT = 'create_time';
    const UPDATED_AT = null;
}
