<div class="course-item">
    <div class="illustration">
        @if(isset($course->pathToIllustration)  && $course->pathToIllustration != "")
            @php
                $type = course->getMediaType();
            @endphp
            <img src="{{ $course->getIllustration() }}" alt="{{ $course->title }}">
        @else
            {{ $course->title }}
        @endif
        <form action="" method="GET">
            <button type="submit">Voir</button>
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