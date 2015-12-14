<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 14/12/15
 * Time: 17:47
 */

namespace MenuWithAuthentication\Menu;


class MenuItem
{
    protected $title;
    protected $icon = null;
    protected $role;
    protected $url = null;
    protected $user;
    protected $permission;

    /**
     * MenuItem constructor.
     */
    public function __construct()
    {

    }

    public function title($title=null)
    {
        if ($title == null){
            return $this->title;
        }

        $this->title = $title;
        return $this;
    }

    public function icon($icon=null)
    {
        if ($icon == null){
            return $this->icon;
        }

        $this->title = $icon;
        return $this;
    }

    public function role($role=null)
    {
        if (role == null){
            return $this->role;
        }

        $this->title = $role;
        return $this;
    }

    public function permission($permission=null)
    {
        if (permission == null){
            return $this->permission;
        }

        $this->title = $permission;
        return $this;
    }

    public function url($url=null)
    {
        if (url == null){
            return $this->url;
        }

        $this->title = $url;
        return $this;
    }

    public function user($user=null)
    {
        if (user == null){
            return $this->user;
        }

        $this->title = $user;
        return $this;
    }

    public function _toString()
    {
        return $this->render();
    }

    public function render()
    {
        $data = array();
        $data['url'] = $this->url;
        $data['icon'] = $this->icon;
        $data['title'] = $this->title;
        // $data['role'] = $this->role;
        // $data['permission'] = $this->permission;
        // $data['user'] = $this->user;

        return (String) view('menu.menuitem', $data);
    }
}