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
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/font-awsome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <title>Superjobs - Site de recrutement </title>

<nav class=\"navbar navbar-default\">
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
        // line 35
        echo $this->env->getExtension('routing')->getPath("superjobs_home_homepage");
        echo "\">SuperJobs</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">

              ";
        // line 42
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
            { ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " } <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                    <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
                      Mon compte
                    </a>
            </li>
            <li>
              <a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                  ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
              </a>
            </li>
          </ul>
        </li>

              ";
        }
        // line 61
        echo "        <li>
              ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 63
            echo "              ";
        } else {
            // line 64
            echo "                  <li>
                    <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                      ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                  </li>
              ";
        }
        // line 70
        echo "        </li>
        <li>
          <div>
              ";
        // line 73
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 75
        echo "          </div>
        </li>
      </ul>


      <!--  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
      <ul class=\"nav navbar-nav navbar-right\">
        <li>
          <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
            Entreprise
          </a>
        </li>
        <li>
          <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_intro");
        echo "\">
            Lancer offre
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</head>
<body>
  
  <div class=\"container\">
    
    ";
        // line 102
        $this->displayBlock('container', $context, $blocks);
        // line 103
        echo "     
  </div>

    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/init.jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/init.standard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/jquery.tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
    }

    // line 73
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 74
        echo "              ";
    }

    // line 102
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
        return array (  209 => 102,  205 => 74,  202 => 73,  194 => 110,  190 => 109,  186 => 108,  182 => 107,  178 => 106,  173 => 103,  171 => 102,  154 => 88,  146 => 83,  136 => 75,  134 => 73,  129 => 70,  122 => 66,  118 => 65,  115 => 64,  112 => 63,  110 => 62,  107 => 61,  97 => 54,  93 => 53,  85 => 48,  79 => 45,  75 => 43,  73 => 42,  63 => 35,  46 => 21,  42 => 20,  21 => 1,);
    }
}
