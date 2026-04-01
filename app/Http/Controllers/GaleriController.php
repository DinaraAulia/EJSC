<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function show($id)
    {
        $galeri = \App\Models\Galeri::with('fotos')->where('id_galeri', $id)->first();

        if (!$galeri) {
            $placeholders = [
                'gallery-01' => ['img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200&q=80', 'title' => 'Startup Networking Night', 'desc' => 'Malam keakraban para founder startup lokal. Pada kegiatan ini, kami memfasilitasi networking yang hangat, bertukar insight bisnis terbaru, dan menghubungkan startup dengan berbagai mitra potensial untuk saling berkolaborasi.'],
                'gallery-02' => ['img' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=1200&q=80', 'title' => 'Digital Marketing Workshop', 'desc' => 'Pelatihan intensif selama 2 hari membahas fundamental Social Media Marketing, SEO, serta strategi pembuatan konten yang viral. Workshop ini sangat digemari oleh rekan-rekan pelaku UMKM.'],
                'gallery-03' => ['img' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=1200&q=80', 'title' => 'UI/UX Design Bootcamp', 'desc' => 'Bootcamp eksklusif mengenai perancangan antarmuka aplikasi. Di sini peserta belajar dari nol cara menggunakan Figma, melakukan riset user, hingga pengujian UI secara interaktif.'],
                'gallery-04' => ['img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1200&q=80', 'title' => 'Web Development Seminar', 'desc' => 'Seminar inspiratif yang menghadirkan web developer senior industri. Menyoroti teknologi full-stack zaman now, dan cara mengamankan aplikasi web berskala besar.'],
                'gallery-05' => ['img' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=1200&q=80', 'title' => 'Co-working Collaboration', 'desc' => 'Momen produktif harian dimana puluhan freelancer, developer, dan desainer berbagi meja kerja. Tercipta lingkungan kerja dinamis yang mendorong sinergi antar pengunjung EJSC Bakorwil Malang.'],
                'gallery-06' => ['img' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1200&q=80', 'title' => 'Creative Pitch Deck', 'desc' => 'Sesi inkubasi khusus penyusunan profil bisnis dan teknik presentasi. Mentor ahli memberikan umpan balik langsung agar startup makin siap menarik atensi investor.'],
                'gallery-07' => ['img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&q=80', 'title' => 'Leadership Masterclass', 'desc' => 'Ajang peningkatan kapasitas diri para manajer dan founder muda untuk mempelajari dinamika tim dan soft skill kepemimpinan esensial dalam era disrupsi digital.'],
                'gallery-08' => ['img' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=1200&q=80', 'title' => 'Annual Strategy Meeting', 'desc' => 'Rapat tahunan yang melibatkan pengurus inti serta pemangku kebijakan terkait. Mengevaluasi seluruh capaian di tahun lalu dan meramu roadmap strategis inovatif untuk masa mendatang.'],
            ];

            if(array_key_exists($id, $placeholders)) {
                $item = $placeholders[$id];
                $galeri = (object)[
                    'id_galeri' => $id,
                    'judul' => $item['title'],
                    'tanggal' => now()->subDays(rand(5,30))->format('Y-m-d'),
                    'deskripsi' => $item['desc'],
                    'fotos' => collect([
                        (object)['path_foto' => $item['img']],
                        (object)['path_foto' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1200&q=80'],
                        (object)['path_foto' => 'https://images.unsplash.com/photo-1558403194-611308249627?w=1200&q=80'],
                        (object)['path_foto' => 'https://images.unsplash.com/photo-1515162816999-a0c47dc192f7?w=1200&q=80'],
                    ])
                ];
            } else {
                abort(404);
            }
        }

        return view('gallery.show', compact('galeri'));
    }
}
