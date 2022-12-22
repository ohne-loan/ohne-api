<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->create([
            'name' => 'Api',
            'email' => 'api@ohne.com.br',
            'password' => '',
            'uuid' => '7ee48eb1-f31a-4648-9f4e-914942ca0620'
        ]);

        $user = factory(User::class)->create([
            'name' => 'Gisele',
            'email' => 'gisele@ohne.com.br',
            'password' => 'ohne123',
            'uuid' => '7ee48eb1-f31a-4648-9f4e-914942ca0621'
        ]);

        $user->assignRole('Admin');

        $user = factory(User::class)->create([
            'name' => 'Leandro',
            'email' => 'leandro@ohne.com.br',
            'password' => 'ohne123',
            'uuid' => '7ee48eb1-f31a-4648-9f4e-914942ca0622'
        ]);

        $user->assignRole('Admin');

        $user = factory(User::class)->create([
            'name' => 'Diogo',
            'email' => 'diogo@ohne.com.br',
            'password' => 'ohne123',
            'uuid' => '7ee48eb1-f31a-4648-9f4e-914942ca0623'
        ]);

        $user->assignRole('Admin');

        $user = factory(User::class)->create([
            'name' => 'Everton',
            'email' => 'everton@ohne.com.br',
            'password' => 'ohne123',
            'uuid' => '7ee48eb1-f31a-4648-9f4e-914942ca0624'
        ]);

        $user->assignRole('Admin');

        $user = factory(User::class)->create([
            'name' => 'Débora',
            'email' => 'debora@ohne.com.br',
            'password' => 'ohne123',
            'uuid' => '7ee48eb1-f31a-4648-9f4e-914942ca0625'
        ]);

        $user->assignRole('Admin');

        $user = factory(User::class)->create([
            'name' => 'Gustavo',
            'email' => 'gustavo.monteiro@ohne.com.br',
            'password' => 'ohne123',
            'uuid' => '7ee48eb1-f31a-4648-9f4e-914942ca0625'
        ]);

        $user->assignRole('Admin');
    }
}
