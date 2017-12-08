<?php

Route::resource('blogs', 'BlogsController', [
'except' => ['create', 'edit', 'show']

]);