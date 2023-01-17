<!DOCTYPE html>
<html lang="ru">
<head>
    <script src="script2.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--
    <link href="../styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style_catalog.css">
-->    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бургерс & Кукис</title>
</head>



<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Админ Панель</h1>
        <p>
                                     <button id="adding" type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Добавить Блюдо</button>
                                    <button onClick='location.href="/course_work/auth/login.php"' type="button" class="btn btn-danger">Выйти</button>
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Блюдо</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                          </div>
                                          <div id="orderss1" class="modal-body">
                                            <p> 
                                                <div class="input-group mb-3">
                                                <input id="iname1" type="text" class="form-control" placeholder="Новое наименование">
                                                </div>
                                            </p>
                                            <p>
                                                <div class="input-group mb-3">
                                                <input id="idescr1" type="text" class="form-control" placeholder="Новое Описание">
                                                </div>
                                            </p>
                                            <p>
                                                <div class="input-group mb-3">
                                                <input id="iprice1" type="text" class="form-control" placeholder="Новая цена">
                                                </div>
                                            </p>
                                            <p>
                                                <div class="input-group">
                                                <input id="iimg1" type="text" class="form-control" placeholder="Новая ссылка на картинку">  
                                                </div>
                                            </p>
                                            <p><button id="add_eat" type="button" class="btn btn-success">Добавить Блюдо</button></p>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>
</html>
