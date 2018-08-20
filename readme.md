<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Swagger
``````
安装依赖swagger-php
composer require zircote/swagger-php

创建SwaggerController
php artisan make:controller SwaggerController

在SwaggerController加上导出SwaggerJSON数据的处理

/**
 * @Swagger(
 *     schemes={"http"},
 *     basePath="/",
 *     consumes={"application/json"},
 *     tags={
 *         @SWG\Tag(
 *             name="API",
 *             description="API接口"
 *         )
 *     }
 * )
 *
 * @Info(
 *  title="API文档",
 *  version="0.1"
 * )
 *
 * @return mixed
 */
class SwaggerController extends Controller
{
    public function doc()
{
$swagger = \Swagger\scan(realpath(__DIR__.'/../../'));
        return response()->json($swagger);
    }
}

在routes.php加上路由

Route::get('/swagger/doc', 'SwaggerController@doc');

接下来下载swagger-ui，将swagger-ui/dist目录内的文件拷贝于/public/swagger-ui目录下，可以尝试访问http://localhost/swagger-ui看看能否正常显示。

会发现文档地址还是例子的地址，可以修改public/swagger-ui/index.html文件下的默认地址

var url = window.location.search.match(/url=([^&]+)/);
if (url && url.length > 1) {
url = decodeURIComponent(url[1]);
} else {
url = "http://petstore.swagger.io/v2/swagger.json" //改成你的路由地址，如：/swagger/doc;
}
``````    

## PHPSTROM 快捷方式
### Editing ###
``````
`Ctrl + Space`    基本代码完成(任意类的，方法的或者变量的名称)
`Ctrl + Shift + Enter`    补全当前语句
`Ctrl + P`   Parameter info (within method call arguments)   
`Ctrl + Q`    快速查找文档
`Ctrl + 鼠标滑过`   简明信息查看
`Ctrl + F1`    在插入符号处显示错误或者警告信息
`Alt + Insert`   生成代码...(Getters,Setters,Constructors)
`Ctrl + O`   重写方法
`Ctrl + I`  实现方法
`Ctrl + Alt + T` 使用if...else,try...catch,for等包围代码
`Ctrl + /`    注释/取消行注释
`Ctrl + Shift + /`   注释/取消块注释
`Ctrl + W`    增量式选择代码
`Ctrl + Shift + W`   减少选择的代码块，与`Ctrl+W`相反
`Alt + Q`    Context info
`Alt + Enter`    Show	intention	actions	and	quick-fixes
`Ctrl + Alt + L`   格式化代码
`Ctrl + Alt + I`   自动缩进单行或者多行
`Tab/Shift + Tab`   缩进选中的行或者取消选中行的缩进
`Ctrl + X`or `Shift+Delete`    剪切
`Ctrl + C` or `Shift+Insert`   复制
`Ctrl + V` or `Shift+Insert`   粘贴
`Ctrl + Shift + V`   
`Ctrl + D`   复制当前的行或者选中的块  
`Ctrl + Y`   在插入符号处删除行
`Ctrl + Shift + J`   Join lines   
`Ctrl + Enter`    Split line   
`Shift + Enter`    新起一行
`Ctrl + Shift + U`   切换大小写
`Ctrl + Shift + ]/[`    选择代码块到开始或者结尾
`Ctrl + Delete`    删除单词从光标处到到结尾
`Ctrl + Backspace`   删除单词从光标处到开头
`Ctrl + NumPad+/-`   展开或者折叠代码块 
`Ctrl + Shift +NumPad+`    展开所有
`Ctrl + Shift +NumPad-`    折叠所有
`Ctrl + F4`    关闭编辑页面
``````

### Search/Replace ###
``````
`Ctrl + F`   查找
`F3`    查找下一个
`Shift + F3` 查找上一个
`Ctrl + R`    替换
`Ctrl + Shift + F`    Find in path 
`Ctrl + Shift + R`    Replace in path
``````

