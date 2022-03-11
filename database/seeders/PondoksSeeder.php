<?php

namespace Database\Seeders;
use App\Models\DataAnak;
use Illuminate\Database\Seeder;

class PondoksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat sample data anak
        $data_anak1 = DataAnak::create([
            'nm_anak' => 'Sinta Novia',
            'tempat_lahir' => 'Bandung',
            'tgl_lahir' => '2006-08-12',
            'jk' => 'Perempuan',
            'pendidikan' => 'Sekolah Menengah',
            'nm_wali' => 'Doni Mulyadi',
        ]);
        $data_anak2 = DataAnak::create([
            'nm_anak' => 'Muhammad Adinata',
            'tempat_lahir' => 'Bandung',
            'tgl_lahir' => '2019-02-25',
            'jk' => 'Laki-laki',
            'pendidikan' => '-',
            'nm_wali' => 'Dewi Setyawati',
        ]);
        $data_anak3 = DataAnak::create([
            'nm_anak' => 'Ardiyan Naufal',
            'tempat_lahir' => 'Garut',
            'tgl_lahir' => '2012-09-17',
            'jk' => 'Laki-laki',
            'pendidikan' => 'Sekolah Dasar',
            'nm_wali' => 'Susanti',
        ]);
    }
}

    //     // membuat sample data kegiatan
    //     $kegiatan1 = DataKegiatan::create([
    //         'judul' => 'Peringatan Hari Anak Nasional',
    //         'tanggal' => '2021-07-23',
    //         'cover' => '',
    //     ]);
    //     $kegiatan2 = DataKegiatan::create([
    //         'judul' => 'Berkurban di Hari Raya Idul Adha',
    //         'tanggal' => '2021-07-20',
    //         'cover' => '',
    //     ]);
    //     $kegiatan3 = DataKegiatan::create([
    //         'judul' => 'Pondok Yatim Gelar Bazar Sembako Hemat Untuk Warga',
    //         'tanggal' => '2022-01-02',
    //         'cover' => '',
    //     ]);

    //     // membuat sample data donasi

    //     $donasi1 = Donasi::create([
    //         'nm_donatur' => 'Hamba Allah',
    //         'email' => 'cutie@gmail.com',
    //         'telepon' => '081822675094',
    //         'tanggal' => '2020-12-15',
    //         'nominal' => 250000,
    //         'keterangan' => 'Semoga Bermanfaat',
    //         'cover' => '',
    //     ]);
    //     $donasi2 = Donasi::create([
    //         'nm_donatur' => 'Suseno',
    //         'email' => 'bmsuseno71@gmail.com',
    //         'telepon' => '081579002963',
    //         'tanggal' => '2020-12-19',
    //         'nominal' => 125000,
    //         'keterangan' => 'Ada bantuan yg jumlahnya tidak seberapa, semoga berkah',
    //         'cover' => '',
    //     ]);
    //     $donasi3 = Donasi::create([
    //         'nm_donatur' => 'Tina Amelia',
    //         'email' => 'amelia14@gmail.com',
    //         'telepon' => '08722940862',
    //         'tanggal' => '2020-12-24',
    //         'nominal' => 100000,
    //         'keterangan' => 'Bismillah, semoga bermanfaat :)',
    //         'cover' => '',
    //     ]);
