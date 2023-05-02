<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background-color: #4CAF50;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>


    <div style='display:flex;flex-direction:column;justify-items:center;align-items:center'>
        <img style='width:150px' src='https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExZGYwYjZmZmM2YWM4ZDllOTlhOWQ4ZmYxNDY2OWY1MzI4MjgzZjQwZiZlcD12MV9pbnRlcm5hbF9naWZzX2dpZklkJmN0PXM/gHQxuAXCnkx4BXOJa8/giphy.gif'>
        <h2 style='color:white'>Tüh Hesap Devre Dışı Bırakılmış</h2>
        @if($durum==1)
        <a href="{{route('index')}}" style='text-decoration: none; cursor:pointer; padding:3%;background-color:red;border-radius:10rem;color:white'>Hesap Açma Talebi <span>Gönderilmiş</span></a>
        @else
        <a id='hesapac' style='text-decoration: none; cursor:pointer; padding:3%;background-color:red;border-radius:10rem;color:white'>Hesap Açma Talebi gönder</a>
        @endif

    </div>

    <script>
        document.getElementById('hesapac').addEventListener('click', function() {
            let cevap = confirm('Hesap Açma talebi göndermek istediğinize emin misiniz ? ');
            if (cevap == true) {
                alert('Hesap açma talebiniz başarılı bir şekilde alınmıştır.');
                window.location.href = '/freeze-user?userId={{$userId}}';
            }
        });
    </script>
</body>

</html>