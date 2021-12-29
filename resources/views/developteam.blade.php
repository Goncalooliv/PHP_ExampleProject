@extends('home')
<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1 text-center"><strong>Development Team</strong></h5>
        <div class="row">
            <!-- Team member -->
            <div class="col">

                <div class="card" style="height: 35em;">
                    <div class="card-body text-center">
                        <p><img class=" img-fluid rounded" width="150" src="{{URL::to('Baga.png')}}" alt="card image"></p>
                        <h4 class="card-title">Baguetão</h4>
                        <p class="card-text">Sacou uma dama com este chapéu</p>
                        <p class="card-text">38600</p>
                        <a href="https://github.com/diogosilv" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                    </div>
                </div>

            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col">

                <div class="card" style="height: 35em;">
                    <div class="card-body text-center">
                        <p><img class=" img-fluid rounded" width="150" src="{{URL::to('face1.jpg')}}" alt="card image"></p>
                        <h4 class="card-title">Global</h4>
                        <p class="card-text">فانبوي ليبرون</p>
                        <p class="card-text">38237</p>
                        <a href="https://www.linkedin.com/in/ruben-machado-9929641a9/" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                    </div>
                </div>

            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>
<!-- Team -->