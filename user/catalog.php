<?php
        if(!isset($_COOKIE['name']))
        {
            header("Location: http://localhost/course_work/auth/login.php", true, 303);
        }
     ?>    
<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script1.js" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бургерс & Кукис</title>
</head>

<body wfd-invisible="true">
    <header>
  <div class="collapse bg-dark" id="navbarHeader" wfd-invisible="true">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h3 class="text-white">Как найти наш ресторан</h3>
        </div>
        <div class="col-sm-4 offset-md-1 py-5">
        <input id="order_getter"  required type="hidden" value="<?php echo $_COOKIE['name']?>" class="form-control" placeholder="Имя пользователя получателя" aria-label="Имя пользователя получателя" aria-describedby="button-addon2">
        </input>
          <ul class="list-unstyled">
            <p></p>
            <p></p>
          </ul>
          <button onClick='location.href="/course_work/auth/login.php"' type="button" class="btn btn-danger">Выйти</button>                    
        </div>
      </div>
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abd54a5b331481076be4b4af5bc27fd43c7e3e72e17e49dbd45dfbeef8c283def&amp;width=550&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img width="20" height="20" src="https://cdn3.iconfinder.com/data/icons/fast-food-22/34/9-1024.png"/>
        <strong>Бургерс & Кукис</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<main>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Добро пожаловать в наш ресторан!</h1>
        <p class="lead text-muted">Только лучшие бургеры и печенюшки!</p>
        <p>
            <div class="input-group mb-3">
              <button type="button" id="xxx" class="btn btn-primary">Заказать</button>
              <button type="button" id="yyy" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ваши заказы</button>
            </div>
          <script>
                let button = document.getElementById('xxx');
                let name = document.getElementById('order_getter');
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    fetch('/course_work/user/add_order.php?name='+name.value)
                    .then(response => response.json())
                    .then(data => {
                        if (!data.status) {
                            console.log(data);
                            return;
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    });

                });
          </script>
           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заказы</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                  </div>
                  <div id="orderss" class="modal-body">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  </div>
                </div>
              </div>
            </div>
        </p>
      </div>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div id="17" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      </div>
    </div>
  </div>
</main>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" wfd-invisible="true"></script>
</body>

</html>
