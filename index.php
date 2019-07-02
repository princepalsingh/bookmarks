<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/3677d60366.js"></script>
        <title>Bookmarks</title>
        <style>
            body{
                background-image: url('atmosphere-clouds-evening-2499416.jpg')
            }
            .cursor-pointer{
                cursor:pointer;
            }
            .fixed-height{
                height:100px;
            }
        </style>
    </head>
    <body>
        <div class="container" id="app">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="text-white ">Bookmarks</h1>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 cursor-pointer fixed-height border border-white rounded" @click="addBookmark">
                            <div class="text-white d-flex justify-content-center align-items-center h-100">
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script>
            var app = new Vue({
                el: '#app',
                data: {
                    message: 'Hello Vue!'
                },
                methods:{
                    addBookmark : function(){
                        alert('this is lit');
                    }
                }
            })
        </script>
    </body>
</html>