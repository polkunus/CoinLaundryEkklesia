Broadcast::channel('proposition.{id}', function ($user, $propositionId) {
    return ['id' => $user->id];
});
