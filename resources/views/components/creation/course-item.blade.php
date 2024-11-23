<div class="survey-item">
    <input type="hidden" name="courseItem_id" value="{{ $courseItem->id }}">
    @php
        use Illuminate\Support\Facades\Storage as S;
    @endphp
    <div class="survey-item-header">
        <button class="option-button" style="position: absolute; right: 10px; top: 10px;">...</button>
    </div>
    <div class="survey-item-body">
        @if($courseItem->valuePath !== null)
            <img src="{{ Storage::disk('public')->url($courseItem->valuePath) }}" alt="{{ $courseItem->description }}">
        @else
            <p>{{ $courseItem->description }}</p>
        @endif
        <h6>{{ $courseItem->title }}</h6>
        {{-- <small>{{ $answersCount }} reponse{{ $answersCount > 1  ? 's' : ''}} prédéfinie{{ $answersCount > 1 ? 's' : ''}}</small> --}}
    </div>

    <div class="action">
        <button class="edit">Modifier</button>
        <button class="delete">Supprimer</button>
    </div>
</div>