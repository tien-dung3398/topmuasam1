<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class UserSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new  Admin;
        $user->fill([
            'name'     => 'Tiến Dũng',
            'email'    => 'tiendungbtk@gmail.com',
            'password' => bcrypt('dungusd01')
        ]);
        $user->save();
    }
}
