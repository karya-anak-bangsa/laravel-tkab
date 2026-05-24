<?php

namespace App\View\Components\Pages;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardProfile extends Component
{
    public $title = "";

    public function __construct($title = "")
    {
        $this->title = $title;
    }

    public function render(): View|Closure|string
    {
        return view('components.pages.dashboard-profile');
    }
}
