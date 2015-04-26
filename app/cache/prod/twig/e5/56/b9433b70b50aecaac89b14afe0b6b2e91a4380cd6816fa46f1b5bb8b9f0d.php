<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_e556b9433b70b50aecaac89b14afe0b6b2e91a4380cd6816fa46f1b5bb8b9f0d extends Twig_Template
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

<form class=\"form-signin\" action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"post\">
    <fieldset>
        <legend><center>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</center></legend>

        ";
        // line 8
        if (array_key_exists("invalid_username", $context)) {
            // line 9
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : null)), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 11
        echo "
        <label for=\"username\" class=\"sr-only\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\"  required=\"required\"
        class=\"form-control\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" autofocus />

        <br>
        <div>
            <button class=\"btn btn-lg btn-primary btn-block\">
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
            </button>
        </div>
    </fieldset>
</form> 
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  49 => 14,  44 => 12,  41 => 11,  35 => 9,  33 => 8,  28 => 6,  23 => 4,  19 => 2,);
    }
}
