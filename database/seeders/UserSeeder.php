<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'first_name' => 'Marzoukath',
            'last_name' => 'AGBODJA',
            'email' => 'marzoukathagbodja@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
            ]);
       
    }
}
        