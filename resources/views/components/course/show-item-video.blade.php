@php
    use Illuminate\Support\Facades\Storage;
@endphp
<div class="video">
    <video src="{{ Storage::disk('public')->url( $item->valuePath ) }}" controls></video>
    <div class="container-info-current">
        <h3 class="current-title">{{ $item->name }}</h3>
        @php
            use Illuminate\Support\Str;
            $author = $item->course()->first()->author   
        @endphp
        <div class="poster-info">
            <p class="profil-poster">{{ strtoupper(Str::of($author->name)->limit(1, '') . Str::of($author->firstname)->limit(1, '')) }}</p>
            <p class="username-current" style="white-space: nowrap">{{ $author->firstname . ' ' . $author->name }}</p>
        </div>

        <p class="current-description">
            {{ $item->description }}</p>
    </div>
</div>