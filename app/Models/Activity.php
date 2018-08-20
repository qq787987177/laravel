<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Activity
 *
 * @property int $id id
 * @property int $depot_id 提货点ID
 * @property string $title 活动名称
 * @property array $goods_id_list 赠品ID
 * @property string $start_time 开始时间
 * @property string $end_time 结束时间
 * @property \Carbon\Carbon $create_time 创建时间
 * @property float $limit_price 满赠条件
 * @property int $limit_time 限购次数
 * @property int $is_delete 是否删除
 * @property string $operator 操作人
 * @property-read \App\Models\Depot $depot
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereDepotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereGoodsIdList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereIsDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereLimitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereLimitTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereOperator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereTitle($value)
 * @mixin \Eloquent
 */
class Activity extends Model
{
    /**
     * @var string
     */
    protected $table = 'activity';
    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'goods_id_list' => 'array',
    ];

    const CREATED_AT = 'create_time';
    const UPDATED_AT = null;

    public function depot(){
        return $this->belongsTo('App\Models\Depot');
    }
}
