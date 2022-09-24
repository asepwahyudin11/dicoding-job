<?php

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = "<p><big><strong>Tentang Perusahaan</strong></big></p>

        <p>Dicoding Academy adalah platform learning online yang ditujukan untuk para software developer di Indonesia. Kami selalu menawarkan kurikulum terbaik agar dapat mewujudkan mimpi menjadi developer hebat bagi seluruh developer di Indonesia. Kurikulum yang disusun memiliki standar industri global. Kami bekerja sama dengan perusahaan teknologi dunia seperti Google, Microsoft, AWS, IBM, dan Line dalam mengembangkan kelas dari tingkat pemula hingga profesional.</p>
        
        <p><big><strong>Deskripsi Pekerjaan</strong></big></p>
        
        <p>Proses code review di Dicoding Academy mengacu pada praktik nyata yang dilakukan di industri pengembangan software. Siswa akan mendapatkan feedback secara langsung mengenai kode yang ditulis untuk sebuah tugas pada kelas yang dipelajari.</p>
        
        <p>Sebagai Academy Code Reviewer, kamu akan berpartisipasi dalam proses belajar siswa di Dicoding Academy. Kamu akan mengarahkan siswa dalam menuliskan kode yang baik, efisien, dan sesuai dengan kaidah yang berlaku pada sebuah bahasa pemrograman atau platform tertentu.</p>
        
        <p><big><strong>Responsibilities</strong></big></p>
        
        <ul>
            <li>Me-review submission (tugas) siswa dalam sebuah kelas sesuai target yang diberikan.</li>
            <li>Bekolaborasi dengan tim Academy dalam merancang submission (tugas) dari sebuah kelas.</li>
            <li>Berkontribusi pada project-project yang dikerjakan oleh tim Reviewer.</li>
        </ul>
        
        <p><big><strong>Syarat Pelamar</strong></big></p>
        
        <ul>
            <li>Memahami penulisan kode yang baik, efisien, dan sesuai konvensi dari sebuah bahasa pemrograman.</li>
            <li>Mengetahui best-practice dari platform yang digunakan pada kelas yang akan di-review.</li>
            <li>Teliti dan memiliki kemampuan debugging yang baik.</li>
            <li>Menguasai teknologi yang digunakan pada kelas yang akan di-review. Dibuktikan dengan:&nbsp;
            <ul>
                <li>Lulus dengan nilai baik pada kelas tersebut, atau</li>
                <li>Telah memberi kontribusi ke dalam kelas tersebut. Misalnya, memberikan masukan terhadap kelas atau aktif pada forum diskusi.</li>
            </ul>
            </li>
            <li>Berpengalaman dalam pengembangan aplikasi iOS.</li>
            <li>Memiliki kemampuan komunikasi dan kolaborasi yang baik.</li>
            <li>Memiliki rasa ingin tahu yang tinggi dan tidak pernah puas akan pengetahuan baru.</li>
            <li>Memiliki kemampuan dasar untuk riset akan menjadi nilai tambah.</li>
            <li>Terbuka dalam menerima feedback dari orang lain.</li>
            <li>Percaya diri dan dapat dipercaya.</li>
        </ul>";
        $created_at = "2022-06-15";
        $created_by = "Asep Wahyudin";
        $created_email = "asepwahyudin11@gmail.com"; // Change for email recruiter

        $datas = [
            [
                'title' => 'Back-End Engineer', 
                'description' => $description,
                'company_name' => 'Acme Studio',
                'company_logo' => '/company/sample1.jpeg',
                'company_sector' => 'Creative',
                'company_size' => '25-50 orang',
                'type_id' => 1,
                'city_id' => 3,
                'experience_id' => 1,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-07-15',
            ],
            [ 
                'title' => 'Product Engineer', 
                'description' => $description,
                'company_name' => 'Acme Studio',
                'company_logo' => '/company/sample1.jpeg',
                'company_sector' => 'Creative',
                'company_size' => '25-50 orang',
                'type_id' => 2,
                'city_id' => 1,
                'experience_id' => 2,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-07-15',
            ],
            [ 
                'title' => 'Product Designer', 
                'description' => $description,
                'company_name' => 'Acme Studio',
                'company_logo' => '/company/sample1.jpeg',
                'company_sector' => 'Creative',
                'company_size' => '25-50 orang',
                'type_id' => 3,
                'city_id' => 3,
                'experience_id' => 1,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-08-15',
            ],
            [ 
                'title' => 'Product Designer', 
                'description' => $description,
                'company_name' => 'Acme Studio',
                'company_logo' => '/company/sample1.jpeg',
                'company_sector' => 'Creative',
                'company_size' => '25-50 orang',
                'type_id' => 1,
                'city_id' => 2,
                'experience_id' => 2,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-08-15',
            ],
            [ 
                'title' => 'iOS Developer', 
                'description' => $description,
                'company_name' => 'Acme Studio',
                'company_logo' => '/company/sample1.jpeg',
                'company_sector' => 'Creative',
                'company_size' => '25-50 orang',
                'type_id' => 1,
                'city_id' => 3,
                'experience_id' => 3,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-09-15',
            ],
            [ 
                'title' => 'Engineer Lead', 
                'description' => $description,
                'company_name' => 'Acme Studio',
                'company_logo' => '/company/sample1.jpeg',
                'company_sector' => 'Creative',
                'company_size' => '25-50 orang',
                'type_id' => 2,
                'city_id' => 2,
                'experience_id' => 2,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-09-15',
            ],
            [ 
                'title' => 'Senior Product Engineer', 
                'description' => $description,
                'company_name' => 'Acme Studio',
                'company_logo' => '/company/sample1.jpeg',
                'company_sector' => 'Creative',
                'company_size' => '25-50 orang',
                'type_id' => 1,
                'city_id' => 1,
                'experience_id' => 4,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-10-15',
            ],
            [ //Sekat
                'title' => 'Back-End Engineer', 
                'description' => $description,
                'company_name' => 'Dicoding',
                'company_logo' => '/company/sample2.png',
                'company_sector' => 'Education',
                'company_size' => '500-1000 orang',
                'type_id' => 1,
                'city_id' => 3,
                'experience_id' => 1,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-10-15',
            ],
            [ 
                'title' => 'Product Engineer', 
                'description' => $description,
                'company_name' => 'Dicoding',
                'company_logo' => '/company/sample2.png',
                'company_sector' => 'Education',
                'company_size' => '500-1000 orang',
                'type_id' => 2,
                'city_id' => 1,
                'experience_id' => 2,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-11-15',
            ],
            [ 
                'title' => 'Product Designer', 
                'description' => $description,
                'company_name' => 'Dicoding',
                'company_logo' => '/company/sample2.png',
                'company_sector' => 'Education',
                'company_size' => '500-1000 orang',
                'type_id' => 3,
                'city_id' => 3,
                'experience_id' => 1,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-11-15',
            ],
            [ 
                'title' => 'Product Designer', 
                'description' => $description,
                'company_name' => 'Dicoding',
                'company_logo' => '/company/sample2.png',
                'company_sector' => 'Education',
                'company_size' => '500-1000 orang',
                'type_id' => 1,
                'city_id' => 2,
                'experience_id' => 2,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-12-15',
            ],
            [ 
                'title' => 'iOS Developer', 
                'description' => $description,
                'company_name' => 'Dicoding',
                'company_logo' => '/company/sample2.png',
                'company_sector' => 'Education',
                'company_size' => '500-1000 orang',
                'type_id' => 1,
                'city_id' => 3,
                'experience_id' => 3,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-12-15',
            ],
            [ 
                'title' => 'Engineer Lead', 
                'description' => $description,
                'company_name' => 'Dicoding',
                'company_logo' => '/company/sample2.png',
                'company_sector' => 'Education',
                'company_size' => '500-1000 orang',
                'type_id' => 2,
                'city_id' => 2,
                'experience_id' => 2,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-09-15',
            ],
            [ 
                'title' => 'Senior Product Engineer', 
                'description' => $description,
                'company_name' => 'Dicoding',
                'company_logo' => '/company/sample2.png',
                'company_sector' => 'Education',
                'company_size' => '500-1000 orang',
                'type_id' => 1,
                'city_id' => 1,
                'experience_id' => 4,
                'created_at' => $created_at,
                'created_by' => $created_by,
                'created_email' => $created_email,
                'closed_at' => '2022-10-15',
            ],
            
        ];

        foreach ($datas as $item) {
            Job::create($item);
        }
    }
}
