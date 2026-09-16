<!DOCTYPE html>
<html>

<head>
    <title>Halaman Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #82a1dd;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .profile-card {
            background: linear-gradient(to right, #5fc8e5, #9342fc);
            padding: 40px 30px;
            border-radius: 18px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 320px;
        }

        .profile-img {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 30px;
            border: 3px solid #b4b8be;
        }

        .info-box {
            background-color: #c6c8cd;
            width: 280px;
            padding: 12px 20px;
            margin: 8px 0;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: #1f2937;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <div class="profile-card">
        <img src="{{ asset('assets/keren.jpg') }}" alt="Foto Profil" class="profile-img">

        <div class="info-box">
            {{ $nama }}
        </div>

        <div class="info-box">
            {{ $npm }}
        </div>

        <div class="info-box">
            {{ $kelas }}
        </div>
    </div>

</body>

</html>