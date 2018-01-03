<?php

/* insert.html.twig */
class __TwigTemplate_641b796792c694cf351f3d456cd119a1bccc2642af92693f9c4456c891ddb027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "insert.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Proposez votre toilette";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

<script>

\tconsole.log(localStorage.getItem(\"lat\"));
\tconsole.log(localStorage.getItem(\"lng\"));

\tfunction test(){

\t\t\tvar lat = localStorage.getItem(\"lat\");
\t\t\tvar lng = localStorage.getItem(\"lng\");
\t\t\tconsole.log(\"lat\" + lat);
\t\t\tvar latitude = document.querySelector(\"#lat\");
\t\t\tvar longitude = document.querySelector(\"#lng\");
\t\t\tlatitude.value = lat;
\t\t\tlongitude.value = lng;
\t}





</script>

<div class=\"container\">
    <div class=\"row\">
      <div class=\"s12\">
      \t<img src=\"https://yohannt.promo-5.codeur.online/poop_time_v2/views/img/logo_form.svg\"alt=\"logo formulaire\" width=\"110\" height=\"110\" style=\"float:left;margin-right: 40px;\">
      \t<p id=\"insertP\">Apportez votre contribution à Poop-Time! <br/>Remplissez le formulaire ci-dessous pour proposer un toilette publique qui n'est pas encore recensé sur l'application.<br/>Laissez votre pseudo pour passer à la postérité et rentrer dans l'Histoire de l'application \"Poop-time\"!</p>
      </div>
       
        <form id=\"contact\" action=\"https://yohannt.promo-5.codeur.online/poop_time_v2/models/insert.php\" method=\"POST\">




            <div class=\"\">
                <div class=\"form-group\">
                    <label for=\"lat\"></label>
\t\t\t\t\t<input type=\"hidden\" name=\"lat\" value=\"\" class=\"form-control\" id=\"lat\">
                </div>
            </div>

            <div class=\"\">
                <div class=\"form-group\">
                    <label for=\"lng\"></label>
                    <input type=\"hidden\" name=\"lng\" value=\"\" class=\"form-control\" id=\"lng\">
                </div>
            </div>
            
            <div class=\"col s12\">
                <div class=\"form-group\">
                    <label for=\"pseudo\">Votre pseudo</label>
                    <input type=\"text\" name=\"pseudo\" class=\"form-control\" id=\"pseudo\">
                </div>
            </div>
             
             <div class=\"col s12 m12 l5 xl5\">
                <div class=\"form-group\">
                    <label for=\"adresse\">Adresse du WC</label>
                    <input type=\"text\" name=\"adresse\" class=\"form-control\" id=\"adresse\">
                </div>
            </div>

             <div class=\"col s12 m12 l5 xl5 offset-l2 offset-xl2\">
                <div class=\"form-group\">
                    <label for=\"ville\">Ville du WC</label>
                    <input type=\"text\" name=\"ville\" class=\"form-control\" id=\"ville\">
                </div>
            </div>
            
            <div class=\"col s5\">
                <div class=\"form-group\">
                    <label for=\"handicape\">Handicapé?</label>
                    <select id=\"handicape\">
                    \t<option value=\"1\">Oui</option>
                    \t<option value=\"0\">Non</option>
                    \t<option value=\"0\">Je ne sais pas</option>
                    </select>
                    
                    
                </div>
            </div>
            
            <div class=\"col s5 offset-s2\">
                <div class=\"form-group\">
                    <label for=\"payant\">Payant?</label>
                    <select id=\"payant\">
                    \t<option value=\"1\">Oui</option>
                    \t<option value=\"0\">Non</option>
                    \t<option value=\"0\">Je ne sais pas</option>

                    </select>
                </div>
            </div>

            <div class=\"col s12\">
                <div class=\"form-group\">
                    <label for=\"msg\">Commentaire</label>
                    <textarea name=\"msg\" class=\"form-control\" id=\"msg\"  placeholder=\"Ecrivez votre message\"></textarea>
                </div>
            </div>
            
            

            <div class=\"\">
                <div class=\"form-group\">
                    <button type=\"submit\" value=\"send\" onclick=\"test()\" class=\"btn\">Envoyer</button>
                </div>
            </div>
        </form>
        </div>
    
</div>

";
    }

    public function getTemplateName()
    {
        return "insert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "insert.html.twig", "/home/yohannt/public/poop_time_v2/views/insert.html.twig");
    }
}
