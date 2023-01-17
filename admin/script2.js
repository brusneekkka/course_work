function get_menu(){
    fetch('/course_work/list_menu.php')
        .then(response => response.json())
        .then(data => {
            if (!data.status) {
                console.log(data);
                return;
            }
            createMenuCard(data.data);
        })
        .catch(error => {
            console.log(error);
        });
}


function createMenuCard(arr){
    const obj = document.getElementById('17');
    arr.forEach(item => {
        const new_col = document.createElement('div');
        new_col.setAttribute('class', 'col');
        new_col.setAttribute('id', 'col-'+item.id);
        let a = 0;
        new_col.innerHTML=`
                        <div class="card shadow-sm">
                            <img id="adres_img${item.id}" src="${item.img}" style ="display: block;margin-left: auto;margin-right: auto; width:200px; height:200px" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 id="adres_name${item.id}" class="card-text">${item.type}</h5>
                              <p  id="adres_descr${item.id}" class="card-title">${item.descr}</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  
                                  

                                  <button onclick="edit(${item.id})" type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  Изменить
                                    </button>

                                    <!-- Модальное окно -->


                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Блюдо</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                          </div>
                                          <div id="orderss" class="modal-body">

                                            <p> 
                                                <div class="input-group mb-3">
                                                <input id="iname" type="text" class="form-control" placeholder="Новое наименование">
                                                <button id="name" class="btn btn-outline-secondary" type="button">Изменить</button>
                                                </div>
                                            </p>
                                            <p>
                                                <div class="input-group mb-3">
                                                <input id="idescr" type="text" class="form-control" placeholder="Новое Описание">
                                                <button id="descr" class="btn btn-outline-secondary" type="button">Изменить</button>
                                                </div>
                                            </p>
                                            <p>
                                                <div class="input-group mb-3">
                                                <input id="iprice" type="text" class="form-control" placeholder="Новая цена">
                                                <button id="price" class="btn btn-outline-secondary" type="button">Изменить</button>
                                                </div>
                                            </p>

                                            <p>
                                                <div class="input-group mb-3">
                                                <input id="iimg" type="text" class="form-control" placeholder="Новая ссылка на картинку">
                                                <button id="img" class="btn btn-outline-secondary" type="button">Изменить</button>
                                                </div>
                                            </p>

                                            <p><button id="delete" type="button" class="btn btn-danger">Удалить Блюдо</button></p>

                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>


                                </div>
                                <small id="adres_price${item.id}" class="text-muted">${item.price}</small>
                              </div>
                            </div>
                          </div>`
                        obj.appendChild(new_col);
                        id = item.id + 1;            
    });
    
}

get_menu();



function add_eat(id){
    let add_eat = document.getElementById('add_eat');
    let iname = document.getElementById('iname1');
    let idescr = document.getElementById('idescr1');
    let iimg = document.getElementById('iimg1');
    let iprice = document.getElementById('iprice1');
    const obj = document.getElementById('17');
    add_eat.addEventListener('click', (e) => {
        e.preventDefault();
        fetch('/course_work/admin/insert_to_menu.php?type='+iname.value+'&img='+iimg.value+'&descr='+idescr.value+'cookie&price='+iprice.value)
        .then(response => response.json())
        .then(data => {
            if (!data.status) {
                console.log(data);
                return;
            }
            ad_price.innerHTML=`${iprice.value}`;
        })
        .catch(error => {
            console.log(error);
        });
        const new_col = document.createElement('div');
        new_col.setAttribute('class', 'col');
        new_col.setAttribute('id', 'col-'+id);
        let a = 0;
        new_col.innerHTML=`
                        <div class="card shadow-sm">
                            <img id="adres_img${id}" src="${iimg.value}" style ="display: block;margin-left: auto;margin-right: auto; width:200px; height:200px" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 id="adres_name${id}" class="card-text">${iname.value}</h5>
                              <p  id="adres_descr${id}" class="card-title">${idescr.value}</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  
                                  

                                  <button onclick="" type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  Изменить
                                    </button>

                                    <!-- Модальное окно -->


                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Блюдо</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                          </div>
                                          <div id="orderss" class="modal-body">

                                            <p> 
                                                <div class="input-group mb-3">
                                                <input id="iname" type="text" class="form-control" placeholder="Новое наименование">
                                                <button id="name" class="btn btn-outline-secondary" type="button">Изменить</button>
                                                </div>
                                            </p>
                                            <p>
                                                <div class="input-group mb-3">
                                                <input id="idescr" type="text" class="form-control" placeholder="Новое Описание">
                                                <button id="descr" class="btn btn-outline-secondary" type="button">Изменить</button>
                                                </div>
                                            </p>
                                            <p>
                                                <div class="input-group mb-3">
                                                <input id="iprice" type="text" class="form-control" placeholder="Новая цена">
                                                <button id="price" class="btn btn-outline-secondary" type="button">Изменить</button>
                                                </div>
                                            </p>

                                            <p>
                                                <div class="input-group mb-3">
                                                <input id="iimg" type="text" class="form-control" placeholder="Новая ссылка на картинку">
                                                <button id="img" class="btn btn-outline-secondary" type="button">Изменить</button>
                                                </div>

                                        
                                            </p>

                                            <p><button id="delete" type="button" class="btn btn-danger">Удалить Блюдо</button></p>

                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>


                                </div>
                                <small id="adres_price${id}" class="text-muted">${iprice.value}</small>
                              </div>
                            </div>
                          </div>`
                        obj.appendChild(new_col);
                        id++;            
    

});

}

