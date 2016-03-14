<?php
/**
 * Charts 4 PHP
 *
 * @author Shani <sup.2.0
 * @license: see license.txt included in package
 */
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
ini_set("display_errors", "off");
if (!empty($_POST["pngdata"])) {
    $data = $_POST["pngdata"];
    $V599dcce2998a6b40b1e38e8c6006cb = $_POST["imgtype"];
    $title = $_POST["imgtitle"];
    $title = str_replace(" ", "-", $title);
    $title = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).])", '', $title);
    $title = preg_replace("([\.]{2,})", '', $title);
    if ($V599dcce2998a6b40b1e38e8c6006cb == "pdf") {
        require_once('tcpdf/tcpdf.php');
        $V437175ba4191210ee004e1d937494d = new TCPDF("P", PDF_UNIT, "a4", true, 'UTF-8', true);
        $V437175ba4191210ee004e1d937494d->SetCreator('Charts 4 PHP');
        $V437175ba4191210ee004e1d937494d->SetAuthor('Charts 4 PHP');
        $V437175ba4191210ee004e1d937494d->SetTitle('Charts 4 PHP');
        $V437175ba4191210ee004e1d937494d->SetSubject('Charts 4 PHP');
        $V437175ba4191210ee004e1d937494d->SetKeywords('Charts 4 PHP');
        $V437175ba4191210ee004e1d937494d->setPrintHeader(false);
        $V437175ba4191210ee004e1d937494d->setPrintFooter(false);
        $V437175ba4191210ee004e1d937494d->AddPage();
        $V437175ba4191210ee004e1d937494d->setJPEGQuality(100);
        $V437175ba4191210ee004e1d937494d->setImageScale(2.3);
        $V0b3a630a84917a2a052f88c821efff = substr($data, strpos($data, ',') + 1);
        $Vfd258746d1156052b15847b5aa1fa8 = base64_decode($V0b3a630a84917a2a052f88c821efff);
        $V437175ba4191210ee004e1d937494d->Image('@' . $Vfd258746d1156052b15847b5aa1fa8);
        $V437175ba4191210ee004e1d937494d->Output("$title.pdf", 'D');
    } else {
        $V0b3a630a84917a2a052f88c821efff = substr($data, strpos($data, ',') + 1);
        header('Content-Type: image/$V599dcce2998a6b40b1e38e8c6006cb');
        header('Content-Disposition: attachment; filename="' . $title . '.' . $V599dcce2998a6b40b1e38e8c6006cb . '"');
        print(base64_decode($V0b3a630a84917a2a052f88c821efff));
    } die;
}

class chartphp {

    var $data;
    var $data_sql;
    var $title;
    var $xlabel;
    var $ylabel;
    var $Vf6d4126bfe77544af565648cf3b6e3;
    var $chart_type;
    var $width;
    var $height;
    var $V93da65a9fd0004d9477aeac024e08e;
    var $intervals;
    var $Vb2507468f95156358fa490fd543ad2;
    var $V211920e440078bb030670971a12993;
    var $direction;
    var $varyBarColor;

    function chartphp() {
        $this->width = "90%";
        $this->height = "90%";
        $this->chart_type = "line";
        $this->xlabel = "";
        $this->ylabel = "";
        $this->data_sql = "";
        $this->Vf6d4126bfe77544af565648cf3b6e3 = "";
        $this->title = "Chart Title";
        $this->color = "";
        $this->Vb2507468f95156358fa490fd543ad2 = true;
        $this->V211920e440078bb030670971a12993 = array();
        $this->direction = "";
        $this->V93da65a9fd0004d9477aeac024e08e = array();
    }

