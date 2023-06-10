var todo = document.getElementById('add-todo');
var todos = document.getElementById('todos');
console.log(todos)
var form = document.querySelector('form');
var input = document.querySelector('input');
var button = document.querySelector('button');


form.addEventListener('submit',function(e){
    e.preventDefault();
    let val = input.value.trim();
    if(val){
        addTodo({
            text:val,
            // status:'completed'
        })
    }
    input.value = ''
})

function addTodo(param) {
    var li = document.createElement('li')
    li.innerHTML=`
        <span>${param.text}</span>

    `
    if (param.status === 'completed') {
        li.setAttribute('class','complete')
    }

    li.addEventListener('click',function(){
        this.classList.toggle('completed')
    })
    todos.appendChild(li)

}