<?php

/* SuperjobsUserBundle:Security:login.html.twig */
class __TwigTemplate_57f979f34222001d82093905e55543a111c71af7910d62b28ff7809bedd95910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SuperjobsUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "

";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    
      <div><p class=\"bg-warning\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
      </p></div>
    
";
        }
        // line 15
        echo "
<form class=\"form-signin\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <fieldset>
        ";
        // line 19
        echo "        <legend><center>Connexion</center></legend>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        
";
        // line 23
        echo "        <div style=\"margin-bottom: 25px\" class=\"input-group\">
            <span class=\"input-group-addon\"><i class=\"icon-user icon-white\"></i></span>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"
            class=\"form-control\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" autofocus />
        </div>
            
";
        // line 30
        echo "        <div style=\"margin-bottom: 25px\" class=\"input-group\">
            <span class=\"input-group-addon\"><i class=\"icon-envelope\"></i></span>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" 
            placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" required=\"required\" autofocus />
        </div>

        <div class=\"checkbox\">
          <label for=\"remember_me\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
          </label>
        </div>
        
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\">
            ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </button>
        <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Créer un compte</a></li>
            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forget password</a></li>
        </ul>
    </fieldset>
</form>


";
    }

    public function getTemplateName()
    {
        return "SuperjobsUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  106 => 47,  100 => 44,  92 => 39,  83 => 33,  78 => 30,  72 => 26,  68 => 25,  64 => 23,  59 => 20,  56 => 19,  51 => 16,  48 => 15,  41 => 11,  37 => 9,  35 => 8,  31 => 6,  28 => 5,  11 => 1,);
    }
}
