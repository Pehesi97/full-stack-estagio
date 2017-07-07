let todos = Vue.component('todos', {
    props: ['todos'],
    template:   '<section class="todos" v-if="todos.length > 0"> \
                    <todo v-for="todo in todos" v-bind:title="todo.title" v-bind:tasks="todo.tasks" v-bind:key="todo.id"> \
                    </todo> \
                </section>',
});

let todo = Vue.component('todo', {
    props: ['title', 'tasks'],
    template:   '<section class="col-md-4"> \
                    <section class="panel panel-default" v-bind:class="{ \'panel-success\': allTasksCompleted }"> \
                        <section class="panel-heading">{{ title }}</section> \
                            <section class="panel-body"> \
                                <ul> \
                                    <li v-for="task in orderedTasks"> \
                                        <input v-model="task.done" type="checkbox"> </input><span v-bind:class="{ \'text-success risked\': task.done }">{{ task.title }}</span> \
                                    </li> \
                                </ul> \
                            </section> \
                        </section> \
                    </section> \
                </section>',
    computed: {
        orderedTasks: function() {
            return _.orderBy(this.tasks, 'done');
        },
        allTasksCompleted: function() {
            let all = true, i = 0;
            for(; i < this.tasks.length; i++) {
                if(!this.tasks[i].done) {
                    all = false;                    
                    break;
                }
            }
            return all;
        }
    }
});