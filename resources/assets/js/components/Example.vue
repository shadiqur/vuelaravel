<template>
    <div class="container">
        <input type="text" v-model="todo.fname" placeholder="First Name">
        <input type="text" v-model="todo.lname" placeholder="Last name">
        <input type="text" v-model="todo.phone" placeholder="Phone">
        <input type="text" v-model="todo.address" placeholder="Address">
        <button @click="AlertName">click me</button>
        <button @click="save">Save</button>
        <!--<button @click="deleteme">delete me</button>-->

        <table border="1">
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
            <tr v-for="todos in todoall">
                <td>{{todos.fname}}</td>
                <td>{{todos.lname}}</td>
                <td>{{todos.phone}}</td>
                <td>{{todos.address}}</td>
            </tr>
        </table>
        <!--<ol>-->
        <!--<li v-for="todos in todoall"   >-->
        <!--{{todos.fname}}-->
        <!--</li>-->
        <!--</ol>-->
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

            },

          save:function () {
              var self = this;
//                this.todos.push('OMG');
//
//              axios.post('meg', self.name, {headers: {
//                  'Content-type': 'application/x-www-form-urlencoded',
//              }}).then(r => console.log('r: ', JSON.stringify(r, null, 2)));
//
//              this.fetchComment('meg');

              axios.post('meg', self.todoall).then(function (response) {
                  //window.location = 'homepage';
                  console.log(response.data);
              });
              //this.submitted = true;

          },
//          deleteme:function () {
//              this.todos.pop();
//          }
//
//            }

        }
        }
</script>
