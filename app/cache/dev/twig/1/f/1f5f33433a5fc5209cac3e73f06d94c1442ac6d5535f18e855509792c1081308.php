<?php

/* SuperjobsHomeBundle::layout.html.twig */
class __TwigTemplate_1f5f33433a5fc5209cac3e73f06d94c1442ac6d5535f18e855509792c1081308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    
<!--######################################################################################
      _                _                                  _                     _
   __| | _____   _____| | ___  _ __  _ __ ___   ___ _ __ | |_    __ _  ___  ___| | _____
  / _` |/ _ \\ \\ / / _ \\ |/ _ \\| '_ \\| '_ ` _ \\ / _ \\ '_ \\| __|  / _` |/ _ \\/ _ \\ |/ / __|
 | (_| |  __/\\ V /  __/ | (_) | |_) | | | | | |  __/ | | | |_  | (_| |  __/  __/   <\\__ \\
  \\__,_|\\___| \\_/ \\___|_|\\___/| .__/|_| |_| |_|\\___|_| |_|\\__|  \\__, |\\___|\\___|_|\\_\\___/
                              |_|                               |___/
#######################################################################################-->

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Superjobs, recrutements, jobs, cv, informatique\">
    <meta name=\"author\" content=\"Irmasoft\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/Calendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/one-page-wonder.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/sticky-footer-navbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <title>Superjobs - Site de recrutement </title>

<nav class=\"navbar navbar-default navbar-fixed-top\" style=\"box-shadow: 0px 3px 5px 0px rgba(102, 102, 102, 0.5);\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("superjobs_home_homepage");
        echo "\">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">

              ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 45
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
            { ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " } <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
                  Mon compte
                </a>
            </li>
            <li>
              <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                  ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
              </a>
            </li>
          </ul>
        </li>

              ";
        }
        // line 63
        echo "        <li>
              ";
        // line 64
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 65
            echo "              ";
        } else {
            // line 66
            echo "                  <li>
                    <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("recruiter_registration");
            echo "\">
                      ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                  </li>
              ";
        }
        // line 72
        echo "        </li>
        <li>
          <div>
              ";
        // line 75
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 77
        echo "          </div>
        </li>
      </ul>


      <!--  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
      <ul class=\"nav navbar-nav navbar-right\">
        <li>
          <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_intro");
        echo "\">
            Entreprise
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</head>
<body>
  <br/><br/>
  <div class=\"container\">
    
    ";
        // line 98
        $this->displayBlock('container', $context, $blocks);
        // line 99
        echo "     
  </div>
    <footer class=\"footer\" style=\"padding-top:  50px;\">
      <div class=\"container\">          
        <div class=\"row\">
            <div class=\"col-md-3\">                
                <b>Home</b><br/>
                A propos<br/>
                CGU<br/>
                FAQ<br/>
                Press <br/>
                Contact<br/>
            </div>
            <div class=\"col-md-3\">
                <b>Candidat</b><br/>
                Chercher un offre d'emploi<br/>
                Liste des entreprise qui recrutent<br/>
                Optimiser mes recherches<br/>
                Créer mon profil<br/>
                Je m'entraine<br/>
            </div>
            <div class=\"col-md-3\">
                <b>Entreprise</b><br/>
                Lancer une offre<br/>
                Selectionner des profils<br/>
                Passer un test à un candidat<br/>
                Télétravail<br/>
            </div>
            <div class=\"col-md-3\">
                Newsletter<br/>
                <input type=\"text\" class=\"\"><br/>
                Twitter - Facebook - Google+<br/>
                Feedback
                
            </div>
        </div>
          <hr>
        <center>
            Copyright © 2015 Tous droits réservés.<br/>Made with ♥ by <a href=\"http://www.irmasoft.com\" target=\"blanc\">Irmasoft.com</a>
        </center>
      </div>
    </footer>
    <br/>

    
    
";
        // line 146
        echo "    <script src=\"//cdn.ckeditor.com/4.4.7/basic/ckeditor.js\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/jquery.js"), "html", null, true);
        echo "\"></script>
";
        // line 149
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/jquery.uploadify.v2.1.4.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    // line 75
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 76
        echo "              ";
    }

    // line 98
    public function block_container($context, array $blocks = array())
    {
        echo "  
    ";
    }

    public function getTemplateName()
    {
        return "SuperjobsHomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 98,  249 => 76,  246 => 75,  239 => 151,  235 => 150,  230 => 149,  226 => 147,  223 => 146,  175 => 99,  173 => 98,  157 => 85,  147 => 77,  145 => 75,  140 => 72,  133 => 68,  129 => 67,  126 => 66,  123 => 65,  121 => 64,  118 => 63,  108 => 56,  104 => 55,  96 => 50,  90 => 47,  86 => 45,  84 => 44,  74 => 37,  57 => 23,  53 => 22,  49 => 21,  45 => 20,  41 => 19,  21 => 1,);
    }
}
