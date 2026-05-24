<?php

namespace App\View\Components\Pages;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardBanner extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.pages.dashboard-banner');
    }
}
