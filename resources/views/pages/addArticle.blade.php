<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-3">
        <h1 class="text-center">Добавление статьи</h1>
        <div class="col-sm-6 mx-auto">
            <form method="POST" action="/addArticle">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" placeholder="Заголовок">
                </div>
                <div class="mb-3">
                    <textarea name="article" class="form-control" placeholder="Статья"></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary form-control" value="Добавить статью">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>