<?php

/* SuperjobsHomeBundle:Recruiter:add.html.twig */
class __TwigTemplate_df3e1b3dda6d71a5c3c9ed85023bb94c89665c8fd15611f1d5bb3bbc1857e346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SuperjobsHomeBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        echo "\tFormulaire ici

\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_intro");
        echo "\">go back to intro</a>

\t<form role=\"form\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_add");
        echo "\" method=\"post\"  
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
";
        // line 18
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "SuperjobsHomeBundle:Recruiter:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  52 => 9,  48 => 8,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