let id = 100;
let adding = document.getElementById('adding');
adding.addEventListener('click', (e) => {add_eat(id)});

function edit(id){


    let name = document.getElementById('name');
    let iname = document.getElementById('iname');

    let descr = document.getElementById('descr');
    let idescr = document.getElementById('idescr');

    let img = document.getElementById('img');
    let iimg = document.getElementById('iimg');

    let price = document.getElementById('price');
    let iprice = document.getElementById('iprice');

    let del = document.getElementById('delete');

    price.addEventListener('click', (e) => {
        e.preventDefault();
        fetch('/course_work/admin/update_menu.php?column=price&value='+iprice.value+'&id='+id)
        .then(response => response.json())
        .then(data => {
            if (!data.status) {
                console.log(data);
                return;
            }
            let ad_price = document.getElementById('adres_price'+id);
            ad_price.innerHTML=`${iprice.value}`;
        })
        .catch(error => {
            console.log(error);
        });

});
    name.addEventListener('click', (e) => {
        e.preventDefault();
        fetch('/course_work/admin/update_menu.php?column=type&value='+iname.value+'&id='+id)
        .then(response => response.json())
        .then(data => {
            if (!data.status) {
                console.log(data);
                return;
            }
            let ad_name = document.getElementById('adres_name'+id);
            ad_name.innerHTML=`${iname.value}`;
        })
        .catch(error => {
            console.log(error);
        });

});
    img.addEventListener('click', (e) => {
        e.preventDefault();
        fetch('/course_work/admin/update_menu.php?column=img&value='+iimg.value+'&id='+id)
        .then(response => response.json())
        .then(data => {
            if (!data.status) {
                console.log(data);
                return;
            }
            let ad_img = document.getElementById('adres_img'+id);
            ad_img.setAttribute('src', iimg.value);
        })
        .catch(error => {
            console.log(error);
        });

});
    descr.addEventListener('click', (e) => {
        e.preventDefault();
        fetch('/course_work/admin/update_menu.php?column=descr&value='+idescr.value+'&id='+id)
        .then(response => response.json())
        .then(data => {
            if (!data.status) {
                console.log(data);
                return;
            }
            let ad_descr = document.getElementById('adres_descr'+id);
            ad_descr.innerHTML=`${idescr.value}`;
        })
        .catch(error => {
            console.log(error);
        });


});
    del.addEventListener('click', (e) => {
        e.preventDefault();
        fetch('/course_work/admin/delete_menu.php?id='+id)
        .then(response => response.json())
        .then(data => {
            if (!data.status) {
                console.log(data);
                return;
            }
            const element = document.getElementById('col-'+id); 
            element.remove();
        })
        .catch(error => {
            console.log(error);
        });


});
    //descr.addEventListener('click', fetch('/course_work/admin/update_menu.php?column=type&value='+price.val+'&id='+id));
    //img.addEventListener('click', fetch('/course_work/admin/update_menu.php?column=type&value='+img.val+'&id='+id));
    //del.addEventListener('click', fetch('/course_work/admin/delete_menu.php?id='+id));
    //name.addEventListener('click', fetch('/course_work/admin/update_menu.php?column=type&value='+iname.val+'&id='+id));

}

