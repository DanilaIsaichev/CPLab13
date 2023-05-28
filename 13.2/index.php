<html>
<head>
    <title>Работа с логом</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="functions.js"></script>
</head>
<body>
    <div class="container-fluid">
      <p><h1>Работа с логом</h1></p>
        <p><h3>Форма для заполнения</h3></p>
        <form id="msg-form" method="post">
            <div class="mb-3">
            <label for="message" class="form-label">Сообщение</label>
            <input type="text" id="message" class="form-control" name="message" required>
            </div>
            <button type="submit" class="btn btn-primary">Отправить сообщение</button>
        </form>
        <h3>Сообщения</h3>
        <div id="messages"></div>
    </div>
</body>
</html>