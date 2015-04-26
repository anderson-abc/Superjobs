<?php

/* SuperjobsHomeBundle:Recruiter:details.html.twig */
class __TwigTemplate_f8424e49acf89670d2ed6c991fec7cb3f4795a31dcf49d2e232ce65259f3dec3 extends Twig_Template
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
        return "SuperjobsHomeBundle:Recruiter:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  57 => 14,  51 => 11,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