### Usage Search ###
``````
`Alt + F7/Ctrl + F7`   查找使用处/在文件中查找使用处
`Ctrl + Shift + F7`   在文件中高亮使用处
`Ctrl + Alt + F7`    显示所有使用处
``````

### Running ###
``````
`Alt + Shift + F10`    选择配置并运行
`Alt + Shift+ F9`    选择配置并调试
`Shift + F10`    运行
`Shift + F9`    调试
`Ctrl + Shift + F10`    从编辑器运行环境配置    
`Ctrl + Shift + X`    运行命令行
``````

### Debugging ###
``````
`F8`   逐过程
`F7`   逐语句
`Shift + F7`   智能单步执行
`Shift + F8`   跳出
`Alt + F9`  运行到光标处
`Alt + F8`  计算表达式
`F9`  重新开始程序
`Ctrl + F8`  切换断点
`Ctrl + Shift + F8`   查看所有断点
``````

### Navigation ###
``````
`Ctrl + N`  查找类
`Ctrl + Shift + N`	 查找文件
`Ctrl + Alt + Shift + N`  查找符号
`Alt + Right/Left`  切换上一个/下一个编辑区
`F12`  回到以前的工具窗口
`Esc`  从工具窗口到编辑区
`Shift + Esc`  隐藏当前使用的或上次使用的窗口
`Ctrl + Shift + F4`	 关闭打开的运行/消息/查找/...	对话框
`Ctrl + G`  调整到指定行
`Ctrl + E`	 打开最近使用的文件显示框
`Ctrl + Alt + Left/Right`  导航回退或者前进
`Ctrl + Shift + Backspace`  定位到最后编辑区
`Alt + F1`	 选择当前文件或者符号在任意显示窗口中(例如：结构，项目等)
`Ctrl + B or Ctrl + Click`  调整到声明处
`Ctrl + Alt + B`  调整到实现
`Ctrl + Shift + I`	 查看定义(例如：查看函数具体实现)
`Ctrl + Shift + B`  调整到类型声明处
`Ctrl + U`  跳到父类/超类
`Alt + Up/Down`  跳到上一个/下一个方法
`Ctrl + ] / [`  移动到代码块的结束/开始
`Ctrl + F12`  显示文件结构
`Ctrl + H`   类型层次结构,例如类的继承
`Ctrl + Shift + H`  方法的层次结构
`Ctrl + Alt + H` 调用层次结构
`F2 / Shift + F2`  下一个/以前的突出显示错误
`F4 / Ctrl + Enter`  编辑源代码 / 查看源代码
`Alt + Home`  显示导航栏
`F11`  切换书签
`Ctrl + F11`  Toggle bookmark with mnemonic
`Ctrl + #[0-9]`  Go to numbered bookmark
`Shift + F11`  显示所有书签
``````

### Refactoring ###
``````
`F5`  Copy   复制
`F6`  Move   移动
`Alt + Delete`  安全删除
`Shift + F6`  重命名
`Ctrl + Alt + N`  嵌入变量
`Ctrl + Alt + M`  提取方法
`Ctrl + Alt + V`  提取变量
`Ctrl + Alt + F`  提取字段
`Ctrl + Alt + C`  提取常量
``````

### VCS/Local History ###
``````
`Alt + BackQuote (`)`  ‘ VCS’ quick popup
`Ctrl + K`  提交项目到VCS
`Ctrl + T`  从VCS更新项目
`Alt + Shift + C`  查看最近更改
``````

### General ###
``````
`Ctrl + Shift + A`  查找Action
`Alt + #[0-9]`  打开相应的工具窗口
`Ctrl + Shift + F12`  最大化切换编辑器
`Alt + Shift + F`  添加到收藏夹
`Alt + Shift + I`	 检查当前文件与当前概要文件
`Ctrl + BackQuote (`)`  Quick switch current scheme
`Ctrl + Alt + S`  打开设置对话框
`Ctrl + Tab`  Switch between tabs and tool window
``````# laravel
# laravel
# laravel
