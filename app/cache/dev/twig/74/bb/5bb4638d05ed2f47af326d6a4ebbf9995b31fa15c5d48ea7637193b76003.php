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

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "
<center><h2>Welcome to SuperJobs!</h2></center>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
</p>


<article>
\t
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 14
            echo "\t\t<header>
\t\t\t<!-- <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_job_details", array("job" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", array()), "html", null, true);
            echo "</h2></a>-->
\t\t\t<a href=\"./jobs/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", array()), "html", null, true);
            echo "</h2></a>
\t\t\t<time>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdAt", array()), "d M Y"), "html", null, true);
            echo "</time>
\t\t</header>
\t\t<div>
\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "</a>
\t\t\t<p>
\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "skills", array()), "html", null, true);
            echo "
\t\t\t</p>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</article>

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
        return array (  92 => 26,  82 => 22,  75 => 20,  69 => 17,  63 => 16,  57 => 15,  54 => 14,  50 => 13,  39 => 4,  36 => 3,  11 => 1,);
    }
}
