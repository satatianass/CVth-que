@extends('layouts.app')

@section('content')

<div class="container" id="app">
    <div class="row">
        <div class="col-md-12">

            <h1>@{{ message }}</h1>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h3 class="card-title">Experience</h3></div>
                        <div class="mb-2">
                            <div class="btn btn-success">Ajouter</div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item" v-for="experience in experiences">
                            <div class="float-end">
                                <button class="btn btn-warning btn-sm">Editer</button>
                            </div>
                            <h3>@{{ experience.titre }}</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam laborum nam odit voluptas
                                 deleniti sunt consequuntur, aperiam quae nemo pariatur mollitia tenetur iste recusandae, sint,
                                 blanditiis sequi id. Rem eius aliquid facilis, tenetur vero veniam ad consectetur incidunt odit!
                                  Atque animi quas ipsa voluptatem expedita. Accusantium aliquid alias voluptatibus aperiam.</p>
                                  <small>12/03/2016 - 12/03/2016</small>
                            </li>


                                <li class="list-group-item">
                                    <div class="float-end">
                                        <button class="btn btn-warning btn-sm">Editer</button>
                                    </div>
                                    <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam laborum nam odit voluptas
                                         deleniti sunt consequuntur, aperiam quae nemo pariatur mollitia tenetur iste recusandae, sint,
                                         blanditiis sequi id. Rem eius aliquid facilis, tenetur vero veniam ad consectetur incidunt odit!
                                          Atque animi quas ipsa voluptatem expedita. Accusantium aliquid alias voluptatibus aperiam.</p>
                                          <small>12/03/2016 - 12/03/2016</small>
                                    </li>
                        </ul>
                </div>
            </div>

            <hr>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h3 class="card-title">Formation</h3></div>
                        <div class="mb-2">
                            <div class="btn btn-success">Ajouter</div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa,
                     dolores quod. Ad, non! Qui laboriosam totam asperiores sunt nam aliquid eos illo?
                     Sapiente eum autem dolore, reiciendis veritatis facere perspiciatis.
                </div>
            </div>

            <hr>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h3 class="card-title">Portfolio</h3></div>
                        <div class="mb-2">
                            <div class="btn btn-success">Ajouter</div>
                        </div>
                    </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa,
                     dolores quod. Ad, non! Qui laboriosam totam asperiores sunt nam aliquid eos illo?
                     Sapiente eum autem dolore, reiciendis veritatis facere perspiciatis.
                </div>
            </div>


            <hr>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h3 class="card-title">Competence</h3></div>
                        <div class="mb-2">
                            <div class="btn btn-success">Ajouter</div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa,
                     dolores quod. Ad, non! Qui laboriosam totam asperiores sunt nam aliquid eos illo?
                     Sapiente eum autem dolore, reiciendis veritatis facere perspiciatis.
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('javascript')

<script src="{{ asset('js/vue.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Je suis Anass SATATI',
            experiences: []
        },
        methods: {
            getExperiences: function() {
                axios.post('http://localhost:8000/getexperiences')
                .then(response => {
                    this.experiences = data.data;
                })
                .catch(error => {
                    console.log(error);
                });
            }
        },
        mounted:function(){
            this.getExperiences();
        },
        g
    });

</script>

@endsection

