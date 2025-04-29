<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('My ukm') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
            <form action="{{ url('/admin/store') }}" method="POST">
               @csrf

               <!-- Nama UKM  -->
               <div class="form-group">
                  <label for="nama">Nama UKM</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama UKM">
               </div>

               <!-- Pertanyaan 1: Minat utama -->
               <!-- <div class="form-group">
                  <label for="interest">Apa minat utama Anda dalam kegiatan ekstrakurikuler?</label>
                  <select class="form-control" name="interest" id="interest">
                     <option value="">Pilih Minat</option>
                     <option value="Musik">Musik</option>
                     <option value="Olahraga">Olahraga</option>
                     <option value="Seni">Seni</option>
                     <option value="Sastra">Sastra</option>
                     <option value="Teknologi">Teknologi</option>
                     <option value="Sosial">Sosial</option>
                     <option value="Kewirausahaan">Kewirausahaan</option>
                  </select>
               </div> -->

               <!-- Pertanyaan 2: Jenis kegiatan -->
               <div class="form-group">
                  <label for="activity_type">Jenis kegiatan apakah yang Anda lebih suka lakukan di UKM?</label>
                  <select class="form-control" name="activity_type" id="activity_type">
                     <option value="">Pilih Jenis Kegiatan</option>
                     <option value="Kompetisi">Kompetisi</option>
                     <option value="Kolaborasi Tim">Kolaborasi Tim</option>
                     <option value="Kegiatan Fisik">Kegiatan Fisik</option>
                     <option value="Kreativitas">Kreativitas</option>
                     <option value="Sosial">Sosial</option>
                     <option value="Pengabdian Masyarakat">Pengabdian Masyarakat</option>
                  </select>
               </div>

               <!-- Pertanyaan 3: Ukuran komunitas -->
               <div class="form-group">
                  <label for="community_size">Bagaimana Anda menggambarkan ukuran komunitas yang diinginkan?</label>
                  <select class="form-control" name="community_size" id="community_size">
                     <option value="">Pilih Ukuran Komunitas</option>
                     <option value="Kecil">Kecil (25-50 orang)</option>
                     <option value="Sedang">Sedang (50-100 orang)</option>
                     <option value="Besar">Besar (100+ orang)</option>
                  </select>
               </div>

               <!-- Pertanyaan 4: Waktu kegiatan -->
               <div class="form-group">
                  <label for="preferred_time">Kapan Anda lebih suka melakukan kegiatan UKM?</label>
                  <select class="form-control" name="preferred_time" id="preferred_time">
                     <option value="">Pilih Waktu Kegiatan</option>
                     <option value="Pagi">Pagi</option>
                     <option value="Sore">Sore</option>
                     <option value="Malam">Malam</option>
                     <option value="Akhir Pekan">Akhir Pekan</option>
                     <option value="Fleksibel">Fleksibel</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Dalam organisasi ini anggota lebih sering berperan sebagai</label>
                  <select class="form-control" name="question1" id="question1"> 
                     <option value="">Pilih Jawaban</option>
                     <option value="Pengatur strategi">Pengatur strategi</option>
                     <option value="Pelaksana teknis">Pelaksana teknis</option>
                     <option value="Pencatat/pendokumentasi">Pencatat/pendokumentasi</option>
                     <option value="Tidak ada peran tertentu, tergantung situasi">Tidak ada peran tertentu, tergantung situasi</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Saat mengadakan acara, anggota akan lebih sering</label>
                  <select class="form-control" name="question2" id="question2">
                     <option value="">Pilih Jawaban</option>
                     <option value="Duduk dan menikmati sebagai peserta">Duduk dan menikmati sebagai peserta</option>
                     <option value="Membantu di belakang layar">Membantu di belakang layar</option>
                     <option value="Jadi pembicara/moderator/panitia inti">Jadi pembicara/moderator/panitia inti</option>
                     <option value="Mengamati dan mencatat hal-hal menarik">Mengamati dan mencatat hal-hal menarik</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Dalam organisasi ini anggota akan terlatih untuk</label>
                  <select class="form-control"  name="question3" id="question3">
                     <option value="">Pilih Jawaban</option>
                     <option value="Membangun jaringan/relasi">Membangun jaringan/relasi</option>
                     <option value="Menambah pengalaman">Menambah pengalaman</option>
                     <option value="Melatih soft skill">Melatih soft skill</option>
                     <option value="Meningkatkan CV/portofolio">Meningkatkan CV/portofolio</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Seberapa sering anggota mengikuti kegiatan di luar akademik</label>
                  <select class="form-control"  name="question4" id="question4">
                     <option value="">Pilih Jawaban</option>
                     <option value="Tidak pernah">Tidak pernah</option>
                     <option value="Kadang-kadang (sekali-dua kali sebulan)">Kadang-kadang (sekali-dua kali sebulan)</option>
                     <option value="Cukup sering (sekali seminggu)">Cukup sering (sekali seminggu)</option>
                     <option value="Sangat sering (lebih dari sekali seminggu)">Sangat sering (lebih dari sekali seminggu)</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Berapa Waktu yang perlu disiapkan anggota dalam seminggu kegiatan di luar kuliah</label>
                  <select class="form-control"  name="question5" id="question5">
                     <option value="">Pilih Jawaban</option>
                     <option value="1–3 jam">1–3 jam</option>
                     <option value="4–7 jam">4–7 jam</option>
                     <option value="8–12 jam">8–12 jam</option>
                     <option value="Lebih dari 12 jam">Lebih dari 12 jam</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Anggota harus menyiapkan diri untuk bekerja dengan kelompok dalam bentuk?</label>
                  <select class="form-control"  name="question6" id="question6">
                     <option value="">Pilih Jawaban</option>
                     <option value="memimpin dan mengarahkan">memimpin dan mengarahkan</option>
                     <option value="mengikuti pemimpin yang jelas">mengikuti pemimpin yang jelas</option>
                     <option value="Semua orang bekerja setara, tanpa pemimpin tetap">Semua orang bekerja setara, tanpa pemimpin tetap</option>
                     <option value="bekerja sendiri, tidak terlalu suka kerja kelompok">bekerja sendiri, tidak terlalu suka kerja kelompok</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Dalam kegiatan anggota akan merasakan</label>
                  <select class="form-control" name="question7" id="question7">
                     <option value="">Pilih Jawaban</option>
                     <option value="Keseruan dan kebersamaan">Keseruan dan kebersamaan</option>
                     <option value="Peluang belajar hal baru">Peluang belajar hal baru</option>
                     <option value="Rasa tenang dan pengembangan diri">Rasa tenang dan pengembangan diri</option>
                     <option value="Ruang untuk eksplorasi minat pribadi">Ruang untuk eksplorasi minat pribadi</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Saat diberi tanggung jawab anggota diharuskan untuk</label>
                  <select class="form-control"  name="question8" id="question8">
                     <option value="">Pilih Jawaban</option>
                     <option value="Mengambilnya dengan semangat">Mengambilnya dengan semangat</option>
                     <option value="Mengerjakannya sesuai arahan">Mengerjakannya sesuai arahan</option>
                     <option value="Delegasikan jika tidak yakin">Delegasikan jika tidak yakin</option>
                     <option value="Lebih suka tugas kecil atau ringan">Lebih suka tugas kecil atau ringan</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Dalam organisasi ini lebih bersifat</label>
                  <select class="form-control" name="question9" id="question9">
                     <option value="">Pilih Jawaban</option>
                     <option value="Terstruktur dan rapi">Terstruktur dan rapi</option>
                     <option value="Fleksibel dan spontan">Fleksibel dan spontan</option>
                     <option value="Tergantung suasana hati">Tergantung suasana hati</option>
                     <option value="Tegas dan disiplin">Tegas dan disiplin</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Kegiatan ini akan membuat anggotanya</label>
                  <select class="form-control" name="question10" id="question10">
                     <option value="">Pilih Jawaban</option>
                     <option value="Lebih percaya diri">Lebih percaya diri</option>
                     <option value="Lebih kreatif">Lebih kreatif</option>
                     <option value="Lebih teratur dan disiplin">Lebih teratur dan disiplin</option>
                     <option value="Lebih dikenal banyak orang">Lebih dikenal banyak orang</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Seberapa besar komitmen yang diperlukan untuk organisasi ini</label>
                  <select class="form-control"  name="question11" id="question11">
                     <option value="">Pilih Jawaban</option>
                     <option value="Sangat besar, siap aktif penuh">Sangat besar, siap aktif penuh</option>
                     <option value="Cukup besar, asal sesuai jadwal">Cukup besar, asal sesuai jadwal</option>
                     <option value="Sedang, tergantung beban kuliah">Sedang, tergantung beban kuliah</option>
                     <option value="Kecil, ikut saat sempat">Kecil, ikut saat sempat</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Yang akan didapatkan anggota saat mengikuti kegiatan ini</label>
                  <select class="form-control"  name="question12" id="question12">
                     <option value="">Pilih Jawaban</option>
                     <option value="Meningkatkan skill tertentu">Meningkatkan skill tertentu</option>
                     <option value="Dapat pengalaman organisasi">Dapat pengalaman organisasi</option>
                     <option value="Lebih kenal banyak orang">Lebih kenal banyak orang</option>
                     <option value="Dapat sertifikat/penghargaan">Dapat sertifikat/penghargaan</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Seberapa besar organisasi ini berkontribusi dalam lingkungan sekitar</label>
                  <select class="form-control"  name="question13" id="question13">
                     <option value="">Pilih Jawaban</option>
                     <option value="Sangat sering">Sangat sering</option>
                     <option value="Sering">Sering</option>
                     <option value="Kadang-kadang">Kadang-kadang</option>
                     <option value="Jarang">Jarang</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Organisasi ini sering melakukan kegiatan yang</label>
                  <select class="form-control"  name="question14" id="question14">
                     <option value="">Pilih Jawaban</option>
                     <option value="Ada banyak interaksi dan diskusi">Ada banyak interaksi dan diskusi</option>
                     <option value="Lebih banyak praktik langsung">Lebih banyak praktik langsung</option>
                     <option value="Lebih banyak eksplorasi mandiri">Lebih banyak eksplorasi mandiri</option>
                     <option value="Fokus pada tugas yang jelas">Fokus pada tugas yang jelas</option>
                  </select>
               </div>

               <div class="text-center">
                  <button type="submit" class="btn btn-primary">Simpan Data Admin UKM</button>
               </div>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>