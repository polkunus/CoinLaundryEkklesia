class VoteCast implements ShouldBroadcast {
    public $proposition;
    public $votes;

    public function broadcastOn() {
        return new Channel('proposition.'.$this->proposition->id);
    }
}
