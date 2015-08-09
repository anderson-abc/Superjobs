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
        // line 3
        echo "
<header class=\"intro-header\">
    <div class=\"container\">
            <center>
        <div class=\"headline\">
            <div class=\"container\">
                <div class=\"Heading\">
                <h2>Superjobs</h2>
                <span class=\"subheading\">Publier votre offre d'emploi facilement et gratuitement</span>
                <hr class=\"small\">  
                </div>
            </div>
        </div>
            </center>
    </div>
</header>

<center><br/>
    <form class=\"form-search\">
        <div class=\"input-append\">
          Chercher votre offre : <input type=\"text\" class=\"span6 search-query\">
";
        // line 25
        echo "          <button type=\"submit\" class=\"btn\">Search</button>
        </div>
    </form>
</center>       
";
        // line 30
        echo "<div class=\"count\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " Offres d'emploi
</div>
<div class=\"row\">  
    <div class=\"col-xs-12 col-md-8\">
";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 36
            echo "    <div class=\"items\">
    <div class=\"row\">    
        <div class=\"col-xs-2\">
            <time class=\"calendar\">
                <em>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "Y"), "html", null, true);
            echo "</em>
                <strong>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "M"), "html", null, true);
            echo "</strong>
                <span>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d"), "html", null, true);
            echo "</span>
            </time>
        </div>    
        <div class=\"col-xs-10\">            
            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_job_details", array("tag" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
                <h4>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4>
            </a>
            <br/>
            Type : ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "type", array()), "html", null, true);
            echo " | Poste à : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "location", array()), "html", null, true);
            echo " | Societé : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "company", array()), "html", null, true);
            echo "            
        </div>
    </div>
    </div>
<hr style=\"margin:0px;\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </div>
    <div class=\"col-xs-6 col-md-4\">
        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/publicité.jpg"), "html", null, true);
        echo "\" width=\"100%\">
    </div>
</div>
<center>
<div class=\"pagination\">
    ";
        // line 63
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "", array(), array("prev_label" => "Previous", "next_label" => "Next", "first_label" => "First", "last_label" => "Last"));
        echo "
</div>
</center>

<style>
.items:hover {
    background-color: #E5E9ED;
}
</style>
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
        return array (  133 => 63,  125 => 58,  121 => 56,  105 => 50,  99 => 47,  95 => 46,  88 => 42,  84 => 41,  80 => 40,  74 => 36,  70 => 35,  63 => 31,  60 => 30,  54 => 25,  31 => 3,  28 => 2,  11 => 1,);
    }
}
