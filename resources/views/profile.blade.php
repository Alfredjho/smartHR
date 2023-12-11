@extends('authtemplate')

@section('Title', 'KMC')
@section('Style')
    <link rel="stylesheet" href="{{asset ('css/profile.css')}}">
@endsection

@section('Content')

<h1>My Profile</h1>

<div class="bar"></div>

<div class="profile-container d-flex justify-content-between">
    <div class="containerCard">
        <div class="profileCard d-flex justify-content-start">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <img src="{{ asset($user->image) }}" alt="" style="width: 12vw; height: 12vw;">
                <h6>{{ $user->position }}</h6>
                {{ $user->name }}
            </div>
        </div>

        <br>

        <label for="profilePhotoInput">
            <p>Change Profile Photo</p>
        </label>
        <input type="file" id="profilePhotoInput" style="display:none;" onchange="displaySelectedFile()">
        <div id="fileNameDisplay"></div>

        <br>

        <button class="btn btn-primary" onclick="updateProfile()">Save</button>

        <br>



    </div>

    <div class="isiProfile">
        <p><strong>Employee ID:</strong> {{ $user->employee_id }}</p>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Department:</strong> {{ $user->department->name }}</p>
        <p><strong>Position:</strong> {{ $user->position }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Bio:</strong></p>

        <div class="biobox">
            <div class="d-flex justify-content-end">
                <a href="{{ route('editBio') }}">
                    <img src="img/edit.png" alt="" style="width: 3vh;">
                </a>
            </div>

            <div class="bioText">
                <p>{{ $user->bio }}</p>
            </div>
        </div>
    </div>


</div>

<div class = "d-flex justify-content-end" style = "margin-top: 6vh; width: 73%; height: 3vh; border-radius: 10px; color: white;">
    <a href="{{ route('logout') }}">Logout</a>
</div>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function displaySelectedFile() {
        var fileInput = document.getElementById('profilePhotoInput');
        var fileNameDisplay = document.getElementById('fileNameDisplay');

        // Pastikan fileNameDisplay ditemukan sebelum mencoba mengatur propertinya
        if (fileNameDisplay) {
            // Tampilkan nama file yang dipilih (opsional)
            fileNameDisplay.innerHTML = 'Selected File: ' + fileInput.files[0].name;
        }
    }

    function updateProfile() {
            var fileInput = document.getElementById('profilePhotoInput');
            var selectedFile = fileInput.files[0];

            if (selectedFile) {
                var formData = new FormData();
                formData.append('profile_photo', selectedFile);

                // Menggunakan AJAX untuk mengirim file ke server (dengan jQuery)
                $.ajax({
                    url: '/update-profile',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        // Pembaruan berhasil, tambahkan kode tambahan jika diperlukan
                        console.log('Profil berhasil diperbarui:', response);
                    },
                    error: function (error) {
                        // Pembaruan gagal, tambahkan penanganan kesalahan jika diperlukan
                        console.error('Gagal memperbarui profil:', error);
                    }
                });
            } else {
                // Tidak ada file yang dipilih
                console.error('Pilih file terlebih dahulu');
            }

            document.location.reload();
        }

</script>

@endsection
