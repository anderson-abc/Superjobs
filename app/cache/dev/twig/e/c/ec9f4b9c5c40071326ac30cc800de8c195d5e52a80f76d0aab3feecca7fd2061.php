<?php

/* SuperjobsHomeBundle:Recruiter:intro.html.twig */
class __TwigTemplate_ec9f4b9c5c40071326ac30cc800de8c195d5e52a80f76d0aab3feecca7fd2061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuperjobsHomeBundle::layout.html.twig", "SuperjobsHomeBundle:Recruiter:intro.html.twig", 1);
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
        echo "<style type=\"text/css\">
    .timer {
        font-size: 48px;
        font-weight: 800;
        text-transform: uppercase;
        text-align:center;
        line-height:80px;
        color: #317EAC;
    }
  .example {
    position: relative;
    padding: 25px;
    margin: 25px 0;
    line-height: 1em;
    background-color: #eee;
  }
  .example h2 {
    margin-right: 100px;
  }

  .example p {
    position: absolute;
    right: 25px;
    top: 25px;
    font-size: 20px;
  }

  .red {
    color: #c00;
  }
</style>
    <header class=\"intro-header\">
    <div class=\"container\">
        <div class=\"row\">
            <center>
";
        // line 41
        echo "        <div class=\"headline\">
            <div class=\"container\">
                <h2>ESPACE RECRUTEURS</h2>
                <span class=\"subheading\">Chercher les ninjas de l'Informatique</span>
                <hr class=\"small\">  
            </div>
        </div>
    ";
        // line 53
        echo "            </center>
        </div>
    </div>
</header>
    <center>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
                <p><b class=\"timer\" id=\"earth\" data-to=\"268\" data-speed=\"2000\"></b><br/> PROFILES</p>
            </div>
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
                <p><b class=\"timer\" id=\"earth\" data-to=\"110\" data-speed=\"2000\"></b><br/> JOBS</p>
            </div>
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
                <p><b class=\"timer\" id=\"earth\" data-to=\"15\" data-speed=\"2000\"></b><br/> ENTREPRISES</p>
            </div>
            <div class=\"col-xs-12 col-sm-3 col-md-3\">
                <p><b class=\"timer\" id=\"earth\" data-to=\"121\" data-speed=\"2000\"></b><br/> CVs</p>
            </div>
        </div>
    </div>
    </center>
   
    <!-- Page Content -->
    <div class=\"container\">
        <hr class=\"featurette-divider\">
        <!-- First Featurette -->
        <div class=\"featurette\" id=\"about\">
            <img class=\"featurette-image img-circle img-responsive pull-right\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/offre-emploi.jpg"), "html", null, true);
        echo "\">
            <h2 class=\"featurette-heading\">
                <span class=\"text-muted\">
                    <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_add");
        echo "\">
                        Lancer une offre
                    </a>
                </span> Gratuitement !<br/>
            </h2>
                        <p class=\"lead\"><b>Bienvenue</b><br/>

                            Le site de Superjobs vous propose de déposer des offres de jobs, de stages, d’emploi et d’alternance. Une solution simple et rapide qui saura répondre à toutes vos problématiques de recrutement ! <br/>Publiez rapidement et gratuitement autant d’offres que vous voulez.</p>
        </div>

        <hr class=\"featurette-divider\">

        <!-- Second Featurette -->
        <div class=\"featurette\" id=\"services\">
            <img class=\"featurette-image img-circle img-responsive pull-left\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/talents.jpg"), "html", null, true);
        echo "\" width=\"50%\">
            
            <h2 class=\"featurette-heading\">Chercher des talents<br/>
                <span class=\"text-muted\">
";
        // line 103
        echo "                        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("superjobs_home_team_template");
        echo "\">                        
                        { CVthèque }
                    </a>                
                </span>
            </h2>
            <p class=\"lead\">Accédez en une seule recherche à des profils qualifiés issus des principales CVthèques, des réseaux sociaux, des profils publics disponibles sur Internet et de votre propre base de CVs.</p>
        </div>

        <hr class=\"featurette-divider\">

        <!-- Third Featurette -->
        <div class=\"featurette\" id=\"contact\">
            <img class=\"featurette-image img-circle img-responsive pull-right\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/test-technique.jpg"), "html", null, true);
        echo "\">
            <h2 class=\"featurette-heading\">
                <span class=\"text-muted\">
                    Tests techniques
                </span>Gratuitement !<br/>
            </h2>
            <p class=\"lead\">
Ce site regroupe plusieurs QCM dans le domaine de l'informatique. Ces QCM s'adressent à des étudiants ou des ingénieurs souhaitant s'entraîner avant de passer l'entretien d'embauche .
A la fin de chacun de ces tests, une notation et une correction vous seront proposées. Celles-ci vous permettront d'accroître vos connaissances et d'évaluer votre niveau.</p>
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
        return array (  153 => 115,  137 => 103,  130 => 98,  113 => 84,  107 => 81,  77 => 53,  68 => 41,  31 => 4,  28 => 3,  11 => 1,);
    }
}
