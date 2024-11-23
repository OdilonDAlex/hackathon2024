
@vite(['resources/css/popup/course/create-item.css', 'resources/js/create-item-popup.js'])
<form class="create-item-popup active" action="">
    <input type="hidden" name="courseId" value="{{ $course_id }}">
    <!-- question -->
    <x-input label="Nom du chapitre" name="name" id="name"/>

    <!-- description -->
    <div class="textarea">
        <label for="description">Contenu principale</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>  
    
    <x-input label="Support" name="support" type="file"/>

    <button class="close-btn">
        @include('svg.close')
    </button>


    <button type="submit">Valider</button>
</form>