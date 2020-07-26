1.composer require oyan/web-for-login

2.服务注册：在config/app.php文件中的数组providers添加Oyan\Weblogin\WebloginServiceProvider::class

3.别名配置：在config/app.php文件中的数组aliases添加Packagetest’ => Oyan\Weblogin\Facades\Packagetest::class

4.项目根目录执行：composer dump-autoload

5.发布资源：php artisan vendor:publish --provider="Oyan\Weblogin\WebloginServiceProvider"
