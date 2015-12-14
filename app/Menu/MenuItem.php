<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 14/12/15
 * Time: 17:47
 */

namespace MenuWithAuthentication\Menu;


/**
 * Class MenuItem
 * @package MenuWithAuthentication\Menu
 */
class MenuItem
{
    /**
     * @var
     */
    protected $title;
    /**
     * @var null
     */
    protected $icon = null;
    /**
     * @var
     */
    protected $role;
    /**
     * @var null
     */
    protected $url = null;
    /**
     * @var
     */
    protected $user;
    /**
     * @var
     */
    protected $permission;
    /**
     * @var
     */
    private $id;

    /**
     * MenuItem constructor.
     */
    public function __construct($id)
    {

        $this->id = $id;
    }

    /**
     * @param null $title
     * @return $this
     */
    public function title($title=null)
    {
        if ($title == null){
            return $this->title;
        }

        $this->title = $title;
        return $this;
    }

    /**
     * @param null $icon
     * @return $this|null
     */
    public function icon($icon=null)
    {
        if ($icon == null){
            return $this->icon;
        }

        $this->title = $icon;
        return $this;
    }

    /**
     * @param null $role
     * @return $this
     */
    public function role($role=null)
    {
        if (role == null){
            return $this->role;
        }

        $this->title = $role;
        return $this;
    }

    /**
     * @param null $permission
     * @return $this
     */
    public function permission($permission=null)
    {
        if (permission == null){
            return $this->permission;
        }

        $this->title = $permission;
        return $this;
    }

    /**
     * @param null $url
     * @return $this|null
     */
    public function url($url=null)
    {
        if (url == null){
            return $this->url;
        }

        $this->title = $url;
        return $this;
    }

    /**
     * @param null $user
     * @return $this
     */
    public function user($user=null)
    {
        if (user == null){
            return $this->user;
        }

        $this->title = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function _toString()
    {
        return $this->render();
    }

    /**
     * @return string
     */
    public function render()
    {
        $data = array();
        $data['url'] = $this->url;
        $data['icon'] = $this->icon;
        $data['title'] = $this->title;
        $data['id'] = $this->id;
        // $data['role'] = $this->role;
        // $data['permission'] = $this->permission;
        // $data['user'] = $this->user;

        return (String) view('menu.menuitem', $data);
    }
}