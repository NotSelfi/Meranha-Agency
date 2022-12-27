<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="autocompleteBS/css/autocompleteBS.css" />
    <script src="autocompleteBS/js/autocompleteBS.js"></script>
    <link rel='stylesheet' href='css/menu.css'>
    <style>
    #slogan{
      padding-left: 30px;
    }
    #all_rech{
      padding-left: 60px;
    }
    #serv_list{
      padding-left: 90px;
    }
    #lancer_rech{
      display: flex;
      justify-content: flex-end;
    }
    .vl {
      border-left: 1px solid #bbb;
      height: 30px;
  }
  </style>
    <title></title>
  </head>
  <body>
    <div class="d-flex flex-row" >
        <?php include 'menu.php'; ?>
        <div class=" flex-column col-10">
          <h1 id='slogan' >INSERT SLOGAN ...</h1>
          <hr class="solid">
          <div class=""  id='all_rech'>
          <div class=" d-flex flex-row col-6 gap-5" id='recherche'>

            <select  class="form-select" aria-label="Default select example">

              <option selected>Vous cherchez ...</option>
              <option value="1">Un mannequin</option>
              <option value="2">Un photographes</option>
              <option value="3">Un lieu</option>
            </select>

                <input type="text" class="form-control" placeholder="Région" id="inputText">
          </div>
              <br>
                <button type='button' class='btn btn-secondary btn-block' id='lancer_rech'>Rechercher</button>
          <div class="d-flex flex-row gap-4" id='serv_list'>
            <p>Service :  </p>

          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Gratuit
            <label class="form-check-label" for="radio1"></label>
          </div>
          <div class="vl"></div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Payant
            <label class="form-check-label" for="radio2"></label>
          </div>
          <div class="vl"></div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">Rémunéré
            <label class="form-check-label" for="radio3"></label>
          </div>

        </div>
        </div>
          <hr class="solid">
        </div>
    </div>
      <script type="text/javascript">
      autocompleteBS({
          name: 'Select A Country by Name',
          inputSource: document.getElementById('inputText'),
          fetchURL: 'https://restcountries.eu/rest/v2/capital/{term}',
          fetchMap: {
            id: "alpha2Code",
            name: "name"
          }
          autocompleteBS({
            minLength: 2
          });
          autocompleteBS({
            maxResults: 10
          });
          });
      </script>
  </body>
</html>
