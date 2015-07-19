<?php

/* SuperjobsHomeBundle:Applicant:intro.html.twig */
class __TwigTemplate_888afd20f44d1de92a4d074c69182ec7970434d6a8d70eeea0f3e4d7c753ad52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuperjobsHomeBundle::layout.html.twig", "SuperjobsHomeBundle:Applicant:intro.html.twig", 1);
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
    
    <!-- Page Content -->
    <div class=\"container\">

        <!-- Heading Row -->
        <div class=\"row\">
            <div class=\"col-md-8\">
                <img class=\"img-responsive img-rounded\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/candidat-avantages.jpg"), "html", null, true);
        echo "\" width=\"100%\">
";
        // line 13
        echo "            </div>
            <!-- /.col-md-8 -->
            <div class=\"col-md-4\">
                <h1>Meilleur façons de postuler</h1>
                <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                <a class=\"btn btn-primary btn-lg\" href=\"#\">INSCRIPTION</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"well text-center\">
                    This is a well that is a great spot for a business tagline or phone number for easy access!
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Heading 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class=\"btn btn-default\" href=\"#\">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class=\"col-md-4\">
                <h2>Heading 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class=\"btn btn-default\" href=\"#\">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class=\"col-md-4\">
                <h2>Heading 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class=\"btn btn-default\" href=\"#\">More Info</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    
    
";
    }

    public function getTemplateName()
    {
        return "SuperjobsHomeBundle:Applicant:intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }
}
