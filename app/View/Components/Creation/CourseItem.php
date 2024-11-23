<?php

namespace App\View\Components\Creation;

use App\Models\CourseItem as ModelsCourseItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CourseItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ModelsCourseItem $courseItem
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.creation.course-item');
    }
}
