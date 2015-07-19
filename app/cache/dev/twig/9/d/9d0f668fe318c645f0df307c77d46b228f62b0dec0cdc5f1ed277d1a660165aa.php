<?php

/* SuperjobsHomeBundle:Main:details.html.twig */
class __TwigTemplate_9d0f668fe318c645f0df307c77d46b228f62b0dec0cdc5f1ed277d1a660165aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuperjobsHomeBundle::layout.html.twig", "SuperjobsHomeBundle:Main:details.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SuperjobsHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "    <div>
    <h2>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "title", array()), "html", null, true);
        echo "
    </h2>
    </div>
    <div>
    <h3>Compétences : </h3>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "skills", array()), "html", null, true);
        echo "
    </div>
    
        <h2>Logo </h2>[";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
        echo "]
    <h3>Description : </h3>
    ";
        // line 16
        echo $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array());
        echo "
    
<br/>
        <br/><br/>
        <input type=\"button\" value=\"Postulez\"> Ou remplir CV et LM:<br/>
";
    }

    public function getTemplateName()
    {
        return "SuperjobsHomeBundle:Main:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  49 => 14,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
