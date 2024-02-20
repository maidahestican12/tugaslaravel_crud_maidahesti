<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Extracurricular
{
    private static $extracurriculars =[
        [
            "id" => 1,
            "nama" => "Padus",
            "pembina" => "Bu Putri",
            "deskripsi" => "Padus adalah singkatan dari Paduan Suara dalam bahasa Indonesia. Ini merujuk kepada kelompok vokal atau paduan suara yang terdiri dari sejumlah individu yang bernyanyi bersama-sama",
            
        ],
        [
            "id" => 2,
            "nama" => "Teater",
            "pembina" => "Bu Fara",
            "deskripsi" => "Teater adalah seni pertunjukan yang melibatkan penampilan live oleh aktor dan aktris yang memerankan karakter 
                            dalam sebuah cerita atau karya seni. Teater mencakup berbagai genre, dari drama, komedi, musikal, hingga teater eksperimental. Pertunjukan teater sering dihadiri oleh penonton langsung dan menggabungkan seni peran, pencahayaan, suara, dan dekorasi untuk menyajikan cerita atau pesan kepada audiens.",
            
        ],
        [
            "id" => 3,
            "nama" => "Volly",
            "pembina" => "Pak Imam",
            "deskripsi" => "Voli adalah olahraga tim yang dimainkan di dalam gedung (voli dalam ruangan) atau di pantai (voli pantai). Dalam permainan voli, dua tim berusaha untuk mencetak poin dengan memantulkan bola di atas jaring ke area lawan. Voli melibatkan kombinasi keterampilan fisik, koordinasi tim, dan strategi permainan yang melibatkan servis, umpan, serangan, dan pertahanan.",
            
            
        ],
        [
            "id" => 4,
            "nama" => "Osis",
            "pembina" => "Bu Widi",
            "deskripsi" => "OSIS adalah sebuah organisasi yang terdiri dari siswa-siswa yang dipilih atau terpilih oleh sesama siswa untuk mewakili seluruh siswa di sekolah. Tugas OSIS melibatkan perwakilan siswa dalam keputusan-keputusan sekolah, penyelenggaraan acara-acara sekolah, dan pengembangan kegiatan-kegiatan ekstrakurikuler. OSIS juga bertanggung jawab untuk memajukan kepentingan dan kesejahteraan siswa di sekolah.

            Masing-masing dari entitas ini memiliki peran dan tujuan khusus dalam konteks sekolah, seni pertunjukan, olahraga, dan pengembangan spiritual. Mereka berkontribusi dalam memperkaya pengalaman siswa di berbagai aspek, mulai dari belajar hingga pengembangan kepribadian dan pengembangan keterampilan. ",
            
            
        ],
        [
            "id" => 5,
            "nama" => "Rohis",
            "pembina" => "Pak SarwoEdi",
            "deskripsi" => "Rohis adalah singkatan dari Rohani Islam, yang merupakan kelompok atau organisasi yang berfokus pada pengembangan spiritual dan agama Islam di kalangan siswa. Rohis biasanya melibatkan kegiatan seperti pembelajaran agama, doa bersama, diskusi keagamaan, amal kebajikan, dan kegiatan-kegiatan yang mempromosikan nilai-nilai Islam dan kebaikan di sekolah.",
            
            
        ],
        
    ];

    public static function all()
    {
        return self::$extracurriculars;
    }
    
}
