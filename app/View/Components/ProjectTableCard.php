<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class projecttablecard extends Component
{
    public string $project_name;
    public string $project_location;
    /**
     * Create a new component instance.
     */
    public function __construct(string $project_name, string $project_location)
    {
        $this->project_name = $project_name;
        $this->project_location = $project_location;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.projecttablecard');
    }
}
