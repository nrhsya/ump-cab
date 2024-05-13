<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'NUR HASYA BINTI MOHD NORDIN',
            'email' => 'nurhasyamohdnordin@gmail.com',
            'phone_num' => '01114909117',
            'password' => bcrypt('hasya123'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-20',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'KALAIVANI A/P RAMANI',
            'email' => 'kalai@gmail.com',
            'phone_num' => '01161601650',
            'password' => bcrypt('kalai123'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'NURAQILA BINTI ROHANAN',
            'email' => 'qila@gmail.com',
            'phone_num' => '0137709817',
            'password' => bcrypt('qila123'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'MUHAMMAD ALI BIN IBRAHIM',
            'email' => 'ali@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('aliibrahim123'),
            'gender' => 'Male',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'MUTHU A/L KUMAR',
            'email' => 'muthu@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('muthu123'),
            'gender' => 'Male',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'IFFAH MUNIRAH BINTI NASRI',
            'email' => 'iffah@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('iffah123'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'ATHIRAH SYAHIDA BINTI MOHD TARMEZI',
            'email' => 'athirah@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('athirah123'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'MUHAMMAD HAZLAMI BIN OTHMAN',
            'email' => 'hazlami@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('hazlami123'),
            'gender' => 'Male',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'MUHAMMAD MUIZZUDDIN BIN ZULKAFLI',
            'email' => 'muiz@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('muiz123'),
            'gender' => 'Male',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'NEVASHENEE A/P SURES',
            'email' => 'neva@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('neva123'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'LEE BEE LIN',
            'email' => 'beelin@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('beelin'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'USSHARANI E PALASUBRAMANIAM',
            'email' => 'ussharani@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('usha123'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'NURUL AIN FARHANA BINTI PAUZI',
            'email' => 'ainfarhana@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('ainfarhana123'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'NUR FATIHAH LAINA BINTI MAKHTAR',
            'email' => 'fatihahlaina@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('fatihahlaina123'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'SITI FATIMAH BINTI ISMAIL',
            'email' => 'fatimah@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('fatimah123'),
            'gender' => 'Female',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'FOONG KIN HONG',
            'email' => 'foong@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('foong123'),
            'gender' => 'Male',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'KOH QING ZHE',
            'email' => 'koh@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('koh123'),
            'gender' => 'Male',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'MUHAMMAD ZAL HAFIY BIN ABDUL RAHMAN',
            'email' => 'hafiy@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('hafiy123'),
            'gender' => 'Male',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'PHERRINBHAN A/L GANEN THRAKUMAR',
            'email' => 'pherrhinbhan@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('pherrinbhan123'),
            'gender' => 'Male',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);

        \App\Models\User::factory()->create([
            // user login credentials
            'name' => 'MUHAMMAD IZZ ADWA BIN MUHAMAD SHOAIR',
            'email' => 'izz@gmail.com',
            'phone_num' => '0123456789',
            'password' => bcrypt('izz123'),
            'gender' => 'Male',
            'usertype' => 0,
            'dob' => '2000-01-10',
        ]);
    }
}
