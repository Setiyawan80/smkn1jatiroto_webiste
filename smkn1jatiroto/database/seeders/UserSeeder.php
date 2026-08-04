<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Akun Admin
        $admin = User::create([
            'name' => 'Admin SMKN 1 Jatiroto',
            'username' => 'admin_skanja',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Buat detail profil Admin
        $admin->profil()->create([
            'nisn_nip' => '198904182022211008',
            'status_jabatan'=>'administrator',
            'gender' => 'L',
            'phone' => '085647567963',
            'address' => 'Sambiroto Lor RT 002/RW 007, Jatiroto, Jatiroto, Wonogiri, Jawa Tengah, Indonesia',
            'bio' => 'Admin resmi website SMK Negeri 1 Jatiroto sebagai pengelola dan manajemen sistem dan content.',
            'avatar' => null,
        ]);
         $waka = User::create([
            'name' => 'Hartono, S.IP',
            'username' => 'wakasarpras_hartono',
            'password' => Hash::make('password123'),
            'role' => 'wakilkepala',
        ]);

        // Buat detail profil Guru
        $waka->profil()->create([
            'nisn_nip' => '198904182022211008',
            'status_jabatan'=>'Waka SARPRAS',
            'gender' => 'L',
            'phone' => '085647567963',
            'address' => 'Mojopuro, Jatiroto, Jatiroto, Wonogiri, Jawa Tengah, Indonesia',
            'bio' => 'Wakil Kepala Sekolah Bidang SArana Prasarana.',
            'avatar' => null,
        ]);

        $kapro = User::create([
            'name' => 'Ade Setiyawan, S.Kom. ',
            'username' => 'kapropplg_ade',
            'password' => Hash::make('password123'),
            'role' => 'kapro',
        ]);

        // Buat detail profil Guru
        $kapro->profil()->create([
            'nisn_nip' => '198904182022211008',
            'status_jabatan'=>'Kepala Kompetensi Keahlian PPLG',
            'gender' => 'L',
            'phone' => '085647567963',
            'address' => 'Sambiroto Lor RT 002/RW 007, Jatiroto, Jatiroto, Wonogiri, Jawa Tengah, Indonesia',
            'bio' => 'Kepala Kompetensi Keahlian PPLG',
            'avatar' => null,
        ]);

        // Akun Guru
        $guru = User::create([
            'name' => 'Ade Setiyawan, S.Kom. ',
            'username' => 'guru_ade',
            'password' => Hash::make('password123'),
            'role' => 'guru',
        ]);

        // Buat detail profil Guru
        $guru->profil()->create([
            'nisn_nip' => '198904182022211008',
            'status_jabatan'=>'Guru Produktif PPLG',
            'gender' => 'L',
            'phone' => '085647567963',
            'address' => 'Sambiroto Lor RT 002/RW 007, Jatiroto, Jatiroto, Wonogiri, Jawa Tengah, Indonesia',
            'bio' => 'Guru Produktif PPLG kelas XI PPLG .',
            'avatar' => null,
        ]);

        $osis = User::create([
            'name' => 'Andi Pratama',
            'username' => 'osis_andi_pplg',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        // Buat detail profil Siswa
        $osis->profil()->create([
            'nisn_nip' => '0061234567',
            'status_jabatan'=>'Admin OSIS SKANJA',
            'gender' => 'L',
            'phone' => '085566778899',
            'address' => 'Slogohimo, Wonogiri',
            'bio' => 'Siswa Kelas XI PPLG. Tertarik pada Web Development dan Game 2D.',
            'avatar' => null,
        ]);


        $ekstra = User::create([
            'name' => 'Safa SaskiaPratama',
            'username' => 'ekstrapramuka_safa',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        // Buat detail profil Siswa
        $ekstra->profil()->create([
            'nisn_nip' => '0061234567',
            'status_jabatan'=>'Ekstra Pramuka',
            'gender' => 'L',
            'phone' => '085566778899',
            'address' => 'Slogohimo, Wonogiri',
            'bio' => 'Siswa Kelas XI PPLG. Tertarik pada Web Development dan Game 2D.',
            'avatar' => null,
        ]);


        // 3. Akun Siswa
        $siswa = User::create([
            'name' => 'Andi Pratama',
            'username' => 'siswa_andi_pplg',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        // Buat detail profil Siswa
        $siswa->profil()->create([
            'nisn_nip' => '0061234567',
            'status_jabatan'=>'XI PPLG 1',
            'gender' => 'L',
            'phone' => '085566778899',
            'address' => 'Slogohimo, Wonogiri',
            'bio' => 'Siswa Kelas XI PPLG. Tertarik pada Web Development dan Game 2D.',
            'avatar' => null,
        ]);
    }
}
