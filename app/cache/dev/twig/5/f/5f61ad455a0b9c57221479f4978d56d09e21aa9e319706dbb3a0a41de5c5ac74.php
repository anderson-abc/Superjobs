<?php

/* SuperjobsUserBundle:Registration/Recruiter:recruiter.form.html.twig */
class __TwigTemplate_5f61ad455a0b9c57221479f4978d56d09e21aa9e319706dbb3a0a41de5c5ac74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SuperjobsUserBundle:Registration/Recruiter:recruiter.form.html.twig", 1);
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

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    
hello [recruiter] registration form to be here

";
    }

    public function getTemplateName()
    {
        return "SuperjobsUserBundle:Registration/Recruiter:recruiter.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
