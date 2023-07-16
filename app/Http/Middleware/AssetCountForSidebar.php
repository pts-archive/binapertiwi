<?php

namespace App\Http\Middleware;

use Auth;
use App\Models\Asset;
use Closure;

class AssetCountForSidebar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try
        {
            $total_rtd_sidebar = Asset::RTD()->where('assets.asset_tag', 'like', '3%')->count();
            view()->share('total_rtd_sidebar', $total_rtd_sidebar);
            $total_rtd_sidebar_lva = Asset::RTD()->where('assets.asset_tag', 'like', '9%')->count();
            view()->share('total_rtd_sidebar_lva', $total_rtd_sidebar_lva);
        } catch (\Exception $e) {
            \Log::debug($e);
        }

        try {
            $total_deployed_sidebar = Asset::Deployed()->where('assets.asset_tag', 'like', '3%')->where('assets.assigned_to', '>', '0')->count();
            view()->share('total_deployed_sidebar', $total_deployed_sidebar);
            $total_deployed_sidebar_lva = Asset::Deployed()->where('assets.asset_tag', 'like', '9%')->where('assets.assigned_to', '>', '0')->count();
            view()->share('total_deployed_sidebar_lva', $total_deployed_sidebar_lva);
        } catch (\Exception $e) {
            \Log::debug($e);
        }

        try {
            $total_archived_sidebar = Asset::Archived()->where('assets.asset_tag', 'like', '3%')->count();
            view()->share('total_archived_sidebar', $total_archived_sidebar);
            $total_archived_sidebar_lva = Asset::Archived()->where('assets.asset_tag', 'like', '9%')->count();
            view()->share('total_archived_sidebar_lva', $total_archived_sidebar_lva);
        } catch (\Exception $e) {
            \Log::debug($e);
        }

        try {
            $total_pending_sidebar = Asset::Pending()->where('assets.asset_tag', 'like', '3%')->count();
            view()->share('total_pending_sidebar', $total_pending_sidebar);
            $total_pending_sidebar_lva = Asset::Pending()->where('assets.asset_tag', 'like', '9%')->count();
            view()->share('total_pending_sidebar_lva', $total_pending_sidebar_lva);
        } catch (\Exception $e) {
            \Log::debug($e);
        }

        try {
            $total_undeployable_sidebar = Asset::Undeployable()->where('assets.asset_tag', 'like', '3%')->count();
            view()->share('total_undeployable_sidebar', $total_undeployable_sidebar);
            $total_undeployable_sidebar_lva = Asset::Undeployable()->where('assets.asset_tag', 'like', '9%')->count();
            view()->share('total_undeployable_sidebar_lva', $total_undeployable_sidebar_lva);
        } catch (\Exception $e) {
            \Log::debug($e);
        }

        return $next($request);
    }
}
