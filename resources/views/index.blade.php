<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    </head>
    <body>
        <section class="wrapper" id="nid">
            <header>
                <nav class="navbar navbar-default navbar-static-top">
                    <section class="container-fluid">
                        <section id="navbar">
                            <ul class="nav navbar-nav">
                                <a class="navbar-brand" href="/">NoteItDown</a>
                            </ul>                        
                            <div class="col-sm-3 col-md-3">
                                <form class="navbar-form" role="search" action="javascript:void(0);">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Pesquisar" @input="update">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        
                                    </div>
                                </form>
                            </div>
                        </section>
                    </section>                
                </nav>            
            </header>
            <article>
                <section class="container-fluid">
                    <section class="row">
                        <todos v-bind:todos="todos"></todos>                        
                    </section>
                </section>            
            </article>
            <footer>            
            </footer>
        </section>
            
        <script src="https://cdn.jsdelivr.net/lodash/4.17.4/lodash.min.js"></script>
        <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.4"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
        <script>            
            let app = new Vue({
                el: '#nid',
                data: {
                    query: '',
                    todos: [],
                },
                watch: {
                    query: function(val) {                        
                        this.getTodos(val);
                    }
                },
                created: function() {
                    this.getTodos('');
                },
                methods: {
                    getTodos: function(query) {                        
                        this.$http.get('/api/todo?q=' + query).then(
                            function(response) {
                                this.todos = response.data;                                
                            },
                            function(err) {
                                console.log(err);
                            }
                        );
                    },
                    update: _.debounce(function (e) {
                        this.query = e.target.value
                    }, 300)
                }
            });
        </script>
    </body>    
</html>
