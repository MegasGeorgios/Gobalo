@extends('layouts.app')
@section('content')
<section class="mbr-section form3 cid-qHYqnjwQiF" id="form3-3" data-rv-view="78">
  <div class="container" >
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">
                    REGISTRA UN RECURSO!
                </h2>

            </div>
        </div>

        <div class="row py-2 justify-content-center" id="vue">
            <div class="col-12 col-lg-6  col-md-8 " >
              <div class="alert alert-danger" role="alert" v-if="status === 'error'">
                      <br><br><br><h3>@{{mensaje}}</h3><br><br><br>
              </div>
                <div class="alert alert-success" role="alert" v-else-if="status === 'ok'">
                        <br><br><br><h3>@{{mensaje}}</h3><br><br><br>
                </div>
                <div id="oculto2">
                  <div class="mbr-subscribe input-group">
                      <input class="form-control" type="text" name="nombre" v-model="nombre" placeholder="NOMBRE" >
                  </div>
                  <div class="mbr-subscribe input-group">
                    <textarea class="form-control" name="descripcion" v-model="descripcion" rows="8" cols="80" placeholder="DESCRIPCION" ></textarea>
                  </div>
                  <div class="mbr-subscribe input-group">
                    <input type="file" class="btn btn-primary display-6"  v-on:change="onFileChange">
                  </div><br><br>

                  <button class="btn btn-primary pull-right"  v-on:click="add()">Guardar</button>

                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
new Vue({
    el: '#vue',
    data: {
        nombre: '',
        descripcion: '',
        image: '',
        mensaje: '',
        status: ''
    },
    methods: {
      onFileChange(e) {
          let files = e.target.files || e.dataTransfer.files;
          if (!files.length)
              return;
          this.createImage(files[0]);
        },
        createImage(file) {
          let reader = new FileReader();
          let vm = this;
          reader.onload = (e) => {
              vm.image = e.target.result;
          };
          reader.readAsDataURL(file);
        },
        add() {
          axios.post('/api/guardar_recurso', {
              nombre: this.nombre,
              descripcion: this.descripcion,
              image: this.image
          }).then(response => {
              this.mensaje = response.data.mensaje;
              this.status = response.data.status;
              if (this.status == 'ok') {
                document.getElementById('oculto2').style.display = 'none';
              }
          });
        }
    }
});
</script>
@endsection
