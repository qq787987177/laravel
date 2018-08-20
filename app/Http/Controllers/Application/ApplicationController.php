<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\ApiController;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class ApplicationController extends ApiController
{
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
        $paginate = Application::paginate($size);
        $data     = [];
        /** @var Application $value */
        foreach ($paginate->items() as $value) {
            $value->category = $value->category->name;
            $data[]          = $value->attributesToArray();
        }

        return $this->success([
            'data'  => $data,
            'count' => $paginate->total(),
        ]);
    }

    /**
     * categoryList
     *
     * @author yangyi
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function categoryList()
    {
        $data = DB::table('application_category')
            ->where('is_open', true)
            ->get(['id', 'name']);

        return $this->success([
            'data' => $data,
        ]);
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
        Application::create($data);

        return $this->success();
    }

    /**
     * update
     *
     * @author yangyi
     *
     * @param Request     $request
     * @param Application $application
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function update(Request $request, Application $application)
    {
        $data      = json_decode($request->getContent(), true);
        $validator = $this->validateThis(array_merge($application->getAttributes(), $data));

        if ($validator->fails()) {
            return $this->error($validator->getMessageBag(), 200);
        }
        if (!$application->update($data)) {
            return $this->error('更新失败', 200);
        }

        return $this->success();
    }

    /**
     * change
     *
     * @author yangyi
     *
     * @param Application $application
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function change(Application $application)
    {
        $application->is_open = !$application->is_open;
        $application->save();

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
            'name'        => 'required',
            'jump_type'   => 'required',
            'icon'        => 'required',
            'category_id' => 'required|exists:application_category,id',
        ], [
            'name.required'        => '名称不能为空',
            'jump_type.required'   => '类型标识不能为空',
            'icon.required'        => '缩略图不能为空',
            'category_id.exists'   => '类型不存在',
            'category_id.required' => '类型ID不能为空',
        ]);

        return $validator;
    }
}
