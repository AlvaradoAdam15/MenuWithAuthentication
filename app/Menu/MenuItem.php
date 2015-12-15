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
     * @var
     */
    protected $role;
    /**
     * @var
     */
    protected $icon = null;
    /**
     * @var
     */
    protected $url = null;
    /**
     * @var
     */
    protected $permission;
    /**
     * @var
     */
    protected $user;
    /**
     * Current menu item
     * @var MenuItem
     */
    public static $current;
    /**
     * @var
     */
    private $id;
    /**
     * Menu item depth level
     * @var int
     */
    protected $level;
    /**
     * Menu item subitems
     * @var MenuItem[]
     */
    protected $subItems = [];
    /**
     * MenuItem constructor.
     */
    public function __construct($id)
    {
        $this->id = $id;
        if (is_null(static::$current))
        {
            static::$current = $this;
            $this->level(0);
        } else
        {
            static::$current->addItem($this);
            $this->level(static::$current->level() + 1);
        }
    }
    /**
     * Add subitem
     * @param MenuItem $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->subItems[] = $item;
        return $this;
    }
    /**
     * Get or set menu item depth level
     * @param int|null $level
     * @return $this|int
     */
    public function level($level = null)
    {
        if ($level == null)
        {
            return $this->level;
        }
        $this->level = $level;
        return $this;
    }
    /**
     * @param null $title
     * @return $this
     */
    public function title($title=null)
    {
        if ($title == null) {
            return $this->title;
        }
        $this->title = $title;
        return $this;
    }
    /**
     * @param null $icon
     * @return $this
     */
    public function icon($icon=null)
    {
        if ($icon == null) {
            return $this->icon;
        }
        $this->icon = $icon;
        return $this;
    }
    /**
     * @param null $url
     * @return $this
     */
    public function url($url=null)
    {
        if ($url == null) {
            return $this->url;
        }
        $this->url = $url;
        return $this;
    }
    /**
     * @param null $role
     * @return $this
     */
    public function role($role=null)
    {
        if ($role == null) {
            return $this->role;
        }
        $this->role = $role;
        return $this;
    }
    /**
     * @param null $permission
     * @return $this
     */
    public function permission($permission=null)
    {
        if ($permission == null) {
            return $this->permission;
        }
        $this->permission = $permission;
        return $this;
    }
    /**
     * @param null $user
     * @return $this
     */
    public function user($user=null)
    {
        if ($user == null) {
            return $this->user;
        }
        $this->user = $user;
        return $this;
    }
    /**
     * @return string
     */
    public function __toString()
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
//        $data['permission'] = $this->permission;
//        $data['role'] = $this->role;
//        $data['user'] = $this->user;
        return (String) view('menu.menuitem',$data);
    }
    /**
     * Get or set menu item subitems
     *
     */
    public function items()
    {
        $old = static::$current;
        static::$current = $this;
        static::$current = $old;
        return $this;
    }
}