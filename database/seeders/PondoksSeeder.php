<?php

namespace Database\Seeders;
use App\Models\DataAnak;
use App\Models\DataKegiatan;
use App\Models\Donasi;
use App\Models\Konfirmasi;
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
            'alamat' => 'Kp. Batu RT.02/24, Sangkanhurip',
        ]);
        $data_anak2 = DataAnak::create([
            'nm_anak' => 'Muhammad Adinata',
            'tempat_lahir' => 'Bandung', 
            'tgl_lahir' => '2019-02-25', 
            'jk' => 'Laki-laki',
            'pendidikan' => '-',
            'nm_wali' => 'Dewi Setyawati',
            'alamat' => 'Gg. Sudirja, Sukamenak',
        ]);
        $data_anak3 = DataAnak::create([
            'nm_anak' => 'Ardiyan Naufal',
            'tempat_lahir' => 'Garut', 
            'tgl_lahir' => '2012-09-17', 
            'jk' => 'Laki-laki',
            'pendidikan' => 'Sekolah Dasar',
            'nm_wali' => 'Susanti',
            'alamat' => 'Kp. Cangkuang RT.02/05, Cangkuang Wetan',
        ]);

        // membuat sample data kegiatan
        $kegiatan1 = DataKegiatan::create([
            'judul' => 'Peringatan Hari Anak Nasional',
            'tanggal' => '2021-07-23', 
        ]);
        $kegiatan2 = DataKegiatan::create([
            'judul' => 'Berkurban di Hari Raya Idul Adha',
            'tanggal' => '2021-07-20', 
        ]);
        $kegiatan3 = DataKegiatan::create([
            'judul' => 'Pondok Yatim Gelar Bazar Sembako Hemat Untuk Warga',
            'tanggal' => '2022-01-02', 
        ]);

        // membuat sample data donasi
        $donasi1 = Donasi::create([
            'nm_donatur' => 'Hamba Allah',
            'nominal' => 1000000, 
            'tanggal' => '2020-12-29', 
            'norek' => 299810000506,
            'nm_bank' => 'BCA',
            'pemilik_rek' => 'Rizaldy Zakia Fahmi',
            'telepon' => '081822675094',
            'keterangan' => 'Semoga Bermanfaat',
        ]);
        $donasi2 = Donasi::create([
            'nm_donatur' => 'Suseno',
            'nominal' => 375000, 
            'tanggal' => '2021-04-25', 
            'norek' => 8977000987,
            'nm_bank' => 'BCA',
            'pemilik_rek' => 'Suseno Atmaja',
            'telepon' => '089509566704',
            'keterangan' => 'Ada bantuan yg nominalnya tidak seberapa, semoga berkah',
        ]);
        $donasi3 = Donasi::create([
            'nm_donatur' => 'Tina Amelia',
            'nominal' => 250000, 
            'tanggal' => '2021-09-17', 
            'norek' => 3498100004583,
            'nm_bank' => 'Mandiri',
            'pemilik_rek' => 'Susanti',
            'telepon' => '08722940862',
            'keterangan' => 'Bismillah, semoga bermanfaat :)',
        ]);

        // membuat sample konfirmasi donasi
        $konfirmasi1 = Konfirmasi::create([
            'id_donasi' => $donasi1->id,
            'nm_donatur' => 'Hamba Allah',
        ]);
        $konfirmasi2 = Konfirmasi::create([
            'id_donasi' => $donasi2->id,
            'nm_donatur' => 'Suseno',
        ]);
        $konfirmasi3 = Konfirmasi::create([
            'id_donasi' => $donasi3->id,
            'nm_donatur' => 'Tina Amelia',
        ]);

    }
}
