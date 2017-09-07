<?php namespace Modules\ComtabiliteEnergetique\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('Comtabiliteenergetique'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('comtabiliteenergetique::comtabiliteenergetiques.title.comtabiliteenergetiques'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.comtabiliteenergetique.comtabiliteenergetique.create');
                    $item->route('admin.comtabiliteenergetique.comtabiliteenergetique.index');
                    $item->authorize(
                        $this->auth->hasAccess('comtabiliteenergetique.comtabiliteenergetiques.index')
                    );
                });
// append

            });
        });

        return $menu;
    }
}
