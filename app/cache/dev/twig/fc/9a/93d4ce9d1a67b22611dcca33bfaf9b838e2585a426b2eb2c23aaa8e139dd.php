<?php

/* SuperjobsHomeBundle:Recruiter:addEmail.txt.twig */
class __TwigTemplate_fc9a93d4ce9d1a67b22611dcca33bfaf9b838e2585a426b2eb2c23aaa8e139dd extends Twig_Template
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
        // line 3
        echo "A contact enquiry was made by ";
        echo $this->getAttribute((isset($context["add"]) ? $context["add"] : $this->getContext($context, "add")), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 5
        echo $this->getAttribute((isset($context["add"]) ? $context["add"] : $this->getContext($context, "add")), "email", array());
        echo "
Subject: ";
        // line 6
        echo $this->getAttribute((isset($context["add"]) ? $context["add"] : $this->getContext($context, "add")), "subject", array());
        echo "
Body:
";
        // line 8
        echo $this->getAttribute((isset($context["add"]) ? $context["add"] : $this->getContext($context, "add")), "body", array());
    }

    public function getTemplateName()
    {
        return "SuperjobsHomeBundle:Recruiter:addEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  31 => 6,  27 => 5,  19 => 3,);
    }
}
