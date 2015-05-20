<?php

/* SuperjobsHomeBundle:Main:index.html.twig */
class __TwigTemplate_74bb5bb4638d05ed2f47af326d6a4ebbf9995b31fa15c5d48ea7637193b76003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuperjobsHomeBundle::layout.html.twig", "SuperjobsHomeBundle:Main:index.html.twig", 1);
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
        // line 8
        echo "<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class=\"intro-header\">
    <div class=\"container\">
        <div class=\"row\">
            <center>
";
        // line 16
        echo "        <div class=\"headline\">
            <div class=\"container\">
                <h2>Superjobs</h2>
                <span class=\"subheading\">Postez votre offre d'emploi facilement et gratuitement</span>
                <hr class=\"small\">  
            </div>
        </div>
    ";
        // line 28
        echo "            </center>
        </div>
    </div>
</header>

<center><br/>
    <form class=\"form-search\">
        <div class=\"input-append\">
          Chercher votre offre : <input type=\"text\" class=\"span6 search-query\">
";
        // line 38
        echo "          <button type=\"submit\" class=\"btn\">Search</button>
        </div>
    </form>
</center>       
";
        // line 43
        echo "<div class=\"count\">
    ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " Offres d'emploi
</div>
";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 48
            echo "<div class=\"row\">    
";
            // line 50
            echo "        <div class=\"col-xs-2\">
            <time class=\"calendar\">
                <em>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "Y"), "html", null, true);
            echo "</em>
                <strong>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "M"), "html", null, true);
            echo "</strong>
                <span>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d"), "html", null, true);
            echo "</span>
            </time>
        </div>    
        <div class=\"col-xs-10\">            
            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_job_details", array("tag" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
                <h4>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4>
            </a>
            <br/>
            Type : ";
            // line 62
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
        // line 68
        echo "<center>
<div class=\"pagination\">
    ";
        // line 70
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
        return array (  128 => 70,  124 => 68,  109 => 62,  103 => 59,  99 => 58,  92 => 54,  88 => 53,  84 => 52,  80 => 50,  77 => 48,  73 => 47,  68 => 44,  65 => 43,  59 => 38,  48 => 28,  39 => 16,  31 => 8,  28 => 2,  11 => 1,);
    }
}
