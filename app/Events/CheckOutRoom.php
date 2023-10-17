<?php

namespace App\Events;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CheckOutRoom
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $email;
    public $name_user;
    public $room_type;
    public $name;
    public $phone;
    public $total;
    public $arrival_date;
    public $depature_date;
    public $booking_id;
    public function __construct($email, $name_user, $name, $room_type, $total,$phone,$booking_id,$arrival_date,$depature_date)
    {
        $this->email = $email;
        $this->name_user = $name_user;

        $this->name = $name;
        $this->room_type = $room_type;
        $this->total = $total;
        $this->phone = $phone;
        $this->booking_id = $booking_id;
        $this->arrival_date = $arrival_date;
        $this->depature_date = $depature_date;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
