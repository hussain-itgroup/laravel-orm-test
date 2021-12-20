<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Post;

class TestController extends Controller
{
    public function index(Request $request )
    {

        /**
         * ------------
         * One to One
         * ------------
         */
        

        // $user = User::with("contact")->first();
        // return $user->toArray();

        // $contact = Contact::with("user")->first();
        // return $contact->toArray();
        

        /**
         * -------------------------
         * has Manny Testing example
         * --------------------------
         */

        // $user = User::with("contact", "posts_test")->find(1);
        // return $user->toArray();

        // $post = Post::with("user")->first();
        // return $post->toArray();



        /**
         * ------------
         * Many to Many
         * ------------
         */








        // $input = 1235321;  
        // $num = $this->palindrome($input);  
        // if($input==$num){  
        //     echo "$input is a Palindrome number";  
        // } else {  
        //     echo "$input is not a Palindrome";  
        // }  

    }

    public function palindrome($n){  
        $number = $n;  
        $sum = 0;  
        while(floor($number)) {  
            $rem = $number % 10;  
            $sum = $sum * 10 + $rem;  
            $number = $number/10;  
        }  
        return $sum;  
    }  
        
}