<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class Goods extends Model
{
    protected $table = 'goods';
}