    function render($Vb80bb7740288fda1f201890375a60c) {
        ob_start();
        $V2ffe4e77325d9a7152f7086ea7aa51 = 0;
        $this->V93da65a9fd0004d9477aeac024e08e["title"]["text"] = $this->title;
        $this->V93da65a9fd0004d9477aeac024e08e["title"]["textColor"] = "black";
        $this->V93da65a9fd0004d9477aeac024e08e["title"]["fontFamily"] = "Arial,Helvetica,sans-serif";
        $this->V93da65a9fd0004d9477aeac024e08e["title"]["fontSize"] = "30px";
        $this->V93da65a9fd0004d9477aeac024e08e["seriesColors"] = array("#f8bd19", "#e44a00", "#008ee4", "#33bdda", "#6baa01", "#583e78", "#91D100", "#E1B700", "#FF76BC", "#00A3A3", "#FE7C22");
        $this->V93da65a9fd0004d9477aeac024e08e["animate"] = true;
        $this->V93da65a9fd0004d9477aeac024e08e["grid"]["backgroundColor"] = "black";
        $this->V93da65a9fd0004d9477aeac024e08e["grid"]["borderWidth"] = 0;
        $this->V93da65a9fd0004d9477aeac024e08e["grid"]["shadow"] = true;
        $this->V93da65a9fd0004d9477aeac024e08e["grid"]["borderColor"] = "#B3B3B3";
        $this->V93da65a9fd0004d9477aeac024e08e["grid"]["drawBorder"] = false;
        $this->V93da65a9fd0004d9477aeac024e08e["grid"]["drawGridlines"] = false;
        $this->V93da65a9fd0004d9477aeac024e08e["grid"]["gridLineColor"] = "#E8E8E8";
        $this->V93da65a9fd0004d9477aeac024e08e["legend"]["show"] = true;
        $this->V93da65a9fd0004d9477aeac024e08e["legend"]["textColor"] = "black";
        $this->V93da65a9fd0004d9477aeac024e08e["legend"]["fontFamily"] = "Arial";
        $this->V93da65a9fd0004d9477aeac024e08e["legend"]["placement"] = "outside";
        $this->V93da65a9fd0004d9477aeac024e08e["axesDefaults"]["labelRenderer"] = "$.jqplot.CanvasAxisLabelRenderer";
        $this->V93da65a9fd0004d9477aeac024e08e["axesDefaults"]["labelOptions"]["fontFamily"] = "Arial,Helvetica,sans-serif";
        $this->V93da65a9fd0004d9477aeac024e08e["axesDefaults"]["tickOptions"]["fontFamily"] = "Arial,Helvetica,sans-serif";
        $this->V93da65a9fd0004d9477aeac024e08e["axes"]["xaxis"]["label"] = $this->xlabel;
        $this->V93da65a9fd0004d9477aeac024e08e["axes"]["xaxis"]["tickRenderer"] = "$.jqplot.CanvasAxisTickRenderer";
        $this->V93da65a9fd0004d9477aeac024e08e["axes"]["xaxis"]["tickOptions"]["angle"] = 0;
        $this->V93da65a9fd0004d9477aeac024e08e["axes"]["xaxis"]["autoscale"] = true;
        $this->V93da65a9fd0004d9477aeac024e08e["axes"]["yaxis"]["label"] = $this->ylabel;
        $this->V93da65a9fd0004d9477aeac024e08e["axes"]["yaxis"]["tickRenderer"] = "$.jqplot.CanvasAxisTickRenderer";
        $this->V93da65a9fd0004d9477aeac024e08e["axes"]["yaxis"]["pad"] = 1.05;
        $this->V93da65a9fd0004d9477aeac024e08e["axes"]["yaxis"]["autoscale"] = true;
        $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["smooth"] = true;
        $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["animation"]["show"] = true;
        $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["animation"]["speed"] = 2500;

        if ($this->chart_type == "area") {
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["fillAlpha"] = 0.3;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["fill"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["fillAndStroke"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["axes"]["xaxis"]["renderer"] = "$.jqplot.CategoryAxisRenderer";
            $this->V93da65a9fd0004d9477aeac024e08e["highlighter"]["show"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["highlighter"]["sizeAdjust"] = 7.5;
        } else if ($this->chart_type == "bubble") {
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["renderer"] = "$.jqplot.BubbleRenderer";
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["shadow"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["shadowAlpha"] = 0.05;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["bubbleAlpha"] = 0.6;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["highlightAlpha"] = 0.8;
        } else if ($this->chart_type == "line") {
            $this->V93da65a9fd0004d9477aeac024e08e["axes"]["xaxis"]["renderer"] = "$.jqplot.CategoryAxisRenderer";
            $this->V93da65a9fd0004d9477aeac024e08e["highlighter"]["show"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["highlighter"]["sizeAdjust"] = 7.5;
            $this->V93da65a9fd0004d9477aeac024e08e["axes"]["xaxis"]["tickOptions"]["angle"] = 45;
        } else if ($this->chart_type == "bar") {

            $this->V93da65a9fd0004d9477aeac024e08e["legend"]["show"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["legend"]["placement"] = 'outside';
            $this->V93da65a9fd0004d9477aeac024e08e["axes"]["xaxis"]["tickOptions"]["angle"] = 45;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["renderer"] = "$.jqplot.BarRenderer";
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["pointLabels"]["show"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["axes"]["xaxis"]["renderer"] = "$.jqplot.CategoryAxisRenderer";
            $this->V93da65a9fd0004d9477aeac024e08e["axes"]["yaxis"] = array("padMax" => 1, "padMin" => 0);

            $this->V93da65a9fd0004d9477aeac024e08e["highlighter"]["show"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["highlighter"]["sizeAdjust"] = 25;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["varyBarColor"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["groups"] = 1;
            // $this->V93da65a9fd0004d9477aeac024e08e["seriesColors"] = array('#85802b', '#00749F', '#73C774', '#C7754C', '#17BDB8');
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["label"] = "";


            // $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["pointLabels"] = array('show' => true, 'color' =>  '#ff00000');
        } else if ($this->chart_type == "bar-stacked") {
            $Vf644bb32e0243d906e4a187b6b00d2 = array();
            if (!empty($this->V211920e440078bb030670971a12993) && $this->chart_type == "bar-stacked") {
                foreach ($this->V211920e440078bb030670971a12993 as $V2db95e8e1a9267b7a1188556b2013b) {
                    $Vf644bb32e0243d906e4a187b6b00d2[] = array('label' => $V2db95e8e1a9267b7a1188556b2013b);
                }
            }
            $this->V93da65a9fd0004d9477aeac024e08e["legend"]["show"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["legend"]["placement"] = 'outside';
            $this->V93da65a9fd0004d9477aeac024e08e["stackSeries"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["series"] = $Vf644bb32e0243d906e4a187b6b00d2;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["renderer"] = "$.jqplot.BarRenderer";
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["pointLabels"]["show"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["highlightMouseDown"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["highlighter"]["show"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["varyBarColor"] = true;
            if ($this->direction == "horizontal") {
                $this->V93da65a9fd0004d9477aeac024e08e["axes"]["yaxis"]["renderer"] = "$.jqplot.CategoryAxisRenderer";
                $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["barDirection"] = 'horizontal';
            } else {
                $this->V93da65a9fd0004d9477aeac024e08e["axes"]["xaxis"]["renderer"] = "$.jqplot.CategoryAxisRenderer";
            }
        } else if ($this->chart_type == "pie") {
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["renderer"] = "$.jqplot.PieRenderer";
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["showDataLabels"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["dataLabels"] = array("percent");
            $this->V93da65a9fd0004d9477aeac024e08e["legend"]["show"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["legend"]["location"] = 'e';
        } else if ($this->chart_type == "donut") {
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["renderer"] = "$.jqplot.DonutRenderer";
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["showDataLabels"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["dataLabels"] = 'percent';
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["sliceMargin"] = 3;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["startAngle"] = -90;
            $this->V93da65a9fd0004d9477aeac024e08e["legend"]["show"] = true;
            $this->V93da65a9fd0004d9477aeac024e08e["legend"]["location"] = 'e';
        } else if ($this->chart_type == "meter") {
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["renderer"] = "$.jqplot.MeterGaugeRenderer";
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["intervals"] = $this->intervals;
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["intervalColors"] = array('#1fb828', '#fffc2a', '#ff9900', '#dc3912');
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["background"] = '#FFFFFF';
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["ringColor"] = '#2C4D75';
            $this->V93da65a9fd0004d9477aeac024e08e["seriesDefaults"]["rendererOptions"]["tickColor"] = '#2C4D75';
        } if (!empty($this->color)) {
            $V62848e3ce5804aa985513a7922ff87 = explode(",", $this->color);
            $V62848e3ce5804aa985513a7922ff87 = array_map('trim', $V62848e3ce5804aa985513a7922ff87);
            $this->V93da65a9fd0004d9477aeac024e08e["seriesColors"] = $V62848e3ce5804aa985513a7922ff87;
        } if ($this->data_sql) {
            $Vf644bb32e0243d906e4a187b6b00d2 = array();
            include_once('adodb/adodb.inc.php');
            $V0c1d0e2ef91d68bdb15eff954448b8 = ADONewConnection(CHARTPHP_DBTYPE);
            $V0c1d0e2ef91d68bdb15eff954448b8->PConnect(CHARTPHP_DBHOST, CHARTPHP_DBUSER, CHARTPHP_DBPASS, CHARTPHP_DBNAME);
            $V0c1d0e2ef91d68bdb15eff954448b8->debug = false;
            $V3a2d7564baee79182ebc7b65084aab = $V0c1d0e2ef91d68bdb15eff954448b8->Execute($this->data_sql);
            echo $V0c1d0e2ef91d68bdb15eff954448b8->ErrorMsg();
            if (!$V47c80780ab608cc046f2a6e6f071fe = $V3a2d7564baee79182ebc7b65084aab->GetRows())
                return false;

            $Vb4a88417b3d0170d754c647c30b721 = array();

            foreach ($V47c80780ab608cc046f2a6e6f071fe as $V8277e0910d750195b448797616e091) {
                if (is_numeric($V8277e0910d750195b448797616e091[0]))
                    $V8277e0910d750195b448797616e091[0] = floatval($V8277e0910d750195b448797616e091[0]);
                if (is_numeric($V8277e0910d750195b448797616e091[1]))
                    $V8277e0910d750195b448797616e091[1] = floatval($V8277e0910d750195b448797616e091[1]);
                if (empty($V8277e0910d750195b448797616e091[2])) {
                    $Vf644bb32e0243d906e4a187b6b00d2[] = array('');
                    $V8277e0910d750195b448797616e091[2] = trim("Qty:   " . $V8277e0910d750195b448797616e091[1] . "");
                } else {
                    $Vf644bb32e0243d906e4a187b6b00d2[] = array("" . substr($V8277e0910d750195b448797616e091[2], -10) . "");
                    $V8277e0910d750195b448797616e091[2] = trim("Qty:   " . $V8277e0910d750195b448797616e091[1] . "  | OS:  " . substr($V8277e0910d750195b448797616e091[2], -20));
                }






                $Vb4a88417b3d0170d754c647c30b721[] = array($V8277e0910d750195b448797616e091[0], $V8277e0910d750195b448797616e091[1], $V8277e0910d750195b448797616e091[2]);
                if ($V8277e0910d750195b448797616e091[1] > $V2ffe4e77325d9a7152f7086ea7aa51)
                    $V2ffe4e77325d9a7152f7086ea7aa51 = $V8277e0910d750195b448797616e091[1];
            }

            $this->data = array($Vb4a88417b3d0170d754c647c30b721);
            $this->V93da65a9fd0004d9477aeac024e08e["axes"]["yaxis"]["min"] = 0;
            $this->V93da65a9fd0004d9477aeac024e08e["axes"]["yaxis"]["max"] = ceil($V2ffe4e77325d9a7152f7086ea7aa51) + ceil($V2ffe4e77325d9a7152f7086ea7aa51 * 0.2);
            foreach ($Vf644bb32e0243d906e4a187b6b00d2 as $labels) {
                foreach ($labels as $key => $label)
                    $this->V93da65a9fd0004d9477aeac024e08e["series"][] = array('label' => $label);
            }
        }
        if (is_array($this->data))
            $V785064f04ce95287380ffb9a8891c7 = json_encode($this->data);
        else
            $V785064f04ce95287380ffb9a8891c7 = $this->data;
        ?>    
        <div style="position:relative">  
            <?php if ($this->Vb2507468f95156358fa490fd543ad2 == true) { ?> 
                <div style="position:absolute; right:0px; z-index:99999;"> 
                    <ul class="nav">
                        <li class="dropdown"  onclick="$('#export_options').toggle();">
                            
                                <img src="images/download.png" id="options" alt="Export"  title="Export option" class="img-rounded" />
                                Export
                                <b class="caret"></b>

                            <ul style="display:none" id="export_options">
                                <li onclick="F91a412c16e2ed2e8ff99062ad09aa7($('#<?php echo $Vb80bb7740288fda1f201890375a60c ?>'), 'jpg', '<?php echo strip_tags($this->title); ?>')">
                                    
                                        <img style="cursor:pointer;" class=" img-rounded " title="Export as jpeg" src="images/jpeg-icon.png" alt="JPEG"  /> Jpeg
                                   
                                </li>
                                <li onclick="F91a412c16e2ed2e8ff99062ad09aa7($('#<?php echo $Vb80bb7740288fda1f201890375a60c ?>'), 'jpg-pdf', '<?php echo strip_tags($this->title); ?>')">
                                    
                                        <img style="cursor:pointer;" class="img-rounded " title="Export as pdf"  src="images/pdf-icon.png" alt="PDF"  /> Pdf 
                                   
                                </li>

                            </ul>
                        </li>
                    </ul>


                </div>  
                <div style="display:none">  <form action="" method="post" accept-charset="utf-8" id="imgform">  <input name="imgtype" id="imgtype" />  <input name="imgtitle" id="imgtitle" />  <textarea class="display-none" rows="10" cols="10" name="pngdata" id="pngdata"> </textarea>  </form>  </div>  <?php } ?>    <div id="<?php echo $Vb80bb7740288fda1f201890375a60c ?>" style="height:<?php echo $this->height ?>; width:<?php echo $this->width ?>;"></div>  </div>  <script>  $(document).ready(function () {

                                var plot_<?php echo $Vb80bb7740288fda1f201890375a60c ?> = $.jqplot('<?php echo $Vb80bb7740288fda1f201890375a60c ?>', <?php echo $V785064f04ce95287380ffb9a8891c7 ?>, <?php echo F8f64b3a805e991344726939f53bf57($this->V93da65a9fd0004d9477aeac024e08e) ?>);
                                jQuery(window).bind("resize", function () {
                                    plot_<?php echo $Vb80bb7740288fda1f201890375a60c ?>.destroy();
                                    plot_<?php echo $Vb80bb7740288fda1f201890375a60c ?> = $.jqplot('<?php echo $Vb80bb7740288fda1f201890375a60c ?>', <?php echo $V785064f04ce95287380ffb9a8891c7 ?>, <?php echo F8f64b3a805e991344726939f53bf57($this->V93da65a9fd0004d9477aeac024e08e) ?>);
                                });
                            });
                            function F91a412c16e2ed2e8ff99062ad09aa7(obj, type, title) {
                                var V341be97d9aff90c9978347f66f945b;
                                var imgtype = type;
                                if (type == 'jpg-pdf') {
                                    imgtype = 'jpg';
                                    type = 'pdf';
                                }
                                var Vdd2b9c2d0f89eb88267d945e852649 = obj.jqplotToImageCanvas();
                                if (Vdd2b9c2d0f89eb88267d945e852649) {
                                    V341be97d9aff90c9978347f66f945b = Vdd2b9c2d0f89eb88267d945e852649.toDataURL("image/" + imgtype);
                                } else {
                                    V341be97d9aff90c9978347f66f945b = null;
                                }
                                $('#pngdata').val(V341be97d9aff90c9978347f66f945b);
                                $('#imgtype').val(type);
                                $('#imgtitle').val(title);
                                $('#imgform').submit();
                            }</script>  <?php
        $V341be97d9aff90c9978347f66f945b = ob_get_clean();
        return $V341be97d9aff90c9978347f66f945b;
    }

}

function F8f64b3a805e991344726939f53bf57($Va43c1b0aa53a0c908810c06ab1ff39 = array(), $V4b5bea44af9baf871f58e4ecb54526 = array(), $Vc9e9a848920877e76685b2e4e76de3 = 0) {
    foreach ($Va43c1b0aa53a0c908810c06ab1ff39 as $V3c6e0b8a9c15224a8228b9a98ca153 => $V2063c1608d6e0baf80249c42e2be58) {
        if (is_array($V2063c1608d6e0baf80249c42e2be58)) {
            $V2cb9df9898e55fd0ad829dc202ddbd = F8f64b3a805e991344726939f53bf57($V2063c1608d6e0baf80249c42e2be58, $V4b5bea44af9baf871f58e4ecb54526, 1);
            $Va43c1b0aa53a0c908810c06ab1ff39[$V3c6e0b8a9c15224a8228b9a98ca153] = $V2cb9df9898e55fd0ad829dc202ddbd[0];
            $V4b5bea44af9baf871f58e4ecb54526 = $V2cb9df9898e55fd0ad829dc202ddbd[1];
        } else {
            if (substr($V2063c1608d6e0baf80249c42e2be58, 0, 2) == '$.') {
                $V19b0bee6b072408fc38b5d76725b76 = "#" . rand() . "#";
                $V4b5bea44af9baf871f58e4ecb54526[$V19b0bee6b072408fc38b5d76725b76] = $V2063c1608d6e0baf80249c42e2be58;
                $Va43c1b0aa53a0c908810c06ab1ff39[$V3c6e0b8a9c15224a8228b9a98ca153] = $V19b0bee6b072408fc38b5d76725b76;
            } else if (substr($V2063c1608d6e0baf80249c42e2be58, 0, 2) == '[{') {
                $V19b0bee6b072408fc38b5d76725b76 = "#" . rand() . "#";
                $V4b5bea44af9baf871f58e4ecb54526[$V19b0bee6b072408fc38b5d76725b76] = $V2063c1608d6e0baf80249c42e2be58;
                $Va43c1b0aa53a0c908810c06ab1ff39[$V3c6e0b8a9c15224a8228b9a98ca153] = $V19b0bee6b072408fc38b5d76725b76;
            } else if (substr($V2063c1608d6e0baf80249c42e2be58, 0, 3) == '!$.') {
                $V19b0bee6b072408fc38b5d76725b76 = "#" . rand() . "#";
                $V4b5bea44af9baf871f58e4ecb54526[$V19b0bee6b072408fc38b5d76725b76] = $V2063c1608d6e0baf80249c42e2be58;
                $Va43c1b0aa53a0c908810c06ab1ff39[$V3c6e0b8a9c15224a8228b9a98ca153] = $V19b0bee6b072408fc38b5d76725b76;
            }
        }
    } if ($Vc9e9a848920877e76685b2e4e76de3 == 1) {
        return array($Va43c1b0aa53a0c908810c06ab1ff39, $V4b5bea44af9baf871f58e4ecb54526);
    } else {
        $V7648c463fc599b54a77f6d6dcbd693 = json_encode($Va43c1b0aa53a0c908810c06ab1ff39);
        foreach ($V4b5bea44af9baf871f58e4ecb54526 as $V3c6e0b8a9c15224a8228b9a98ca153 => $V2063c1608d6e0baf80249c42e2be58) {
            $V7648c463fc599b54a77f6d6dcbd693 = str_replace('"' . $V3c6e0b8a9c15224a8228b9a98ca153 . '"', $V2063c1608d6e0baf80249c42e2be58, $V7648c463fc599b54a77f6d6dcbd693);
        } return $V7648c463fc599b54a77f6d6dcbd693;
    }
}
