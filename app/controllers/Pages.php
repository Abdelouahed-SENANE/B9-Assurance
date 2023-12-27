<?php

    class Pages extends Controller{
        public $userModel;
        public function __construct()
        {

        }
        public function index() {

            $data = [
                'title' => 'You Welcomee to Our Website',

            ];
            
            $this->view('pages/index' , $data );
        }
        public function about() {
            $data = [
                'title' => 'About us' 
            ];
            $this->view('pages/about' , $data);
        }
        public function contactus() {
            $data = [
                'title' => 'Welcome you can contact us can contact mr Abdlmajid' 
            ];
            $this->view('pages/contactus' , $data);
        }



    }