<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

        $student = [
            'student_id' => 'MCC2024-00239',
            'name'       => 'Patricia G. Medrano',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F5',
            'email'      => 'patriciamedrano502@gmail.com'
        ];

        $this->call->view('student_home', $student);
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00239',
            'name'       => 'Patricia G. Medrano',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F5',
            'email'      => 'patriciamedrano502@gmail.com'
        ];

        $this->call->view('student_profile', $student);
    }
}