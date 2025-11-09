<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $articles = [
            [
                'category_id' => 1,
                'writer_id' => 1,
                'title' => 'Machine Learning Beserta Pengertian dan Cara Kerjanya',
                'content' => 'Machine Learning adalah cabang dari artificial intelligence (AI) yang memungkinkan komputer untuk belajar dari data tanpa diprogram secara eksplisit. Teknologi ini telah merevolusi berbagai industri dengan kemampuannya untuk menganalisis pola kompleks dan membuat prediksi akurat. Dalam dunia modern, machine learning digunakan dalam berbagai aplikasi seperti sistem rekomendasi, pengenalan wajah, deteksi fraud, dan masih banyak lagi. Proses pembelajaran dalam machine learning melibatkan algoritma yang secara iteratif belajar dari data, mengidentifikasi pola, dan membuat keputusan dengan intervensi manusia yang minimal.',
                'image' => 'https://images.unsplash.com/photo-1555255707-c07966088b7b?w=800',
                'views' => 1250
            ],
            [
                'category_id' => 1,
                'writer_id' => 1,
                'title' => 'Deep Learning dan Penerapannya di Era Digital',
                'content' => 'Deep Learning merupakan subset dari machine learning yang menggunakan neural network dengan banyak layer untuk memproses data. Teknologi ini telah membawa terobosan signifikan dalam bidang computer vision, natural language processing, dan speech recognition. Deep learning mampu menangani data yang sangat kompleks dan tidak terstruktur, membuatnya ideal untuk tugas-tugas seperti klasifikasi gambar, terjemahan bahasa, dan sintesis suara. Arsitektur deep learning seperti CNN, RNN, dan Transformer telah mengubah cara kita berinteraksi dengan teknologi sehari-hari.',
                'image' => 'https://images.unsplash.com/photo-1527474305487-b87b222841cc?w=800',
                'views' => 980
            ],
            [
                'category_id' => 2,
                'writer_id' => 2,
                'title' => 'Pentingnya Cybersecurity di Era Digital',
                'content' => 'Cybersecurity atau keamanan siber menjadi semakin krusial di era digital ini. Dengan meningkatnya ancaman siber seperti malware, phishing, ransomware, dan serangan DDoS, organisasi dan individu harus lebih waspada dalam melindungi data dan sistem mereka. Keamanan siber melibatkan berbagai teknik dan praktik untuk melindungi sistem komputer, jaringan, dan data dari akses tidak sah, serangan, atau kerusakan. Implementasi security measures yang tepat, termasuk enkripsi, firewall, dan authentication yang kuat, sangat penting untuk menjaga integritas dan confidentiality data.',
                'image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800',
                'views' => 1580
            ],
            [
                'category_id' => 2,
                'writer_id' => 2,
                'title' => 'Enkripsi dan Proteksi Data Modern',
                'content' => 'Enkripsi adalah proses mengubah informasi menjadi kode rahasia untuk mencegah akses tidak sah. Dalam dunia digital yang semakin terhubung, enkripsi menjadi fondasi keamanan data. Teknologi enkripsi modern menggunakan algoritma kriptografi yang kompleks seperti AES, RSA, dan ECC untuk melindungi data baik saat transit maupun saat tersimpan. Penerapan enkripsi end-to-end dalam aplikasi messaging, HTTPS untuk website, dan full disk encryption untuk perangkat storage adalah contoh nyata pentingnya teknologi ini dalam melindungi privasi dan keamanan informasi.',
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800',
                'views' => 875
            ],
            [
                'category_id' => 3,
                'writer_id' => 3,
                'title' => 'Human and Computer Interaction',
                'content' => 'Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi dengan komputer dan sejauh mana teknologi dikembangkan untuk memungkinkan interaksi yang sukses. HCI melibatkan desain, evaluasi, dan implementasi sistem komputer interaktif untuk digunakan manusia. Bidang ini menggabungkan berbagai disiplin ilmu termasuk ilmu komputer, psikologi kognitif, desain, dan ergonomi. Prinsip-prinsip HCI yang baik memastikan bahwa interface yang dibuat intuitif, efisien, dan memberikan user experience yang positif.',
                'image' => 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?w=800',
                'views' => 1450
            ],
            [
                'category_id' => 3,
                'writer_id' => 3,
                'title' => 'User Experience Design Principles',
                'content' => 'User Experience (UX) Design adalah proses menciptakan produk yang memberikan pengalaman bermakna dan relevan kepada pengguna. UX design melibatkan desain seluruh proses akuisisi dan integrasi produk, termasuk aspek branding, desain, usability, dan fungsi. Prinsip-prinsip UX design yang baik mencakup user research, information architecture, interaction design, dan visual design. Designer UX harus memahami kebutuhan pengguna, membuat prototype, melakukan usability testing, dan iterasi design berdasarkan feedback untuk menciptakan produk yang tidak hanya fungsional tetapi juga menyenangkan untuk digunakan.',
                'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800',
                'views' => 1120
            ],
            [
                'category_id' => 4,
                'writer_id' => 4,
                'title' => 'Agile Development Methodology',
                'content' => 'Agile adalah metodologi pengembangan software yang menekankan pada kolaborasi, fleksibilitas, dan pengiriman incremental. Berbeda dengan waterfall model yang linear, Agile menggunakan iterasi pendek yang disebut sprint untuk mengembangkan software secara bertahap. Metodologi Agile seperti Scrum dan Kanban telah menjadi standar industri karena kemampuannya untuk beradaptasi dengan perubahan requirement dan memberikan value kepada customer lebih cepat. Prinsip Agile mendorong komunikasi yang konstan antara tim development dan stakeholder, continuous improvement, dan fokus pada delivering working software.',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=800',
                'views' => 1680
            ],
            [
                'category_id' => 4,
                'writer_id' => 4,
                'title' => 'Software Testing dan Quality Assurance',
                'content' => 'Software Testing adalah proses mengevaluasi dan memverifikasi bahwa software application atau program melakukan apa yang seharusnya dilakukan. Testing membantu mengidentifikasi bugs, gaps, atau missing requirements sebelum software dirilis ke production. Quality Assurance (QA) adalah pendekatan sistematis untuk memastikan bahwa software memenuhi standar kualitas yang ditetapkan. Berbagai jenis testing seperti unit testing, integration testing, system testing, dan acceptance testing dilakukan untuk memastikan software berfungsi dengan baik di berbagai skenario. Automation testing juga semakin penting untuk meningkatkan efisiensi dan coverage testing.',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800',
                'views' => 1340
            ]
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
