<?php

namespace App\View\Components\Course;

use App\Models\CourseItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowItemText extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public CourseItem $item
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course.show-item-text');
    }
}
