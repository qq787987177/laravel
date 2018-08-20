<?php

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\ApiController;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class ActivityController extends ApiController
{
    /**
     * detail
     *
     * @author yangyi
     *
     * @param Activity $activity
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function detail(Activity $activity)
    {
        $activity->toArray();

        return $this->success(['data' => $activity->depot->name]);
    }

    /**
     * list
     *
     * @author yangyi
     *
     * @param int $size
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function list($size = 10)
    {
        //不同写法
        /*$paginate = DB::table('activity')->paginate($size);
        $data     = [];
        foreach ($paginate->items() as $value) {
            $value->goods_id_list = json_decode($value->goods_id_list, true);
            $data[] = $value;
        }*/

        $paginate = Activity::paginate($size);
        $data     = [];
        /** @var Activity $value */
        foreach ($paginate->items() as $value) {
            $data[] = $value->attributesToArray();
        }

        return $this->success([
            'data'  => $data,
            'count' => $paginate->total(),
        ]);
    }

    /**
     * delete
     *
     * @author yangyi
     *
     * @param Activity $activity
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function delete(Activity $activity)
    {
        $activity->setAttribute('is_delete', true);
        $activity->save();

        return $this->success();
    }

    /**
     * add
     *
     * @author yangyi
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function add(Request $request)
    {
        $data      = json_decode($request->getContent(), true);
        $validator = $this->validateThis($data);
        if ($validator->fails()) {
            return $this->error($validator->getMessageBag(), 200);
        }
        $data['operator'] = 'admin';

        Activity::create($data);

        return $this->success();
    }

    /**
     * validateThis
     *
     * @author yangyi
     *
     * @param $data
     *
     * @return \Illuminate\Validation\Validator
     */
    private function validateThis($data)
    {
        $validator = Validator::make($data, [
            'title'           => 'required|max:50',
            'depot_id'        => 'exists:depot,id',
            'goods_id_list.*' => 'exists:goods,id',
        ], [
            'title.unique'           => '备注文字太长啦!',
            'title.required'         => 'title不能为空!',
            'depot_id.exists'        => '提货点不存在',
            'goods_id_list.*.exists' => '商品ID不正确',
        ]);

        return $validator;
    }

    /**
     * update
     *
     * @author yangyi
     *
     * @param Request  $request
     * @param Activity $activity
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $data      = json_decode($request->getContent(), true);
        $validator = $this->validateThis(array_merge($activity->attributesToArray(), $data));
        if ($validator->fails()) {
            return $this->error($validator->getMessageBag(), 200);
        }
        if (!$activity->update($data)) {
            return $this->error('更新失败', 200);
        }

        return $this->success();
    }
}
