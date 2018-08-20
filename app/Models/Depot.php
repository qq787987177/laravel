<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Depot
 *
 * @property int $id 提货点 自增id
 * @property string $name 提货点名称
 * @property int $province 收货人的省份
 * @property int $city 收货人的城市
 * @property int $district 收货人的地区
 * @property string $address 提货点地址
 * @property float $lng 经度
 * @property float $lat 纬度
 * @property string $contact_way 提货点联系方式
 * @property int $store_id 关联门店id
 * @property int $is_open 是否营业
 * @property int $is_rest 1:休息中 0：正常营业中
 * @property \Carbon\Carbon $create_time 创建时间
 * @property string|null $extend 开关配送服务，满减配送费
 * @property int $is_app_hidden 是否在APP隐藏
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereContactWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereExtend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereIsAppHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereIsRest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Depot whereStoreId($value)
 * @mixin \Eloquent
 */
class Depot extends Model
{
    protected $table = 'depot';
    const CREATED_AT = 'create_time';
    const UPDATED_AT = null;
}
