<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use App\Models\Booking;
use App\Models\Facility;
use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        User::create([
            'name' => 'Bagas Raynaldi ',
            'username' => 'bagas-admin',
            'password' => Hash::make('password'),
            'role' => 'administrator',
        ]);

        User::create([
            'name' => 'Bagas Raynaldi',
            'username' => 'bagas-receptionist',
            'password' => Hash::make('password'),
            'role' => 'receptionist',
        ]);

        User::create([
            'name' => 'Bagas Raynaldi',
            'username' => 'bagas-guest',
            'password' => Hash::make('password'),
            'role' => 'hotel_guest',
        ]);

        Facility::create([
            'facility_name' => 'TV 50 Inch',
            'facility_type' => 'room',
            'description' => 'TV keren bagus buat main PS5',
        ]);

        Facility::create([
            'facility_name' => 'Kasur Extra',
            'facility_type' => 'room',
            'description' => 'Cocok untuk keluarga',
        ]);

        Facility::create([
            'facility_name' => 'Kolam Renang',
            'facility_type' => 'hotel',
            'description' => 'Air pegunungan, bukan kaporit, apalagi air hangat',
        ]);

        Facility::create([
            'facility_name' => 'Gym',
            'facility_type' => 'room',
            'description' => 'Cocok buat body builder',
        ]);

        Room::create([
            'room_type' => 'Reguler',
            'number_of_rooms' => '100',
            'facility_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet tempora assumenda expedita ratione atque, odio est harum nihil commodi a molestiae perspiciatis quibusdam facilis excepturi perferendis omnis sequi corporis hic et nostrum. Sint recusandae, aspernatur facere alias, quod ex et quis doloribus doloremque, adipisci quibusdam!',
        ]);

        Room::create([
            'room_type' => 'Deluxe',
            'number_of_rooms' => '75',
            'facility_id' => '2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet tempora assumenda expedita ratione atque, odio est harum nihil commodi a molestiae perspiciatis quibusdam facilis excepturi perferendis omnis sequi corporis hic et nostrum. Sint recusandae, aspernatur facere alias, quod ex et quis doloribus doloremque, adipisci quibusdam!',
        ]);

        Room::create([
            'room_type' => 'Superior',
            'number_of_rooms' => '50',
            'facility_id' => '1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet tempora assumenda expedita ratione atque, odio est harum nihil commodi a molestiae perspiciatis quibusdam facilis excepturi perferendis omnis sequi corporis hic et nostrum. Sint recusandae, aspernatur facere alias, quod ex et quis doloribus doloremque, adipisci quibusdam!',
        ]);

        Booking::create([
            'order_name' => 'xavier',
            'user_id' => '1',
            'email' => 'xavier@gmail.com',
            'telephone' => '08999912345',
            'room_id' => '1',
            'check_in' => now(),
            'check_out' => now(),
            'status' => 'check_in',
        ]);

        Booking::create([
            'order_name' => 'maman suparman',
            'user_id' => '2',
            'email' => 'maman12@gmail.com',
            'telephone' => '081632647650',
            'room_id' => '2',
            'check_in' => now(),
            'check_out' => now(),
            'status' => 'check_in',
        ]);

        Booking::create([
            'order_name' => 'Dani sunandar',
            'user_id' => '3',
            'email' => 'dansuu@gmail.com',
            'telephone' => '098776512345',
            'room_id' => '3',
            'check_in' => now(),
            'check_out' => now(),
            'status' => 'check_in',
        ]);
    }
}