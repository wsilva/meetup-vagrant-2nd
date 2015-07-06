<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .title, .foto, .likebutton, .server
    {
        text-align: center;
    }

    .server
    {
        color: #CCC;
        border-top: 1px solid #CCC;
        margin-top: 20px;
        padding-top: 10px;
    }
    </style>
    <meta charset="UTF-8">
    <title>Meetup</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">
            <h1>Relaxa papai, final de semana é nóis...</h1>
            </div>
            <div class="foto"><img src="/images/helena.jpg" alt=""></div>
            <div class="likebutton">
                {{ $curtidas }} curtida(s)
                <br>
                <a href="/meetup/curtir">Curtir</a>
            </div>
            <div class="server">
                Servidor: {{ $container }} <br>IP: {{ $serverip }})
            </div>
        </div>
    </div>
</body>
</html>