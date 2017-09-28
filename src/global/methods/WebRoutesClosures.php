<?php

return [
    'api_index' => function () {
        return 'eHOSP API';
    },

    'avatar_post' => function () {
        $avatar = request()->file('avatar')->store('public/avatars');

        $user = Auth::user();
        $user->avatar = $avatar;
        $user->save();

        return back();
    }
];
