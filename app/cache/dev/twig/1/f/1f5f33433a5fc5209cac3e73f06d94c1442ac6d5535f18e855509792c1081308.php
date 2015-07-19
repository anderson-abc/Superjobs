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
                ";
        // line 38
        echo "            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">

                    ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 45
            echo "                        <li class=\"dropdown\">
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
        } else {
            // line 61
            echo "                    
                        <li>
                        <li>
                            <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("superjobs_home_intro_template");
            echo "\">
                                CANDIDAT
                            </a>
                        </li>
                    ";
        }
        // line 69
        echo "                    ";
        // line 77
        echo "                    </li>
                    <li>
                        <div>
                            ";
        // line 80
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 82
        echo "                        </div>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav navbar-center\" style=\"margin-left: 37%;\">
                    <li>
                        <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("superjobs_home_homepage");
        echo "\">
                            SUPERJOBS
                        </a>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_intro");
        echo "\">
                            ENTREPRISE
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
        // line 107
        $this->displayBlock('container', $context, $blocks);
        // line 108
        echo "     
    </div>
    <footer class=\"footer\" style=\"padding-top:  50px;\">
        <div class=\"container\">          
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <b>Home</b><br/>
                    A propos<br/>
                    CGU<br/>
                    Aide / FAQ<br/>
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
        // line 155
        echo "    <script src=\"//cdn.ckeditor.com/4.4.7/basic/ckeditor.js\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/jquery.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 158
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/jquery.uploadify.v2.1.4.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    // line 80
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 81
        echo "                            ";
    }

    // line 107
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
        return array (  250 => 107,  246 => 81,  243 => 80,  236 => 160,  232 => 159,  227 => 158,  223 => 156,  220 => 155,  172 => 108,  170 => 107,  154 => 94,  144 => 87,  137 => 82,  135 => 80,  130 => 77,  128 => 69,  120 => 64,  115 => 61,  106 => 56,  102 => 55,  94 => 50,  88 => 47,  84 => 45,  82 => 44,  74 => 38,  57 => 23,  53 => 22,  49 => 21,  45 => 20,  41 => 19,  21 => 1,);
    }
}
