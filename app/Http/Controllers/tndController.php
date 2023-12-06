<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Course;

class tndController extends Controller
{
    //
    public function show(){
        $user = Auth::user();
        $courses = Course::all();
        return view('tnd', compact('user', 'courses'));
    }

    public function enroll($courseId)
    {
        $user = Auth::user();
    
        // Cek apakah user sudah terdaftar di kursus ini sebelumnya
        if (!$user->courses()->where('courses.id', $courseId)->exists()) {
            // Jika belum, daftarkan user ke kursus
            $user->enrollCourse($courseId);

            return redirect()->route('course.detail', ['courseId' => $courseId])->with('success', 'Enrolled successfully!');
        } 
        
        else {
            // Jika sudah terdaftar, berikan pesan atau arahkan ke halaman lain
            return redirect()->route('course.detail', ['courseId' => $courseId])->with('error', 'You are already enrolled in this course.');
        }

    }

    public function showCourse($courseId)
    {
        $user = Auth::user();
        $course = Course::findOrFail($courseId);

        return view('courseDetail', compact('user', 'course'));
    }

    public function showMyCourses()
    {
        $user = Auth::user();
        $courses = $user->courses;

        return view('mycourse', compact('user', 'courses'));
    }
}
