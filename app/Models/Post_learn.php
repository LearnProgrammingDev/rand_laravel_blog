<?php

namespace App\Models;


class Post 
{

   private static $all_articles = [
    [
    "judul" => "Apa itu Machine Learning",
    "slug" => "apa-itu-machine-learning",
    "author" => "randi",
    "isi" => "Teknologi machine learning (ML) adalah mesin yang dikembangkan untuk bisa belajar dengan sendirinya tanpa arahan dari penggunanya. Pembelajaran mesin dikembangkan berdasarkan disiplin ilmu lainnya seperti statistika, matematika dan data mining sehingga mesin dapat belajar dengan menganalisa data tanpa perlu di program ulang atau diperi ntah.Cara kerja machine learning sebenarnya berbeda-beda sesuai dengan teknik atau metode pembelajaran seperti apa yang kamu gunakan pada ML. Namun pada dasarnya prinsip cara kerja pembelajaran mesin masih sama, meliputi pengumpulan data, eksplorasi data, pemilihan model atau teknik, memberikan pelatihan terhadap model yang dipilih dan mengevaluasi hasil dari ML."
    ],
    [
    "judul" => "Mengenal Deep Learning Lebih Jelas",
    "slug" => "mengenal-deep-learning-lebih-jelas",
    "author" => "maulana",
    "isi" => "Deep learning merupakan subbidang machine learning yang algoritmanya terinspirasi dari struktur otak manusia. Saat ini, teknik deep learning sangat populer di kalangan praktisi data dan menarik perhatian banyak pihak. Hal ini karena teknologi deep learning telah diterapkan dalam berbagai produk berteknologi tinggi seperti self-driving car. Selain itu, ia juga ada di balik produk dan layanan yang kita gunakan sehari-hari. Contohnya antara lain, asisten digital, Google Translate, dan voice-activated device (perangkat cerdas yang bisa diaktifkan dengan suara)."
    ]
    ];


    public static function all() {
        return collect(self::$all_articles);
    }

    public static function find($slug) {

        $artikels = static::all();
        return $artikels->firstWhere('slug', $slug);
    }

}
