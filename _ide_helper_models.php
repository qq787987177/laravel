<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Article
 *
 * @mixin \Eloquent
 */
	class Article extends \Eloquent {}
}

namespace App\Models{
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
	class Activity extends \Eloquent {}
}

namespace App\Models{
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
	class Advert extends \Eloquent {}
}

namespace App\Models{
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
	class Application extends \Eloquent {}
}

namespace App\Models{
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
	class ApplicationCategory extends \Eloquent {}
}

namespace App\Models{
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
	class Depot extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Goods
 *
 * @property int $id 商品id
 * @property string $goods_sn 商品唯一编码
 * @property string $title 商品标题
 * @property string $sub_title 短标题
 * @property int $category_id 商品分类id
 * @property int $shop_id 店铺id
 * @property int $shop_category_id 店铺分类id
 * @property int|null $brand_id 品牌自增id
 * @property string $brief 简要描述
 * @property float $original_price 市场价格（原价）
 * @property float $current_price 本店售价（现价）
 * @property int $weight 商品重量
 * @property float $transport_fee 运输费用
 * @property string $keywords 商品关键字
 * @property string $tag_str 标签
 * @property int|null $cover_img_id 列表封面图片id
 * @property int $is_intro 是否推荐
 * @property int $is_delete 是否被删除 0: 否 1：是
 * @property int $is_refund7 是否支持7天内退货
 * @property string $note 商家备注
 * @property int $stock 商品所有库存
 * @property string $spec_names 款式名称字符串 | 间隔 例如 颜色|大小
 * @property int $is_on_sale 是否上架 1: 是 0 ：否
 * @property string $audit_status 商品状态 wait：待审核 audited：已审核 rejected：已经驳回
 * @property string $remark 备注，审核驳回备注
 * @property string $update_time 最后一次更新时间
 * @property string $add_time 商品添加时间
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereAuditStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereBrief($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereCoverImgId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereCurrentPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereGoodsSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereIsDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereIsIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereIsOnSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereIsRefund7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereOriginalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereShopCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereSpecNames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereTagStr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereTransportFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Goods whereWeight($value)
 * @mixin \Eloquent
 */
	class Goods extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Test
 *
 * @mixin \Eloquent
 */
	class Test extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

