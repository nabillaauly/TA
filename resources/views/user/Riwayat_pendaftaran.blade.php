<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('INI HALAMAN HISTORY') }}
        </h2>
    </x-slot>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Data Pendaftaran UKM</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Program Studi</th>
                            <th>Semester</th>
                            <th>Jenis Kelamin</th>
                            <th>Alasan</th>
                            <th>Foto</th>
                            <th>Admin UKM</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recruitments as $index => $recruitment)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $recruitment->name }}</td>
                            <td>{{ $recruitment->nim }}</td>
                            <td>{{ $recruitment->email }}</td>
                            <td>{{ $recruitment->phone }}</td>
                            <td>{{ $recruitment->study_program }}</td>
                            <td>{{ $recruitment->semester }}</td>
                            <td>
                                <span class="badge {{ $recruitment->gender == 'Male' ? 'badge-primary' : 'badge-danger' }}">
                                    {{ $recruitment->gender == 'Male' ? 'Laki-Laki' : 'Perempuan' }}
                                </span>
                            </td>
                            <td class="text-left">{{ $recruitment->reason }}</td>
                            <td>
                                @if($recruitment->photo)
                                    <img src="{{ asset('uploads/' . $recruitment->photo) }}" class="img-thumbnail" width="60" height="60" alt="Foto">
                                @else
                                    <span class="text-muted">Tidak Ada Foto</span>
                                @endif
                            </td>
                            <td>{{ $recruitment->Adminukm->name ?? 'Tidak Diketahui' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>  
        </div>
    </div>
</div>

</x-app-layout>