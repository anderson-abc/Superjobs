<?php

/* SuperjobsHomeBundle:Recruiter:intro.html.twig */
class __TwigTemplate_ec9f4b9c5c40071326ac30cc800de8c195d5e52a80f76d0aab3feecca7fd2061 extends Twig_Template
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
        echo "\t

\t<center><h2>
\t\t\tRecruter les meilleurs talents
\t</h2></center>
\t<p>
                <h2>Pourquoi lancer offre ici</h2>
\tNous proposons 3 services qui vous permettent d'atteindre le maximum de
\tcandidats à la recherche d'un emploi ou à l'écoute du marché
\t</p>

<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"
Section 1.10.32 du \"De Finibus Bonorum et Malorum\" de Ciceron (45 av. J.-C.)
<br><br>
\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"
</p>

<center>
<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_add");
        echo "\">Lancer une offre</a>

</center>";
    }

    public function getTemplateName()
    {
        return "SuperjobsHomeBundle:Recruiter:intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 23,  39 => 4,  36 => 3,  11 => 1,);
    }
}
