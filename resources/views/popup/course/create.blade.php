@vite(['resources/js/store.js', 'resources/css/popup/course/create.css'])
<form action="" class="create-survey" name="createSurveyForm">

    <!-- Titre du sondage -->
    <x-input label="Titre du cours" type="title" name="title" id="title"/>

    <!-- description -->
    <div class="textarea">
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>  

    <!-- Illustration -->
    <x-input label="Illustration" type="file" name="illustration" id="illustration"/>

    <button class="close-btn">
        @include('svg.close')
    </button>
    
    <x-input value="Créer" type="submit"/>


</form>