<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Application
 *
 * @property int $id id
 * @property int $category_id
 * @property string $name 应用名称
 * @property string $jump_type 应用标识
 * @property int $order_number 排序
 * @property int $is_open 是否开启
 * @property string|null $jump_value 跳转链接
 * @property string $icon 缩略图
 * @property \Carbon\Carbon $create_time
 * @property int $is_hide 是否隐藏
 * @property string|null $version 版本号
 * @property-read \App\Models\ApplicationCategory $category
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereIsHide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereJumpType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereJumpValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereVersion($value)
 * @mixin \Eloquent
 */
class Application extends Model
{
    protected $table = 'application';

    protected $guarded = [
        'id',
    ];

    const CREATED_AT = 'create_time';
    const UPDATED_AT = null;

    public function category()
    {
        return $this->belongsTo('App\Models\ApplicationCategory');
    }
}
