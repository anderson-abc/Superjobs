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

<article>
\t
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 10
            echo "            <header>
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_job_details", array("tag" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", array()), "html", null, true);
            echo "</h2></a>
                <time>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdAt", array()), "d M Y"), "html", null, true);
            echo "</time>
            </header>
            <div>
                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "</a>
                    <p>
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "skills", array()), "html", null, true);
            echo "
                    </p>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
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
        return array (  82 => 21,  72 => 17,  65 => 15,  59 => 12,  53 => 11,  50 => 10,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
