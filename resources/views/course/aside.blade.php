@vite(['resources/css/aside.css', 'resources/js/accordeon.js'])
<aside>
    @php
        try {
            $selectedCourseId = $selectedCourse->id;
        }
        catch(Exception $e){ $selectedCourseId = null; }
    @endphp
    <h3 class="aside-title" style="background-color: #50577a;">Mes cours</h3>
    <section class="unpublished-survey">
        <h4>Non publié</h4>
        @forelse($unpublishedCourses as $course)
            <div class="accordeon survey">
                <button aria-label="Titre du cours" class="survey-title show-description {{ $selectedCourseId == $course->id ? 'selected' : '' }}">
                    {{ $course->title }}
                    <a class="edit-survey" href="{{ route('course.create', ['course_id' => $course->id]) }}">Modifier</a>
                </button>
                <p class="survey-description">
                    {{ $course->description }}
                </p>
            </div>    
        @empty
            <p class="empty">Aucun</p>
        @endforelse
    </section>

    <section class="published-survey">
        <h4>déjà Publié</h4>

        @forelse($publishedCourses as $course)
            <div class="accordeon survey">
                <button aria-label="Titre du cours" class="surve-title show-description">
                    {{ $course->title }}
                </button>
                <p class="survey-description">
                    {{ $course->description }}
                </p>
            </div>    
        @empty
        <p class="empty">Aucun</p>
        @endforelse
    </section>
    <button class="create-survey">
        Créer
    </button>
</aside>