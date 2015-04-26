<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0b4d80eeccd4aad4c6ce4af073f973608981e6abec147a614a5c5bc7aac36c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/signin.css"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
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
        // line 61
        echo "      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li>
          <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
            Entreprise
          </a>
        </li>
        <li>
          <a href=\"";
        // line 69
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
        ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 81
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 82
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                  <p class=\"bg-info\">
                    ";
                // line 84
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                  <p class=\"bg-info\">
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </p>
        <div class=\"container\">
            ";
        // line 91
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 93
        echo "        </div>
 <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    // line 91
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 92
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 92,  187 => 91,  180 => 95,  176 => 94,  173 => 93,  171 => 91,  167 => 89,  161 => 88,  151 => 84,  145 => 82,  140 => 81,  136 => 80,  122 => 69,  114 => 64,  109 => 61,  100 => 55,  96 => 54,  88 => 49,  82 => 46,  78 => 44,  76 => 43,  66 => 36,  49 => 22,  45 => 21,  41 => 20,  20 => 1,);
    }
}
