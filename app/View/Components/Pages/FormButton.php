<?php

namespace App\View\Components\Pages;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormButton extends Component
{
    public ?string $buttonType;
    public ?string $buttonColor;
    public ?string $icon;

    public function __construct(
        $buttonType             = 'submit',
        $buttonColor            = 'primary',
        $icon                   = 'fa-save',
    ) {
        $this->buttonType       = $buttonType;
        $this->buttonColor      = $buttonColor;
        $this->icon             = $icon;
    }

    public function render(): View|Closure|string
    {
        return view('components.pages.form-button');
    }
}
