<?php

namespace App\View\Components\Pages;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormButtonLink extends Component
{
    public ?string $buttonLink;
    public ?string $buttonColor;
    public ?string $icon;

    public function __construct(
        $buttonType             = '',
        $buttonColor            = 'primary',
        $icon                   = 'fa-save',
    ) {
        $this->buttonLink       = $buttonType;
        $this->buttonColor      = $buttonColor;
        $this->icon             = $icon;
    }

    public function render(): View|Closure|string
    {
        return view('components.pages.form-button-link');
    }
}
