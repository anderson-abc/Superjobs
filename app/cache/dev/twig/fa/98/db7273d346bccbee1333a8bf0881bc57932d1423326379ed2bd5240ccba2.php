<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_fa98db7273d346bccbee1333a8bf0881bc57932d1423326379ed2bd5240ccba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<div ng-app=\"sample\">
\t<form class=\"form-horizontal\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" 
\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" name=\"registerForm\" >
\t    <div class=\"form-group\" id=\"fos_user_registration_form\">
\t\t\t<center>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<h2>Création d'un compte</h2>
\t\t\t\t\t\t<p>Veuillez remplir les champs suivantes:</p>
\t\t\t\t</div>
\t\t\t</center>

\t    \t<div class=\"form-group\">
\t\t\t    <label class=\"col-md-3 control-label\">
\t\t\t    \t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t\t    </label>
            \t<div class=\"col-md-4\">
\t\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    \t</div>
\t\t        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t    \t</div>

\t\t\t<div class=\"form-group\">
\t\t\t    <label class=\"col-md-3 control-label\">
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
\t\t\t    </label>
            \t<div class=\"col-md-4\">
\t\t        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    \t</div>\t\t        
\t\t        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t        </div>

\t        <div class=\"form-group\">
\t\t\t    <label class=\"col-md-3 control-label\">
\t\t\t    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
\t\t\t    </label>
            \t<div class=\"col-md-4\">
\t\t        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    \t</div>\t\t        
\t\t        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
\t\t    </div>

\t\t    <div class=\"form-group\">
\t\t\t    <label class=\"col-md-3 control-label\">
\t\t\t        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
\t\t\t    </label>

            \t<div class=\"col-md-4\">
\t\t        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    \t</div>
\t\t        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
\t    \t</div>

\t        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t    </div>
\t     <div class=\"form-group\">
            <div class=\"col-md-offset-3 col-md-9\">
                <input type=\"submit\" class=\"btn btn-default\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </div>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 61,  117 => 56,  111 => 53,  106 => 51,  99 => 47,  91 => 42,  86 => 40,  80 => 37,  72 => 32,  67 => 30,  61 => 27,  53 => 22,  48 => 20,  42 => 17,  28 => 6,  24 => 5,  19 => 2,);
    }
}
