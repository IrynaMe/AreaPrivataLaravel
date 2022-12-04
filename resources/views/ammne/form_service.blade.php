<h3 style="text-align:center">Insert a new Service</h3>
{{-- per gestire immagini mettiamo type enctype="multipart/form-data" --}}
<form action="{{ url('/saveService') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Service name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" required="">
            </div>
        </div>
        <div class=" row">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="ckeditor" id="editor1" name="editor1" rows="3" required="">
                </textarea>
                <script>
                    CKEDITOR.replace('editor1');
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="prezzo"
                        required="">
                </div>
            </div>
            {{--  <div class="col-sm">
                               <div class="mb-3">

                    <label for="exampleFormControlInput1" class="form-label">Sconto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="sconto"
                        required="">
                </div> 
            </div> --}}
        </div>

        {{--  <div class="row">
        <div class="col-sm-12 col-md-12">
                        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                <select name="categoria">
                    <option value="1">Vegetali</option>
                    <option value="2">Beveraggi</option>
                    <option value="3">Frutta</option>
                    <option value="5">Aperitivi</option>
                    <option value="6">Dolci</option>
                    <option value="8">Pane</option>
                </select>
            </div> 
        </div> --}}
        <div class="row">
            <div class="col-sm">
                <div class="mb-3 insertImg">


                    <label for="exampleFormControlInput1" class="form-label">Insert image</label>
                    <input name="uploadfile" id="uploadfile" type="file" class="form-control form-control-sm"
                        aria-describedby="upload" required="">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="Inserisci">Submit</button>
        <div style="text-align:center; font-size:22px">

        </div>

    </div>

</form>
