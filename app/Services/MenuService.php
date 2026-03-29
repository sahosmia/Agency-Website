<?php

namespace App\Services;

use App\Contracts\Repositories\MenuRepositoryInterface;
use App\Models\Menu;

class MenuService
{
    protected $menuRepository;

    /**
     * MenuService constructor.
     *
     * @param MenuRepositoryInterface $menuRepository
     */
    public function __construct(MenuRepositoryInterface $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    /**
     * Get all menus.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllMenus()
    {
        // Still need order, base repository doesn't handle custom order yet, but we can add it or use all()
        return $this->menuRepository->all();
    }

    /**
     * Store a new menu.
     *
     * @param array $data
     * @return Menu
     */
    public function storeMenu(array $data): Menu
    {
        return $this->menuRepository->create($data);
    }

    /**
     * Update a menu.
     *
     * @param Menu $menu
     * @param array $data
     * @return bool
     */
    public function updateMenu(Menu $menu, array $data): bool
    {
        return $this->menuRepository->update($menu->id, $data);
    }

    /**
     * Delete a menu.
     *
     * @param Menu $menu
     * @return bool
     */
    public function deleteMenu(Menu $menu): bool
    {
        return $this->menuRepository->delete($menu->id);
    }
}
