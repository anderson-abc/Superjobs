<?php

/* SuperjobsHomeBundle:Main:index.html.twig */
class __TwigTemplate_74bb5bb4638d05ed2f47af326d6a4ebbf9995b31fa15c5d48ea7637193b76003 extends Twig_Template
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

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<center><h2>Welcome to SuperJobs!</h2>
    
    <form class=\"form-search\">
        <div class=\"input-append\">
          <input type=\"text\" class=\"span6 search-query\">
";
        // line 9
        echo "          <button type=\"submit\" class=\"btn\">Search</button>
        </div>
    </form>   
    
</center>       
";
        // line 15
        echo "<div class=\"count\">
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " Offres d'emploi
</div>
";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            echo "<div class=\"row\">    
";
            // line 22
            echo "        <div class=\"col-xs-2\">
            <time class=\"calendar\">
                <em>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "Y"), "html", null, true);
            echo "</em>
                <strong>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "M"), "html", null, true);
            echo "</strong>
                <span>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d"), "html", null, true);
            echo "</span>
            </time>
        </div>    
        <div class=\"col-xs-10\">            
            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_job_details", array("tag" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
                <h4>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4>
            </a>
            <br/>
            Type : ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "type", array()), "html", null, true);
            echo " | Poste à : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "location", array()), "html", null, true);
            echo " | Societé : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "company", array()), "html", null, true);
            echo "            
        </div>
</div>
<hr style=\"margin:0px;\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "<center>
<div class=\"pagination\">
    ";
        // line 42
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", array(), array("prev_label" => "Previous", "next_label" => "Next", "first_label" => "First", "last_label" => "Last"));
        echo "
</div>
</center>
";
    }

    public function getTemplateName()
    {
        return "SuperjobsHomeBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  112 => 40,  97 => 34,  91 => 31,  87 => 30,  80 => 26,  76 => 25,  72 => 24,  68 => 22,  65 => 20,  61 => 19,  56 => 16,  53 => 15,  46 => 9,  39 => 3,  36 => 2,  11 => 1,);
    }
}
