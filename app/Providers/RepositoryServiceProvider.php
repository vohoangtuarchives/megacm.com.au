<?php

namespace App\Providers;

use App\ApiManager;
use App\Core;
use App\Facades\Api;
use App\Facades\Core as CoreFacade;
use App\Repository\Colors\ColorRepository;
use App\Repository\Colors\ColorRepositoryContract;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Repository\Accounts\AccountRepository;
use App\Repository\Accounts\AccountRepositoryContract;
use App\Repository\Cities\CityRepository;
use App\Repository\Cities\CityRepositoryContract;
use App\Repository\Districts\DistrictRepository;
use App\Repository\Districts\DistrictRepositoryContract;
use App\Repository\Wards\WardRepository;
use App\Repository\Wards\WardRepositoryContract;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerRepositories();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }

    private function registerRepositories(){

$this->app->bind("App\Repository\Cities\CityRepositoryContract", "App\Repository\Cities\CityRepository");
$this->app->bind("App\Repository\Districts\DistrictRepositoryContract", "App\Repository\Districts\DistrictRepository");
$this->app->bind("App\Repository\Permissions\PermissionRepositoryContract", "App\Repository\Permissions\PermissionRepository");
$this->app->bind("App\Repository\Roles\RoleRepositoryContract", "App\Repository\Roles\RoleRepository");
$this->app->bind("App\Repository\RolePermissions\RolePermissionRepositoryContract", "App\Repository\RolePermissions\RolePermissionRepository");
$this->app->bind("App\Repository\Users\UserRepositoryContract", "App\Repository\Users\UserRepository");
$this->app->bind("App\Repository\UserPermissions\UserPermissionRepositoryContract", "App\Repository\UserPermissions\UserPermissionRepository");
$this->app->bind("App\Repository\UserRoles\UserRoleRepositoryContract", "App\Repository\UserRoles\UserRoleRepository");
$this->app->bind("App\Repository\Wards\WardRepositoryContract", "App\Repository\Wards\WardRepository");
$this->app->bind("App\Repository\Customers\CustomerRepositoryContract", "App\Repository\Customers\CustomerRepository");
$this->app->bind("App\Repository\Campaigns\CampaignRepositoryContract", "App\Repository\Campaigns\CampaignRepository");
$this->app->bind("App\Repository\CustomerCampaigns\CustomerCampaignRepositoryContract", "App\Repository\CustomerCampaigns\CustomerCampaignRepository");
$this->app->bind("App\Repository\Settings\SettingRepositoryContract", "App\Repository\Settings\SettingRepository");
$this->app->bind("App\Repository\Attributes\AttributeRepositoryContract", "App\Repository\Attributes\AttributeRepository");
$this->app->bind("App\Repository\AttributeGroups\AttributeGroupRepositoryContract", "App\Repository\AttributeGroups\AttributeGroupRepository");
$this->app->bind("App\Repository\Locations\LocationRepositoryContract", "App\Repository\Locations\LocationRepository");
$this->app->bind("App\Repository\Faqs\FaqRepositoryContract", "App\Repository\Faqs\FaqRepository");
$this->app->bind("App\Repository\FaqCategories\FaqCategoryRepositoryContract", "App\Repository\FaqCategories\FaqCategoryRepository");
$this->app->bind("App\Repository\Blogs\BlogRepositoryContract", "App\Repository\Blogs\BlogRepository");
$this->app->bind("App\Repository\BlogCategories\BlogCategoryRepositoryContract", "App\Repository\BlogCategories\BlogCategoryRepository");
$this->app->bind("App\Repository\NewsLists\NewsListRepositoryContract", "App\Repository\NewsLists\NewsListRepository");
$this->app->bind("App\Repository\Orders\OrderRepositoryContract", "App\Repository\Orders\OrderRepository");
$this->app->bind("App\Repository\OrderItems\OrderItemRepositoryContract", "App\Repository\OrderItems\OrderItemRepository");
//NewBindRepository

    }
}
