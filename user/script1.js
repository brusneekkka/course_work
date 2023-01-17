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
				            <img src="${item.img}" style ="display: block;margin-left: auto;margin-right: auto; width:200px; height:200px" class="card-img-top" alt="">
				            <div id="number+${item.id}">${a}</div>
				            <div class="card-body">
				              <h5 class="card-text">${item.type}</h5>
				              <p class="card-title">${item.descr}</p>
				              <div class="d-flex justify-content-between align-items-center">
				                <div class="btn-group">
				                  <button type="button" onclick="add_to_list(${item.id})" class="btn btn-sm btn-outline-secondary">Добавить</button>
				                  <button type="button" onclick="remove_from_list(${item.id})" class="btn btn-sm btn-outline-secondary">Убрать</button>
				                </div>
				                <small class="text-muted">${item.price}</small>
				              </div>
				            </div>
				          </div>`
				        obj.appendChild(new_col);            
	});
}

get_menu();

list_order();
let lists = document.getElementById('yyy');
lists.addEventListener('click', (e) => {list_order()});

function list_order(){
	let name = document.getElementById('order_getter');
	let text = name.getAttribute('value');
	fetch('/course_work/user/list_order.php?name='+text)
		.then(response => response.json())
		.then(data => {
			if (!data.status) {
                console.log(data);
                return;
            }
            create_order(data.data)
		})
		.catch(error => {
            	console.log(error);
        	});
}		

function create_order(arr){
	const obj = document.getElementById('orderss');
	arr.forEach(item => {
		const new_ord = document.createElement('p');
		new_ord.innerHTML=`
							Номер заказа: ${item}
						`;
				        obj.appendChild(new_ord);            
	});
}

function add_to_list(id){
	let obj = document.getElementById('number+'+id);
	obj.innerHTML++;
}

function remove_from_list(id){
	let obj = document.getElementById('number+'+id);
	obj.innerHTML--;
}
