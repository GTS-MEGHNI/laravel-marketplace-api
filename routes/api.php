<?php

Route::get('version', function () {
    return response()->json(['version' => App::version()]);
});
