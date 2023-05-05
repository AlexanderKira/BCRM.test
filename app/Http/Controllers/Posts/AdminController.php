<?php
namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        
                public function index(){
                    return 'страница список постов';
                }
                      
                public function create(){
                    return 'страница создания поста';
                }
                        
                public function store(){
                    return 'запрос создания поста';
                }
        
                public function show(){
                    return 'страница просмотра поста';
                }
                        
                public function edit(){
                    return 'страница изменения поста';
                }
                       
                public function update(){
                    return 'запрос изменения поста';
                }
            
                public function delete(){
                    return 'запрос удаления поста';
                }

                public function like(){
                    return 'like + 1';
                }
        
}

?>
