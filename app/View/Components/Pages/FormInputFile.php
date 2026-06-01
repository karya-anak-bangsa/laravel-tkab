<?php

namespace App\View\Components\Pages;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInputFile extends Component
{
    public ?string $label;
    public ?string $name;
    public ?string $value;
    public bool $required;

    public function __construct(
        $label              = null,
        $name               = null,
        $value              = null,
        $required           = false,
    ) {
        $this->label        = $label;
        $this->name         = $name;
        $this->value        = $value;
        $this->required     = $required;
    }

    public function render(): View|Closure|string
    {
        return view('components.pages.form-input-file');
    }
}
