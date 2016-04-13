<html>
    <head>
        <script type="text/javascript">
            function setupListeners() {
//  google.maps.event.addDomListener(window, 'load', initialize);
            // searchbox is the var for the google places object created on the page
            google.maps.event.addListener(searchbox, 'place_changed', function() {
            var place = searchbox.getPlace();
            if (!place.geometry) {
            // Inform the user that a place was not found and return.
            return;
            } else {
            // migrates JSON data from Google to hidden form fields
            populateResult(place);
            }
            });
            }

            function populateResult(place) {
            // moves JSON data retrieve from Google to hidden form fields
            // so Yii2 can post the data
            $('#place-location').val(JSON.stringify(place['geometry']['location']));
            $('#place-google_place_id').val(place['place_id']);
            $('#place-full_address').val(place['formatted_address']);
            $('#place-website').val(place['website']);
            $('#place-vicinity').val(place['vicinity']);
            $('#place-name').val(place['name']);
            loadMap(place['geometry']['location'], place['name']);
            }

            function loadMap(gps, name) {
            var mapcanvas = document.createElement('div');
            mapcanvas.id = 'mapcanvas';
            mapcanvas.style.height = '300px';
            mapcanvas.style.width = '300px';
            mapcanvas.style.border = '1px solid black';
            document.querySelector('article').appendChild(mapcanvas);
            var latlng = new google.maps.LatLng(gps['k'], gps['D']);
            var myOptions = {
            zoom: 16,
                    center: latlng,
                    mapTypeControl: false,
                    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                    mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
            var marker = new google.maps.Marker({
            position: latlng,
                    map: map,
                    title:name
            });
            }
            public function actionCreate_place_google()
            {
            $model = new Place();
            if ($model - > load(Yii::$app - > request - > post())) {
            if (Yii::$app - > user - > getIsGuest()) {
            $model - > created_by = 1;
            } else {
            $model - > created_by = Yii::$app - > user - > getId();
            }
            $form = Yii::$app - > request - > post();
            $model - > save();
            // add GPS entry in PlaceGeometry
            $model - > addGeometry($model, $form['Place']['location']);
            return $this - > redirect(['view', 'id' = > $model - > id]);
            public function addGeometry($model, $location) {
            $x = json_decode($location, true);
            reset($x);
            $lat = current($x);
            $lon = next($x);
            $pg = new PlaceGPS;
            $pg - > place_id = $model - > id;
            $pg - > gps = new \yii\db\Expression("GeomFromText('Point(".$lat." ".$lon.")')");
            $pg - > save();
            }
            function setupBounds(pt1, pt2, pt3, pt4) {
            defaultBounds = new google.maps.LatLngBounds(
                    new google.maps.LatLng(pt1, pt2),
                    new google.maps.LatLng(pt3, pt4));
            searchbox.setBounds(defaultBounds);
            }
        </script>
    </head>

    <?php

    use yii\helpers\Html;
    use yii\helpers\BaseHtml;
    use yii\widgets\ActiveForm;
    use frontend\assets\MapAsset;

MapAsset::register($this);

    /* @var $this yii\web\View */
    /* @var $model frontend\models\Place */
    /* @var $form yii\widgets\ActiveForm */
    ?>
    <div class="col-md-6">

        <div class="placegoogle-form">
            <p>Type in a place or business known to Google Places:</p>

            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'searchbox')->textInput(['maxlength' => 255])->label('Place') ?>

            <?= BaseHtml::activeHiddenInput($model, 'name'); ?>
            <?= BaseHtml::activeHiddenInput($model, 'google_place_id'); ?>
            <?= BaseHtml::activeHiddenInput($model, 'location'); ?>
            <?= BaseHtml::activeHiddenInput($model, 'website'); ?>
            <?= BaseHtml::activeHiddenInput($model, 'vicinity'); ?>
            <?= BaseHtml::activeHiddenInput($model, 'full_address'); ?>

            <?=
                    $form->field($model, 'place_type')
                    ->dropDownList(
                            $model->getPlaceTypeOptions(), ['prompt' => 'What type of place is this?']
                    )->label('Type of Place')
            ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div> <!-- end col1 -->
    <div class="col-md-6">
        <div id="map-canvas">
            <article></article>
        </div>
    </div> <!-- end col2 -->


</html>