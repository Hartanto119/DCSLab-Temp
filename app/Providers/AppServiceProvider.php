<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

use App\Services\DashboardService;
use App\Services\UserService;
use App\Services\RoleService;
use App\Services\InboxService;
use App\Services\SystemService;
use App\Services\ActivityLogService;
#region Extensions 
use App\Services\CompanyService;
use App\Services\BrandService;
use App\Services\SupplierService;
use App\Services\ProductService;
use App\Services\ProductGroupService;
use App\Services\UnitService;
use App\Services\BranchService;
use App\Services\WarehouseService;
use App\Services\EmployeeService;
use App\Services\CashService;
use App\Services\InvestorService;
use App\Services\CapitalService;
use App\Services\CapitalGroupService;
use App\Services\IncomeGroupService;
use App\Services\ExpenseGroupService;
use App\Services\ExpenseService;
use App\Services\CustomerGroupService;
use App\Services\CustomerService;
#endregion

use App\Services\Impls\DashboardServiceImpl;
use App\Services\Impls\UserServiceImpl;
use App\Services\Impls\RoleServiceImpl;
use App\Services\Impls\InboxServiceImpl;
use App\Services\Impls\SystemServiceImpl;
use App\Services\Impls\ActivityLogServiceImpl;
#region Extensions
use App\Services\Impls\CompanyServiceImpl;
use App\Services\Impls\BrandServiceImpl;
use App\Services\Impls\SupplierServiceImpl;
use App\Services\Impls\ProductServiceImpl;
use App\Services\Impls\ProductGroupServiceImpl;
use App\Services\Impls\UnitServiceImpl;
use App\Services\Impls\BranchServiceImpl;
use App\Services\Impls\WarehouseServiceImpl;
use App\Services\Impls\EmployeeServiceImpl;
use App\Services\Impls\CashServiceImpl;
use App\Services\Impls\InvestorServiceImpl;
use App\Services\Impls\CapitalServiceImpl;
use App\Services\Impls\CapitalGroupServiceImpl;
use App\Services\Impls\IncomeServiceImpl;
use App\Services\Impls\IncomeGroupServiceImpl;
use App\Services\Impls\ExpenseGroupServiceImpl;
use App\Services\Impls\ExpenseServiceImpl;
use App\Services\Impls\CustomerGroupServiceImpl;
use App\Services\Impls\CustomerServiceImpl;
#endregion

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SystemService::class, function (){
            return new SystemServiceImpl();
        });

        $this->app->singleton(DashboardService::class, function (){
            return new DashboardServiceImpl();
        });

        $this->app->singleton(RoleService::class, function (){
            return new RoleServiceImpl();
        });

        $this->app->singleton(UserService::class, function (){
            return new UserServiceImpl();
        });

        $this->app->singleton(ActivityLogService::class, function (){
            return new ActivityLogServiceImpl();
        });

        $this->app->singleton(InboxService::class, function (){
            return new InboxServiceImpl();
        });

        #region Extensions
        $this->app->singleton(CompanyService::class, function (){
            return new CompanyServiceImpl();
        });

        $this->app->singleton(BrandService::class, function (){
            return new BrandServiceImpl();
        });

        $this->app->singleton(SupplierService::class, function (){
            return new SupplierServiceImpl();
        });

        $this->app->singleton(ProductService::class, function (){
            return new ProductServiceImpl();
        });

        $this->app->singleton(ProductGroupService::class, function (){
            return new ProductGroupServiceImpl();
        });

        $this->app->singleton(UnitService::class, function (){
            return new UnitServiceImpl();
        });

        $this->app->singleton(BranchService::class, function (){
            return new BranchServiceImpl();
        });

        $this->app->singleton(WarehouseService::class, function (){
            return new WarehouseServiceImpl();
        });

        $this->app->singleton(EmployeeService::class, function (){
            return new EmployeeServiceImpl();
        });

        $this->app->singleton(CashService::class, function (){
            return new CashServiceImpl();
        });

        $this->app->singleton(InvestorService::class, function (){
            return new InvestorServiceImpl();
        });

        $this->app->singleton(CapitalService::class, function (){
            return new CapitalServiceImpl();
        });

        $this->app->singleton(CapitalGroupService::class, function (){
            return new CapitalGroupServiceImpl();
        });

        $this->app->singleton(IncomeGroupService::class, function (){
            return new IncomeGroupServiceImpl();
        });

        $this->app->singleton(IncomeService::class, function (){
            return new IncomeServiceImpl();
        });

        $this->app->singleton(ExpenseGroupService::class, function (){
            return new ExpenseGroupServiceImpl();
        });

        $this->app->singleton(ExpenseService::class, function (){
            return new ExpenseServiceImpl();
        });

        $this->app->singleton(CustomerGroupService::class, function (){
            return new CustomerGroupServiceImpl();
        });

        $this->app->singleton(CustomerService::class, function (){
            return new CustomerServiceImpl();
        });

        $this->app->singleton(RoleService::class, function (){
            return new RoleServiceImpl();
        });

        $this->app->singleton(UserService::class, function (){
            return new UserServiceImpl();
        });
        
        $this->app->singleton(ActivityLogService::class, function (){
            return new ActivityLogServiceImpl();
        });

        $this->app->singleton(InboxService::class, function (){
            return new InboxServiceImpl();
        });

        #endregion
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        JsonResource::withoutWrapping();
    }
}
