<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __invoke() {
        return <<<E0F
        <html>
            <head>
            <title>Hello</title>
                <style>
                    body { font-size:16pt; color:#999; }
                    h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px  px;}
                </style>
            </head>
            <body>
                <h1>Single Action</h1>
                <p>これは、シングルアクションコントローラーのアクションです。</p>
            </body>
        </html>
        E0F;
    }
}
