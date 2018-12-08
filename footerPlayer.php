
    <footer class="page-footer cyan darken-2">
      <div class="container">
        <div class="row" id="DisplayPlayer">
          <?php include('php/database.fn.php');?>

          <div class="AudioRow valign-wrapper col l6 s12">
            <a class="btn-floating btn-large waves-effect waves-light" id="loop1" onclick="loop(audio1)"><i class="material-icons">loop</i></a>
            <figure class="col l12 s12">
                <figcaption>Nom btn</figcaption>
                <audio
                    id="audio1"
                    controls
                    src="#">
                        Your browser does not support the
                        <code>audio</code> element.
                </audio>
            </figure>
          </div>
          
        </div>
      </div>
    </footer>

