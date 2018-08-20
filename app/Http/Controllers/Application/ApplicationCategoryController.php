<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\ApiController;
use App\Models\ApplicationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class ApplicationCategoryController extends ApiController
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
        $paginate = DB::table('application_category')->paginate($size);

        return $this->success([
            'data'  => $paginate->items(),
            'count' => $paginate->total(),
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
        ApplicationCategory::create($data);

        return $this->success();
    }

    /**
     * change
     *
     * @author yangyi
     *
     * @param ApplicationCategory $applicationCategory
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function change(ApplicationCategory $applicationCategory)
    {
        $applicationCategory->is_open = !$applicationCategory->is_open;
        $applicationCategory->save();

        return $this->success();
    }

    /**
     * update
     *
     * @author yangyi
     *
     * @param Request             $request
     * @param ApplicationCategory $applicationCategory
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function update(Request $request, ApplicationCategory $applicationCategory)
    {
        $data      = json_decode($request->getContent(), true);
        $validator = $this->validateThis(array_merge($applicationCategory->getAttributes(), $data));
        if ($validator->fails()) {
            return $this->error($validator->getMessageBag(), 200);
        }
        if (!$applicationCategory->update($data)) {
            return $this->error('更新失败', 200);
        }

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
            'name' => 'required',
        ], [
            'name.required' => '名称不能为空',
        ]);

        return $validator;
    }
}
