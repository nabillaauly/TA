<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-bold text-2xl text-blue-700 leading-tight">
                {{ __('My UKM') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-10 bg-blue-50 min-h-screen">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-white rounded-2xl shadow-lg p-8 space-y-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Formulir Admin UKM</h3>
                <form action="{{ url('/admin/store') }}" method="POST" class="space-y-5">
                    @csrf

                    <!-- Nama UKM -->
                    <div>
                        <label for="nama" class="block text-gray-700 font-medium mb-1">Nama UKM</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan nama UKM"
                               class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>

                    <div>
                        <label for="question1" class="block text-gray-700 font-medium mb-1">Apakah organisasi ini aktif melibatkan anggotanya dalam kegiatan secara rutin?</label>
                        <select name="question1" id="question1"
                                class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">Pilih Opsi</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>

                    <div>
                        <label for="question2" class="block text-gray-700 font-medium mb-1">Jenis organisasi apa yang paling menggambarkan organisasi ini?</label>
                        <select name="question2" id="question2"
                                class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">Pilih Jenis Organisasi</option>
                            <option value="Organisasi pengembangan jiwa kepemimpinan">Organisasi pengembangan jiwa kepemimpinan?</option>
                            <option value="Organisasi pengembangan minat bakat ( seni, olahraga, literasi, teknologi)">Organisasi pengembangan minat bakat ( seni, olahraga, literasi, teknologi)</option>
                        </select>
                    </div>

                     <div>
                        <label for="question3" class="block text-gray-700 font-medium mb-1">Apa faktor utama yang menjadi prioritas dalam organisasi ini?</label>
                        <select name="question3" id="question3" class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">Pilih Jawaban</option>
                            <option value="Lingkungan yang mendukung dan positif">Lingkungan yang mendukung dan positif</option>
                            <option value="Peluang belajar dan berkembang">Peluang belajar dan berkembang</option>
                            <option value="Kesempatan untuk menunjukkan hasil atau prestasi">Kesempatan untuk menunjukkan hasil atau prestasi</option>
                            <option value="Ruang untuk mengekspresikan ide">Ruang untuk mengekspresikan ide</option>
                        </select>
                    </div>

                    <div>
                        <label for="question4" class="block text-gray-700 font-medium mb-1">Jenis kegiatan apa yang paling sering dilakukan oleh organisasi ini?</label>
                        <select name="question4" id="question4"
                                class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">Pilih Jenis Kegiatan</option>
                            <option value="Kompetisi">Kompetisi</option>
                            <option value="Kolaborasi Tim">Kolaborasi Tim</option>
                            <option value="Kegiatan Fisik">Kegiatan Fisik</option>
                            <option value="Kreativitas">Kreativitas</option>
                            <option value="Sosial">Sosial</option>
                            <option value="Pengabdian Masyarakat">Pengabdian Masyarakat</option>
                        </select>
                    </div>

                    <div>
                        <label for="question5" class="block text-gray-700 font-medium mb-1">Tingkat komitmen yang diharapkan dari anggota dalam organisasi ini?</label>
                        <select name="question5" id="question5"
                                class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">Pilih Opsi</option>
                            <option value="Komitmen Besar">Komitmen Besar</option>
                            <option value="Cukup Besar">Cukup Besar</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Kecil">Kecil</option>
                        </select>
                    </div>

                    <div>
                        <label for="question6" class="block text-gray-700 font-medium mb-1">Seberapa sering organisasi ini menyelenggarakan kegiatan atau aktivitas bagi anggotanya?</label>
                        <select name="question6" id="question6"
                                class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">Pilih Jawaban</option>
                            <option value="Sering">Sering</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Kadang-kadang">Kadang-kadang</option>
                        </select>
                    </div>

                    <div>
                        <label for="question7" class="block text-gray-700 font-medium mb-1">Seberapa besar organisasi ini mendorong anggotanya aktif di luar kegiatan akademik?</label>
                        <select name="question7" id="question7"
                                class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">Pilih Jawaban</option>
                            <option value="Besar">Besar</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Biasa saja">Biasa saja</option>
                            <option value="Tidak tertarik">Tidak tertarik</option>
                        </select>
                    </div>

                    <div>
                        <label for="question8" class="block text-gray-700 font-medium mb-1">Alasan utama organisasi ini mendorong anggotanya aktif di luar kegiatan akademik?</label>
                        <select name="question8" id="question8"
                                class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">Pilih Jawaban</option>
                            <option value="Membangun jaringan/relasi">Membangun jaringan/relasi</option>
                            <option value="Menambah pengalaman">Menambah pengalaman</option>
                            <option value="Melatih soft skill">Melatih soft skill</option>
                            <option value="Meningkatkan CV/portofolio">Meningkatkan CV/portofolio</option>
                        </select>
                    </div>

                    <div>
                        <label for="question9" class="block text-gray-700 font-medium mb-1">Target jangka pendek apa yang ingin di capai organisasi ini bagi anggotanya melalui keikutsertaan dalam kegiatan di luar akademik?</label>
                        <select name="question9" id="question9"
                                class="w-full border border-blue-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">Pilih Jawaban</option>
                            <option value="Pengembangan diri">Pengembangan diri</option>
                            <option value="Belajar hal baru">Belajar hal baru</option>
                            <option value="Eksplorasi minat">Eksplorasi minat</option>
                            <option value="Keseruan dan kebersamaan">Keseruan dan kebersamaan</option>
                        </select>
                    </div>

                    <!-- <label for="question10" class="block text-black font-medium mb-2">Apakah organisasi ini terbuka untuk semua jurusan?</label>
    <div class="flex items-center gap-x-6">
        <label class="inline-flex items-center">
            <input type="radio" name="question10" value="Ya" class="text-blue-600 focus:ring-blue-400">
            <span class="ml-2 text-black">Ya</span>
        </label>
        <label class="inline-flex items-center">
            <input type="radio" name="question10" value="Tidak" class="text-blue-600 focus:ring-blue-400">
            <span class="ml-2 text-black">Tidak</span>
        </label>
    </div>
</div> -->

                    <!-- Tombol Submit -->
                    <div class="text-center">
                        <button type="submit"
                                class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-full hover:bg-blue-700 transition duration-200">
                            Simpan Data Admin UKM
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>