<?php

declare(strict_types=1);

Route::get('version', function () {
    return response()->json(['version' => App::version()]);
});
