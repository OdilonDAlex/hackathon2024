<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class CourseItem extends Model
{
    /** @use HasFactory<\Database\Factories\CourseItemFactory> */
    use HasFactory;

    public $fileTypes = [
        "mp4" => "video",
        "avi" => "video",
        "mov" => "video",
        "mkv" => "video",
        "webm" => "video",
        "flv" => "video",
        "wmv" => "video",
        "jpg" => "image",
        "jpeg" => "image",
        "png" => "image",
        "gif" => "image",
        "bmp" => "image",
        "webp" => "image",
        "svg" => "image",
        "tiff" => "image",
        "mp3" => "audio",
        "wav" => "audio",
        "ogg" => "audio",
        "m4a" => "audio",
        "flac" => "audio",
        "aac" => "audio",
        "pdf" => "document",
        "doc" => "document",
        "docx" => "document",
        "xls" => "document",
        "xlsx" => "document",
        "ppt" => "document",
        "pptx" => "document",
        "txt" => "document",
        "rtf" => "document"
    ];

    protected $fillable = [
        'name',
        'description',
        'valuePath'
    ];

    public function course(): BelongsTo{
        return $this->belongsTo(Course::class, 'courseId');
    }

    public function getMediaType(): ?string{
        if(isset($this->valuePath) && $this->valuePath !== null){
            $array_ = Str::of($this->valuePath)->split('/[\s\.]/')->toArray();
            $extension = end($array_);
            return $this->fileTypes[$extension];
        }

        return null;
    }
}
