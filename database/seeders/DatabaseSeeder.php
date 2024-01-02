<?php
namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'password' => bcrypt('ip192.168ADD'),
                'role' => 1,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Super Operator',
                'email' => 'super@operator.com',
                'password' => bcrypt('ip192.168ADD'),
                'role' => 10,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Sumarsih Ely W.',
                'email' => 'ely@ketua.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 10,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Budi Setriana',
                'email' => 'budi@admin.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 10,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Esa (Admin)',
                'email' => 'esa@admin.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 1,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Esa (Operator)',
                'email' => 'esa@operator.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 10,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],

            [
                'name' => 'Budi Setriana',
                'email' => 'budi@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],

            [
                'name' => 'Esa (Tutor)',
                'email' => 'esa@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Ilham Sidik S',
                'email' => 'ilham@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Ayunda Noviolina',
                'email' => 'ayunda<3@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Umi Hani',
                'email' => 'umi@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Liana Niftatu R',
                'email' => 'lia@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Farida Nur A',
                'email' => 'farida@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Zulfatin Alfa Z',
                'email' => 'zul@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Beti Priani',
                'email' => 'beti@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Hari Prasojo',
                'email' => 'hari@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Fahmi',
                'email' => 'fahmi@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            [
                'name' => 'Oni',
                'email' => 'oni@tutor.harbang.com',
                'password' => bcrypt('Januari@12'),
                'role' => 0,
                'foto' => 'default.jpg',
                'profile_photo_path' => '/img',
            ],
            
        ];
        User::insert($users);
    
    }
}
