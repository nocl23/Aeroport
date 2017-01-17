<?php
include('vue/haut.inc.php');
?>
      <div class="row recherche">
        <div class="col-md-6 title-combobox">
          <p>
            Votre aéroport de départ
          </p>
          <select>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select>
        </div>
        <div class="col-md-6 title-combobox">
          <p>
            Votre aéroport de destination
          </p>
          <select>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select>
        </div>
      </div>
      <div class="row go">
        <a href="resultats.php">GO!</a>
      </div>
    </div>
  </body>
</html>
