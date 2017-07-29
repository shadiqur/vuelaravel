<template>
    <div class="container">
        <input type="text" v-model="todo.fname" placeholder="First Name">
        <input type="text" v-model="todo.lname" placeholder="Last name">
        <input type="text" v-model="todo.phone" placeholder="Phone">
        <input type="text" v-model="todo.address" placeholder="Address">
        <button @click="AlertName">click me</button>
        <!--<button @click="addone">add me</button>-->
        <!--<button @click="deleteme">delete me</button>-->
        <ol>
        <li v-for="todos in todoall" v-text="todos"  >
        <!--{{todos.fname}}-->
        </li>
        </ol>
    </div>
</template>

<script>
    export default {
        data:function(){

            return{
                todo:{
                    fname:'',
                    lname:'',
                    phone:'',
                    address:''},
                todoall:[]

            }
        },
        methods: {
            AlertName: function () {
                this.todoall.push(this.todo) ;
                console.log(this.todoall.data);
                this.todo={
                    fname:'',
                    lname:'',
                    phone:'',
                    address:''
                }
//                for(var i=0;i<4;i++){
//                    console.log(this.name[i]);
//                }

                //this.todos=this.name;

//                this.todos.push(this.name);
//                var self = this;
//                axios.get('message')
//                    .then(function (response) {
////                        console.log(this.name);
//                            self.todos=response.data;
//
//
//                    })
//                    .catch(function (error) {
//                        console.log(error);
//                    });

            }

//          addone:function () {
//              var self = this;
////                this.todos.push('OMG');
//                    console.log(self.name);
////              axios.post('meg', self.name, {headers: {
////                  'Content-type': 'application/x-www-form-urlencoded',
////              }}).then(r => console.log('r: ', JSON.stringify(r, null, 2)));
////
////              this.fetchComment('meg');
//
//              axios.post('meg', self.name).then(function (response) {
//                  window.location = 'homepage';
//              });
//              //this.submitted = true;
//
//          },
//          deleteme:function () {
//              this.todos.pop();
//          }
//
//            }

        }
        }
</script>
