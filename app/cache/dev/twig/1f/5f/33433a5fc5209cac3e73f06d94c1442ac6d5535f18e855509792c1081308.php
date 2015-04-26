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
<html lang=\"en\">

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
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/Calendar.css"), "html", null, true);
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
        // line 36
        echo $this->env->getExtension('routing')->getPath("superjobs_home_homepage");
        echo "\">SuperJobs</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">

              ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
            { ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " } <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                    <a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
                      Mon compte
                    </a>
            </li>
            <li>
              <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                  ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
              </a>
            </li>
          </ul>
        </li>

              ";
        }
        // line 62
        echo "        <li>
              ";
        // line 63
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 64
            echo "              ";
        } else {
            // line 65
            echo "                  <li>
                    <a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                      ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                  </li>
              ";
        }
        // line 71
        echo "        </li>
        <li>
          <div>
              ";
        // line 74
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 76
        echo "          </div>
        </li>
      </ul>


      <!--  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
      <ul class=\"nav navbar-nav navbar-right\">
        <li>
          <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
            Entreprise
          </a>
        </li>
        <li>
          <a href=\"";
        // line 89
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
  <br/><br/>
  <div class=\"container\">
    
    ";
        // line 103
        $this->displayBlock('container', $context, $blocks);
        // line 104
        echo "     
  </div>

    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/init.jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/init.standard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/jquery.tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
    }

    // line 74
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 75
        echo "              ";
    }

    // line 103
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
        return array (  213 => 103,  209 => 75,  206 => 74,  198 => 111,  194 => 110,  190 => 109,  186 => 108,  182 => 107,  177 => 104,  175 => 103,  158 => 89,  150 => 84,  140 => 76,  138 => 74,  133 => 71,  126 => 67,  122 => 66,  119 => 65,  116 => 64,  114 => 63,  111 => 62,  101 => 55,  97 => 54,  89 => 49,  83 => 46,  79 => 44,  77 => 43,  67 => 36,  50 => 22,  46 => 21,  42 => 20,  21 => 1,);
    }
}
