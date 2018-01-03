<?php

/* index.html.twig */
class __TwigTemplate_e8c3683d50ff3467efcd3deb8442f7b9dbd51e1990ba6c76ce30aa40ed13d3e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("bhome.html.twig", "index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'home' => array($this, 'block_home'),
            'home2' => array($this, 'block_home2'),
            'body' => array($this, 'block_body'),
            'home3' => array($this, 'block_home3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bhome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "My cool blog posts";
    }

    // line 6
    public function block_home($context, array $blocks = array())
    {
        // line 7
        echo "    class=\"active\"
";
    }

    // line 10
    public function block_home2($context, array $blocks = array())
    {
        // line 11
        echo "    class=\"active\"
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "


        <div id=\"map\">
          <div id=\"geoloc\">
            <div class=\"fixed-action-btn\">
              <a onclick=\"geoLoc()\"><button class=\"btn-floating btn-large\"><i class=\"material-icons\">my_location</i></button></a>
              
            </div>
          </div>
        </div>

";
    }

    // line 29
    public function block_home3($context, array $blocks = array())
    {
        // line 30
        echo "<script>

\t\$( document ).ready(function() {
\t\tif(navigator.geolocation){
 \tgeoLoc();
\t\t}
\t\telse{
\t\t\tmymap.innerHTML = \"La géolocalisation n'est pas activée sur votre appareil.\"
\t\t}
});

var mymap = L.map('map').setView([ 47.0833300, 2.4000000], 5.45);

L.tileLayer('https://api.mapbox.com/styles/v1/fawlia/cjbywhyf3fnfd2sqwiim84dt4/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZmF3bGlhIiwiYSI6ImNqYmVxejI1ejI3MG4ydm1vZm9laXVya2QifQ.vUbCBecjNCgy9IEE6pDRaQ', {
  maxZoom: 18,
  id: 'mapbox.streets',
  accessToken: 'pk.eyJ1IjoiZmF3bGlhIiwiYSI6ImNqYmVxejI1ejI3MG4ydm1vZm9laXVya2QifQ.vUbCBecjNCgy9IEE6pDRaQ'
}).addTo(mymap);

  var myIcon = L.icon({
    iconUrl: 'https://yohannt.promo-5.codeur.online/poop_time_v2/views/img/icone_geo.svg',
    iconSize: [25, 47],
    iconAnchor: [12.5, 46],
    popupAnchor: [-3, -76],
  });

  var myIcon1 = L.icon({
    iconUrl: 'https://yohannt.promo-5.codeur.online/poop_time_v2/views/img/icone_geo1.svg',
    iconSize: [25, 47],
    iconAnchor: [12.5, 46],
    popupAnchor: [-3, -76],
  });

  var myIcon2 = L.icon({
    iconUrl: 'https://yohannt.promo-5.codeur.online/poop_time_v2/views/img/icone_geo2.svg',
    iconSize: [35, 57],
    iconAnchor: [22.5, 56],
    popupAnchor: [-3, -76],
  });


   ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mark2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 72
            echo "   ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ville_id", array()) == 8)) {
                // line 73
                echo " L.marker([";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "latitude", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "longitude", array()), "html", null, true);
                echo "], {icon: myIcon1}).on('click', markerOnClick).addTo(mymap)
 .bindPopup(\"<h6 data='";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "longitude", array()), "html", null, true);
                echo "' datalat='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "latitude", array()), "html", null, true);
                echo "' id='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "'>\" + \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "adresse", array()), "html", null, true);
                echo "\" + \"</h6>\");

 ";
            } else {
                // line 77
                echo "
 L.marker([";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "latitude", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "longitude", array()), "html", null, true);
                echo "], {icon: myIcon}).on('click', markerOnClick).addTo(mymap)
 .bindPopup(\"<h6 data='";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "longitude", array()), "html", null, true);
                echo "' datalat='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "latitude", array()), "html", null, true);
                echo "' id='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "'>\" + \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "adresse", array()), "html", null, true);
                echo "\" + \"</h6>\");

 ";
            }
            // line 82
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
   var popup = L.popup();

  function markerOnClick(e) {

    var id = \$(this._popup._content)[0].id;
    document.location.href=\"\" + id;
    //console.log(\$(this._popup._content)[0].id);
  }


  function onMapClick(e) {

    popup
    .setLatLng(e.latlng)
    .setContent(\"<a href='https://yohannt.promo-5.codeur.online/poop_time_v2/insert'><button id='btnP' class='btn-large'>Proposez un toilette</button></a>\")
    .openOn(mymap);
    localStorage.setItem('lat', e.latlng.lat);
    localStorage.setItem('lng', e.latlng.lng);

  }

  mymap.on('click', onMapClick);

  function geoLoc(){

    function onAccuratePositionFound (e) {
      localStorage.setItem('curlat', e.latlng.lat);
      localStorage.setItem('curlng', e.latlng.lng);

      mymap.setView(e.latlng, 16);

      L.marker(e.latlng,{icon: myIcon2}).addTo(mymap);

    }

    function onAccuratePositionError (e) {
      console.log(e.message)
    }

    mymap.on('accuratepositionfound', onAccuratePositionFound);
    mymap.on('accuratepositionerror', onAccuratePositionError);
    mymap.findAccuratePosition({
    maxWait: 3000,
    desiredAccuracy: 20
    });
  }

</script>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 83,  166 => 82,  154 => 79,  148 => 78,  145 => 77,  133 => 74,  126 => 73,  123 => 72,  119 => 71,  76 => 30,  73 => 29,  57 => 15,  54 => 14,  49 => 11,  46 => 10,  41 => 7,  38 => 6,  32 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/home/yohannt/public/poop_time_v2/views/index.html.twig");
    }
}
