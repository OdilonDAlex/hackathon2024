<div class="course-item">
    <div class="illustration">
        @if(isset($course->pathToIllustration)  && $course->pathToIllustration != "")
            <img src="{{ $course->getIllustration() }}" alt="{{ $course->title }}">
        @else
            {{ $course->title }}
        @endif
        <form action="{{ route('course.show', ['id' => $course->id]) }}" method="GET">
            <button type="submit" style="color: white;" >Voir</button>
        </form>
    </div>
    <div class="course-details">
        <h3 class="course-title">
            {{ $course->title }}
        </h3>
        <p class="course-description">
            {{ $course->description }}
        </p>
    </div>
</div>