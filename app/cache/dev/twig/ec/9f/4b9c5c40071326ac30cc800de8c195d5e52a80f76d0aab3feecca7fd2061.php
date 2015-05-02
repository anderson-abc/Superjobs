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
        echo "
    <!-- Full Width Image Header -->
    <header class=\"header-image\">
        <div class=\"headline\">
            <div class=\"container\">
                <h2>Chercher les ninjas</h2>
                <h2>de l'Informatique</h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class=\"container\">

        <hr class=\"featurette-divider\">

        <!-- First Featurette -->
        <div class=\"featurette\" id=\"about\">
            <img class=\"featurette-image img-circle img-responsive pull-right\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/offre-emploi.jpg"), "html", null, true);
        echo "\">
            <h2 class=\"featurette-heading\">
                <span class=\"text-muted\">
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_add");
        echo "\">
                        Lancer une offre
                    </a>
                </span> Gratuitement !<br/>
            </h2>
            <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class=\"featurette-divider\">

        <!-- Second Featurette -->
        <div class=\"featurette\" id=\"services\">
            <img class=\"featurette-image img-circle img-responsive pull-left\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/talents.jpg"), "html", null, true);
        echo "\" width=\"50%\">
            
            <h2 class=\"featurette-heading\">Chercher des talents<br/>
                <span class=\"text-muted\">
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_add");
        echo "\">
                        Consulter CVthéque
                    </a>                
                </span>
            </h2>
            <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class=\"featurette-divider\">

        <!-- Third Featurette -->
        <div class=\"featurette\" id=\"contact\">
            <img class=\"featurette-image img-circle img-responsive pull-right\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/test-technique.jpg"), "html", null, true);
        echo "\">
            <h2 class=\"featurette-heading\">
                <span class=\"text-muted\">
                    Tests techniques
                </span>Gratuitement !<br/>
            </h2>
            <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class=\"featurette-divider\">

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Irmasoft 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->



";
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
        return array (  102 => 53,  87 => 41,  80 => 37,  65 => 25,  59 => 22,  39 => 4,  36 => 3,  11 => 1,);
    }
}
