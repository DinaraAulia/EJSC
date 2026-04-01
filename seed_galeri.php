<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Galeri;
use App\Models\GaleriFoto;

DB::statement('SET FOREIGN_KEY_CHECKS=0;');
GaleriFoto::truncate();
Galeri::truncate();
DB::statement('SET FOREIGN_KEY_CHECKS=1;');

$placeholders = [
    ['title' => 'Startup Networking Night'],
    ['title' => 'Digital Marketing Workshop'],
    ['title' => 'UI/UX Design Bootcamp'],
    ['title' => 'Web Development Seminar'],
    ['title' => 'Co-working Collaboration'],
    ['title' => 'Creative Pitch Deck'],
    ['title' => 'Leadership Masterclass'],
    ['title' => 'Annual Strategy Meeting'],
    ['title' => 'Networking & Coffee'],
    ['title' => 'Idea Generation Sprint'],
    ['title' => 'Open Code Contribution'],
    ['title' => 'Financial Legal Consultation'],
];

if (!is_dir(storage_path('app/public/galeri-images'))) {
    mkdir(storage_path('app/public/galeri-images'), 0777, true);
}

// Ensure SSL context works
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$demoImageContent = file_get_contents('https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80', false, stream_context_create($arrContextOptions));

foreach ($placeholders as $index => $item) {
    if (!Galeri::find('GLR-' . ($index+1))) {
        $galeriId = 'GLR-' . str_pad($index+1, 3, '0', STR_PAD_LEFT);
        $galeri = Galeri::create([
            'id_galeri' => $galeriId,
            'judul' => $item['title'],
            'deskripsi' => 'Photos from ' . $item['title'],
            'tanggal' => now()->subDays(rand(1,60))->format('Y-m-d'),
        ]);
        
        $fileName = 'galeri-images/dummy-' . $index . '.jpg';
        file_put_contents(storage_path('app/public/' . $fileName), $demoImageContent);

        GaleriFoto::create([
            'id_gambar' => 'IMG-' . str_pad($index+1, 3, '0', STR_PAD_LEFT), 
            'galeri_id' => $galeriId,
            'path_foto' => $fileName,
        ]);
    }
}

echo "Successfully seeded 12 galleries.\n";
