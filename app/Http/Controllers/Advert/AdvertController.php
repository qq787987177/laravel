<?php

namespace App\Http\Controllers\Advert;

use App\Http\Controllers\ApiController;
use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Validator;

class AdvertController extends ApiController
{
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
        Advert::create($data);

        return $this->success();
    }

    /**
     * update
     *
     * @author yangyi
     *
     * @param Request $request
     * @param Advert  $advert
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function update(Request $request, Advert $advert)
    {
        $data      = json_decode($request->getContent(), true);
        $validator = $this->validateThis(array_merge($advert->getAttributes(), $data));

        if ($validator->fails()) {
            return $this->error($validator->getMessageBag(), 200);
        }
        if (!$advert->update($data)) {
            return $this->error('更新失败', 200);
        }

        return $this->success();
    }

    /**
     * delete
     *
     * @author yangyi
     *
     * @param Advert $advert
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function delete(Advert $advert)
    {
        try {
            $advert->delete();
        } catch (\Exception $exception) {
            return $this->error('删除失败', 200);
        }

        return $this->success();
    }

    /**
     * list
     *
     * @author yangyi
     *
     * @param $size
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function list($size = 10)
    {
        $paginate = DB::table('advert')->paginate($size);
        $data     = [];
        foreach ($paginate->items() as $value) {
            $value->options = json_decode($value->options, true);
            $data[]         = $value;
        }

        return $this->success([
            'data'  => $data,
            'count' => $paginate->total(),
        ]);
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
            'img'       => 'required|url',
            'jump_type' => [
                'required',
                Rule::in(["web", "daily_coupon", "goods_detail"]),
            ],
        ], [
            'img.required' => '图片不能为空',
            'img.url'      => '请传入正确的图片地址',
        ]);

        return $validator;
    }
}
