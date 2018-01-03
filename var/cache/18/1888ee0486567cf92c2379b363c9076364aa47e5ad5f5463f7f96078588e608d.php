<?php

/* base.html.twig */
class __TwigTemplate_e9b42bf29631fcb73d86c8c94dee0827dc2ced9d770cd7c9512423ec39c38180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'home' => array($this, 'block_home'),
            'history' => array($this, 'block_history'),
            'contact' => array($this, 'block_contact'),
            'apropos' => array($this, 'block_apropos'),
            'home2' => array($this, 'block_home2'),
            'history2' => array($this, 'block_history2'),
            'fun_facts2' => array($this, 'block_fun_facts2'),
            'contact2' => array($this, 'block_contact2'),
            'apropos2' => array($this, 'block_apropos2'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\"
\t\t\t  content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

       <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t<meta property=\"og:title\" content=\"Poop Time\"/>
\t\t<meta property=\"og:type\" content=\"website\"/>
\t\t<meta property=\"og:url\" content=\"https://yohannt.promo-5.codeur.online/poop_time_v2/\"/>
\t\t<meta property=\"og:description\" content=\"Poop-time, l'appli qui vous sort de la merde!\"/>
\t\t<meta property=\"og:site_name\" content=\"Poop Time\"/>

\t\t<meta name=\"twitter:card\" content=\"summary\"/>
\t\t<meta name=\"twitter:title\" content=\"Poop Time\">
\t\t<meta name=\"twitter:url\" content=\"https://yohannt.promo-5.codeur.online/poop_time_v2/\">
\t\t<meta name=\"twitter:description\" content=\"Poop-time, l'appli qui vous sort de la merde!\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://yohannt.promo-5.codeur.online/poop_time_v2/views/style/css/style.css\">

    </head>
    <body>
    \t<header>
        <div class=\"navbar-fixed\" id=\"base_nav\">
    \t\t\t<nav id=\"base\">
    \t\t\t\t<div class=\"nav-wrapper\">
    \t\t\t\t\t<a href=\"home\" class=\"brand-logo\">
                <svg version=\"1.1\" id=\"Calque_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                \t width=\"auto\" height=\"53\" viewBox=\"130.209 0 451.72 159.456\" enable-background=\"new 130.209 0 451.72 159.456\"
                \t xml:space=\"preserve\">
                \t<g id=\"Calque_1_1_\">
                \t\t<g id=\"XMLID_1_\">
                \t\t\t<g>
                \t\t\t\t<path d=\"M324.969,113.181c0.066,0,0.133,0.008,0.208,0.008c-0.066,0.158-0.116,0.315-0.167,0.491
                \t\t\t\t\tc-0.449,1.656-0.923,3.303-1.464,4.934c-0.283,0.85-0.591,1.682-0.857,2.239c-0.142,0.315-0.308,0.616-0.481,0.907
                \t\t\t\t\tc-0.101,0.025-0.2,0.033-0.301,0.059c-2.139,3.52-5.06,6.432-8.479,8.961c-17.191,12.715-38.244,20.713-59.214,24.207
                \t\t\t\t\tc-23.591,3.936-48.389,5.658-72.237,3.586c-11.409-0.99-23.981-1.996-34.833-5.873c-3.586-1.291-6.965-3.089-9.752-5.451
                \t\t\t\t\tc-0.565-0.939-1.223-1.813-1.972-2.695c-1.273-1.498-2.155-2.23-2.929-3.986c-0.2-0.449-0.491-0.814-0.85-1.115
                \t\t\t\t\tc-0.466-1.14-0.824-2.354-1.074-3.645c-1.672-8.82,2.754-17.508,7.947-24.332c4.526-5.95,10.285-12.74,17.658-15.262
                \t\t\t\t\tc-0.399-2.295-0.466-4.609-0.117-6.848c1.481-9.561,9.669-15.852,17.133-21.028c0.075-0.05,0.15-0.092,0.226-0.142
                \t\t\t\t\tc-1.714-6.907,0.882-14.854,5.233-20.595c4.377-5.758,10.734-11.275,12.989-18.332c2.696-8.479-0.041-15.877-4.968-22.917
                \t\t\t\t\tc-2.696-3.853,3.586-8.729,6.541-5.042c8.795,11,24.539,12.407,36.68,17.899c7.797,3.528,14.912,8.754,21.895,13.639
                \t\t\t\t\tc7.155,5.009,14.569,9.719,21.609,14.878c7.447,5.45,15.461,12.44,17.841,21.785c0.648,2.563,0.891,5.143,0.773,7.672
                \t\t\t\t\tc12.291,0.824,23.731,10.043,29.308,20.771C323.695,102.512,325.46,107.939,324.969,113.181z M311.438,121.686
                \t\t\t\t\tc6.808-6.615,6.19-14.829,0.965-22.385c-4.677-6.764-13.188-14.428-22.085-14.037c-1.363,3.545-3.503,6.824-6.364,9.595
                \t\t\t\t\tc-14.063,13.613-34.809,19.888-53.516,23.815c-11.898,2.496-24.348,4.136-36.505,2.779c-9.17-1.033-19.805-2.664-27.435-8.281
                \t\t\t\t\tc-3.071-2.262-5.726-5.467-7.623-9.078c-7.789,2.654-14.337,12.066-17.824,18.848c-4.044,7.864-3.095,16.385,5.409,20.52
                \t\t\t\t\tc4.893,2.381,10.593,3.254,15.91,4.211c6,1.074,12.023,1.922,18.099,2.447c23.99,2.088,49.212,0.924,72.919-3.396
                \t\t\t\t\tc11.684-2.132,23.325-5.261,34.043-10.478C295.411,132.361,304.997,127.943,311.438,121.686z M283.421,79.713
                \t\t\t\t\tc2.08-10.193-5.617-18.498-13.256-24.098c-9.762-7.14-19.922-13.988-30.007-20.67c-4.942-3.279-9.994-6.815-15.545-9.004
                \t\t\t\t\tc-4.368-1.723-8.854-3.112-13.298-4.635c-3.553-1.223-7.155-2.538-10.584-4.152c0.416,2.13,0.592,4.293,0.416,6.474
                \t\t\t\t\tc-0.573,7.123-3.329,13.256-7.706,18.856c-3.811,4.893-8.729,9.428-11.217,15.203c-1.423,3.287-1.906,8.621,0.757,11.558
                \t\t\t\t\tc4.993,5.476,14.787,4.228,21.319,3.154c7.281-1.207,14.313-3.303,21.469-5.034c5.218-1.265,7.432,6.765,2.214,8.021
                \t\t\t\t\tc-7.955,1.931-15.769,4.277-23.906,5.393c-8.396,1.14-18.831,1.688-25.654-4.352c-0.35-0.3-0.666-0.624-0.982-0.949
                \t\t\t\t\tc-0.017,0.017-0.032,0.033-0.059,0.05c-4.851,3.362-11.466,7.771-12.898,13.946c-1.331,5.75,1.799,12.907,6.324,16.567
                \t\t\t\t\tc3.329,2.696,7.589,4.012,11.716,4.91c5.75,1.256,11.343,2.422,17.259,2.571c12.557,0.315,24.964-1.698,37.063-4.942
                \t\t\t\t\tc9.378-2.514,18.656-5.326,27.252-9.92C271.754,94.575,281.531,88.965,283.421,79.713z\"/>
                \t\t\t\t<path fill=\"#B17F4A\" d=\"M312.403,99.301c5.227,7.556,5.843,15.769-0.965,22.384c-6.44,6.258-16.026,10.676-24.007,14.563
                \t\t\t\t\tc-10.718,5.217-22.359,8.346-34.043,10.477c-23.707,4.318-48.929,5.482-72.919,3.395c-6.075-0.523-12.099-1.373-18.099-2.445
                \t\t\t\t\tc-5.317-0.957-11.019-1.832-15.91-4.211c-8.504-4.137-9.453-12.656-5.409-20.521c3.487-6.782,10.036-16.192,17.824-18.849
                \t\t\t\t\tc1.896,3.611,4.552,6.816,7.623,9.08c7.63,5.617,18.265,7.248,27.435,8.279c12.157,1.356,24.605-0.283,36.505-2.779
                \t\t\t\t\tc18.707-3.928,39.451-10.201,53.516-23.814c2.861-2.771,5.001-6.05,6.364-9.595C299.214,84.872,307.727,92.536,312.403,99.301z\"
                \t\t\t\t\t/>
                \t\t\t\t<path fill=\"#B17F4A\" d=\"M270.165,55.615c7.639,5.6,15.336,13.905,13.256,24.098c-1.891,9.252-11.667,14.862-19.322,18.948
                \t\t\t\t\tc-8.596,4.594-17.874,7.406-27.252,9.92c-12.1,3.244-24.507,5.258-37.063,4.942c-5.916-0.149-11.509-1.315-17.259-2.571
                \t\t\t\t\tc-4.127-0.898-8.388-2.213-11.716-4.91c-4.525-3.66-7.655-10.817-6.324-16.567c1.433-6.175,8.048-10.584,12.898-13.946
                \t\t\t\t\tc0.025-0.017,0.042-0.033,0.059-0.05c0.316,0.325,0.633,0.649,0.982,0.949c6.823,6.041,17.258,5.492,25.654,4.352
                \t\t\t\t\tc8.139-1.115,15.951-3.462,23.906-5.393c5.218-1.256,3.004-9.286-2.214-8.021c-7.155,1.73-14.188,3.828-21.469,5.034
                \t\t\t\t\tc-6.532,1.074-16.326,2.322-21.319-3.154c-2.663-2.937-2.18-8.271-0.757-11.558c2.488-5.775,7.406-10.31,11.217-15.203
                \t\t\t\t\tc4.377-5.601,7.133-11.733,7.706-18.856c0.176-2.18,0-4.343-0.416-6.474c3.429,1.614,7.031,2.929,10.584,4.152
                \t\t\t\t\tc4.443,1.522,8.93,2.912,13.299,4.635c5.55,2.188,10.602,5.725,15.544,9.004C250.243,41.626,260.404,48.475,270.165,55.615z\"/>
                \t\t\t</g>
                \t\t</g>
                \t</g>
                \t<rect x=\"294.298\" y=\"0\" fill=\"none\" width=\"287.631\" height=\"97.436\"/>
                \t<text transform=\"matrix(1 0 0 1 294.2981 77.5991)\" fill=\"#FFFFFF\" font-family=\"'Ubuntu-Bold'\" font-size=\"100\">POOP</text>
                \t<rect x=\"336.298\" y=\"80.436\" fill=\"none\" width=\"245.631\" height=\"79.021\"/>
                \t<text transform=\"matrix(1 0 0 1 336.2981 158.0347)\" fill=\"#FFFFFF\" font-family=\"'Ubuntu-Bold'\" font-size=\"100\">TIME</text>
                </svg>
              </a>
    \t\t\t\t\t<a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
              <ul class=\"right hide-on-med-and-down\">
      \t\t\t\t\t\t<li ";
        // line 88
        $this->displayBlock('home', $context, $blocks);
        echo " id=\"home\"><a href=\"home\">Accueil</a></li>
    \t\t\t\t\t\t  <li ";
        // line 89
        $this->displayBlock('history', $context, $blocks);
        echo " id=\"history\"><a href=\"history\">Histoire</a></li>
    \t\t\t\t\t\t  <li ";
        // line 90
        $this->displayBlock('contact', $context, $blocks);
        echo " id=\"contact\"><a href=\"contact\">Contact</a></li>
      \t\t\t\t\t\t<li ";
        // line 91
        $this->displayBlock('apropos', $context, $blocks);
        echo " id=\"apropos\"><a href=\"apropos\">A Propos</a></li>
      \t\t\t\t\t</ul>
      \t\t\t\t\t<ul class=\"side-nav\" id=\"mobile-demo\">
      \t\t\t\t\t\t<li ";
        // line 94
        $this->displayBlock('home2', $context, $blocks);
        echo " id=\"home\"><a href=\"home\">Accueil</a></li>
                  <li ";
        // line 95
        $this->displayBlock('history2', $context, $blocks);
        echo " id=\"history\"><a href=\"history\">Histoire</a></li>
  \t\t\t\t        <li ";
        // line 96
        $this->displayBlock('fun_facts2', $context, $blocks);
        echo " id=\"fun_facts\"><a href=\"fun_facts\">Fun Facts</a></li>
                  <li ";
        // line 97
        $this->displayBlock('contact2', $context, $blocks);
        echo " id=\"contact\"><a href=\"contact\">Contact</a></li>
      \t\t\t\t\t\t<li ";
        // line 98
        $this->displayBlock('apropos2', $context, $blocks);
        echo " id=\"apropos\"><a href=\"apropos\">A Propos</a></li>
      \t\t\t\t\t</ul>
    \t\t\t\t</div>
    \t\t\t</nav>
        </div>
     \t</header>



        <main>
          ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "        </main>

\t\t<footer class=\"hide-on-med-and-down\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"\" id=\"footer\">
\t\t\t\t\t\t<p>Réalisation : Floriane - Anthony - Yohann</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>

\t\t<script type=\"text/javascript\" src=\"https://yohannt.promo-5.codeur.online/poop_time_v2/views/js/jquery-3.2.1.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"https://yohannt.promo-5.codeur.online/poop_time_v2/views/js/materialize.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"https://yohannt.promo-5.codeur.online/poop_time_v2/views/js/script.js\"></script>

\t\t<script> \$(\".button-collapse\").sideNav(); </script>
    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Poop Time, l'application!";
    }

    // line 88
    public function block_home($context, array $blocks = array())
    {
        echo " ";
    }

    // line 89
    public function block_history($context, array $blocks = array())
    {
        echo " ";
    }

    // line 90
    public function block_contact($context, array $blocks = array())
    {
        echo " ";
    }

    // line 91
    public function block_apropos($context, array $blocks = array())
    {
        echo " ";
    }

    // line 94
    public function block_home2($context, array $blocks = array())
    {
        echo " ";
    }

    // line 95
    public function block_history2($context, array $blocks = array())
    {
        echo " ";
    }

    // line 96
    public function block_fun_facts2($context, array $blocks = array())
    {
        echo " ";
    }

    // line 97
    public function block_contact2($context, array $blocks = array())
    {
        echo " ";
    }

    // line 98
    public function block_apropos2($context, array $blocks = array())
    {
        echo " ";
    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  254 => 108,  248 => 98,  242 => 97,  236 => 96,  230 => 95,  224 => 94,  218 => 91,  212 => 90,  206 => 89,  200 => 88,  194 => 9,  171 => 109,  169 => 108,  156 => 98,  152 => 97,  148 => 96,  144 => 95,  140 => 94,  134 => 91,  130 => 90,  126 => 89,  122 => 88,  40 => 9,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/yohannt/public/poop_time_v2/views/base.html.twig");
    }
}
