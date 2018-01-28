@extends('layouts.app')
@section('content')

<section class="mbr-section content7 cid-qHYoTRYeS4" id="content7-1" data-rv-view="74">
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8" id="vue">
                <div class="media-container-row" v-for="recurso in recursos">
                    <div class="media-content" >
                        <div class="mbr-section-text" >
                            <p class="mbr-text align-right mb-0 mbr-fonts-style display-7">
                               <br><strong>@{{recurso.nombre}}</strong><br>
                                @{{recurso.descripcion}}
                            </p>
                        </div>
                    </div>
                    <div class="mbr-figure" style="width: 105%;">
                     <img :src="'imagenes/'+recurso.imagen" alt="imagen" media-simple="true">
                   </div>
                </div>
                <br><br><br>
                <nav>
              			<ul class="pagination">
              				<li v-if="pagination.current_page > 1">
              					<a href="#" @click.prevent="changePage(pagination.current_page - 1)">
              						<span>Atras</span>
              					</a>
              				</li>
                      -
              				<li v-if="pagination.current_page < pagination.last_page">
              					<a href="#" @click.prevent="changePage(pagination.current_page + 1)">
              						<span>Siguiente</span>
              					</a>
              				</li>
              			</ul>
		           </nav>
            </div>
        </div>
    </div>
</section>
<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
	var app = new Vue({
  el: '#vue',
  data: {
		recursos: [],
    pagination: {
			'total': 0,
            'current_page': 0,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
		},
    offset: 2,
		errors: []
  },
  computed: {
		isActived: function() {
			return this.pagination.current_page;
		},
		pagesNumber: function() {
			if(!this.pagination.to){
				return [];
			}

			var from = this.pagination.current_page - this.offset;
			if(from < 1){
				from = 1;
			}

			var to = from + (this.offset * 2);
			if(to >= this.pagination.last_page){
				to = this.pagination.last_page;
			}

			var pagesArray = [];
			while(from <= to){
				pagesArray.push(from);
				from++;
			}
			return pagesArray;
		}
	},
  created: function() {
  		this.sources();
  },
  methods: {
		sources: function(page) {
			var url = '/api/mostrar_recursos?page='+page;
			axios.get(url).then(response => {
				this.recursos = response.data.recursos.data;
				this.pagination = response.data.pagination;
			});
		},
    changePage: function(page) {
			this.pagination.current_page = page;
			this.sources(page);
		}
  }
});
</script>
@endsection
