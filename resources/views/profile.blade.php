<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }
        .profile-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 320px;
        }
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #adb5bd;
            background-color: #dee2e6;
            margin-bottom: 20px;
            display: inline-block;
        }
        .profile-input {
            width: 100%;
            padding: 12px;
            margin-bottom: 12px;
            border: none;
            border-radius: 8px;
            background-color: #ced4da;
            color: #495057;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            cursor: not-allowed;
        }
    </style>
</head>
<body>

<div class="profile-container">
    
    <div class="profile-pic"></div>

    <input type="text" class="profile-input" value="Zelvin Vewi Saputra" disabled>
    <input type="text" class="profile-input" value="A" disabled>
    <input type="text" class="profile-input" value="2217051132" disabled>
</div>

</body>
</html>
