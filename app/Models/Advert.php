<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Advert
 *
 * @property int $id
 * @property int $show_time 展示时间
 * @property int $sort 排序
 * @property string|null $start_time 起始日期
 * @property string|null $end_time 结束日期
 * @property \Carbon\Carbon $update_time 最后一次更新时间
 * @property \Carbon\Carbon $add_time 添加时间
 * @property string $img
 * @property string $jump_type 跳转类型
 * @property string $jump_value 跳转值
 * @property array $options
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereJumpType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereJumpValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereShowTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Advert whereUpdateTime($value)
 * @mixin \Eloquent
 */
class Advert extends Model
{
    protected $table = 'advert';

    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'options' => 'array',
    ];

    const CREATED_AT = 'add_time';
    const UPDATED_AT = 'update_time';

}
