<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    
    public function index(){

        $selectedCourse = Course::first();

        return view('course.index', [
            'courses' => Course::where('published', true)->get(),
        ]);
    }

    public function create(Request $request){

        $data = $request->validate([
            'course_id' => 'nullable|exists:courses,id'
        ]);

        /**
         * @var $user User
         */
        $user = Auth::user();
        $unpublishedCourses = $user->courses()->where('published', false)->orderBy('created_at', 'DESC')->get();
        $publishedCourses = $user->courses()->where('published', true)->orderBy('created_at', 'DESC')->get();

        try {
            $selectedCourse = Course::find((int)$data['course_id']);
        }
        catch(Exception $_){
            $selectedCourse = null;
        }

        try {

            if($selectedCourse == null){
                $selectedCourse = $unpublishedCourses[0] ?? null;
            }
            
            $selectedCourseItems = null;
            if( isset($selectedCourse) &&  $selectedCourse->items() != null){
                $selectedCourseItems = $selectedCourse->items()->get();
            }
        }
        catch(Exception $e){
            $selectedCourseItems = null;
        }

        return view('Course.create', [
            'unpublishedCourses' => $unpublishedCourses,
            'publishedCourses' => $publishedCourses,
            'selectedCourse' => $selectedCourse,
            'selectedCourseItems' => $selectedCourseItems,
        ]);
    }

    public function publish(Request $request) {
        $data = $request->validate([
            'courseId' => [
                'required', 'exists:courses,id'
            ]
            ]);

        $course = Course::find((int)$data['courseId']);
        $course->published = true;
        $course->save();

        return redirect()->route('course.index');

    }

    public function store(Request $request){
        $data  = $request->validate([
            'title' => ['required', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:10'],
            'illustration' => ['required', 'image', 'max:25000']
        ]);
        $image = $data['illustration'];

        $filename = $image->store('course_illustration_images', 'public');  

        /**
         * @var $user User
         */
        $user = Auth::user();

        $course = $user->courses()->create([
            'title' => $data['title'],
            'description' => $data['description'],
            'pathToIllustration' => $filename
        ]);

        if($course !== null){
            return json_encode(['result' => 'Ok', 'status' => 200, 'course_id' => $course->id]);
        }

        return json_encode(['result' => 'error', 'status' => 500,]);
    }

    public function storeItem(Request $request){
    
        $data = $request->validate([
            'courseId' => ['required', 'exists:courses,id'],
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'support' => ['nullable']
        ]);

        $course = Course::find((int)$data['courseId']);
        $filename = null;
        if(isset($data['support']) && $data['support'] !== null ){
            $filename = $data['support']->store('files', 'public');
        }


        $course->items()->create([
            'name' => $data['name'],
            'description' => $data['description'],
            'valuePath' => $filename
        ]);


        return json_encode(['status' => 200, 'message' => 'OK', 'course' => $course]);
    }

    public function show(int $courseId){
        try {
            $course = Course::findOrFail((int)$courseId);

            if(! $course->published ) return redirect()->back();

            return view('course.show', [
                'course' => $course
            ]);
            
        }
        catch(Exception $e){
            return redirect()->back();
        }
    }
}
