<?php
    namespace Bloggy\Http\Controllers;

    class TestController extends Controller {
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function index(){
            return view('welcome');
        }
    }
?>
