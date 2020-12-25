<?php
declare (strict_types = 1);

namespace app\admin\controller;

use ghost\AdminService;
use ghost\MenuService;
use think\facade\View;

class Index
{
    public function index()
    {
        if(!AdminService::instance()->isLogin()) {
            return redirect(sysuri('admin/login/index'));
        }

        View::assign('menus', MenuService::instance()->getTree());
        View::assign('title', '系统管理后台');
        return View::fetch();
    }
}
