<?php

/* SuperjobsHomeBundle:Applicant:Team.html.twig */
class __TwigTemplate_d464d72908e7a49720cb6c16feaf0046e8024ba74a6a54d44f35f29d6c6bc1ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuperjobsHomeBundle::layout.html.twig", "SuperjobsHomeBundle:Applicant:Team.html.twig", 1);
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/rotating-card.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
";
        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        <h1 class=\"title\">
            This is our awesome team
            <br>
            <small>Present your team in an interesting way</small>
        </h1>
        <div class=\"col-sm-10 col-sm-offset-1\">
         <div class=\"col-md-4 col-sm-6\">
             <div class=\"card-container\">
                <div class=\"card\">
                    <div class=\"front\">
                        <div class=\"cover\">
                            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/applicants/rotating_card_thumb2.png"), "html", null, true);
        echo "\" >                             
                        </div>
                        <div class=\"user\">
                            <img class=\"img-circle\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/applicants/hafedh.jpg"), "html", null, true);
        echo "\" > 
                        </div>
                        <div class=\"content\">
                            <div class=\"main\">
                                <h3 class=\"name\">Hafedh AMRI</h3>
                                <p class=\"profession\">CEO</p>
                                <h5><i class=\"fa fa-map-marker fa-fw text-muted\"></i> Paris, France</h5>
                                <h5><i class=\"fa fa-building-o fa-fw text-muted\"></i> Creative Tim Inc. </h5>
                                <h5><i class=\"fa fa-envelope-o fa-fw text-muted\"></i> john@creative-tim.com</h5>
                            </div>
                            <div class=\"footer\">
                                <div class=\"rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class=\"back\">
                        <div class=\"header\">
                            <h5 class=\"motto\">\"To be or not to be, this is my awesome motto!\"</h5>
                        </div> 
                        <div class=\"content\">
                            <div class=\"main\">
                                <h4 class=\"text-center\">Experince</h4>
                                <p>In the project since 2011</p>
                                <h4 class=\"text-center\">Areas of Expertise</h4>
                                <p>Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>                            
                                <center>
                                <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("superjobs_home_resume_template");
        echo "\" class=\"btn btn-primary\">
                                    Profil complet
                                </a>
                                </center>
                            </div>                            
                        </div>  
                        <div class=\"footer\">
                            <div class=\"social-links text-center\">
                                <a href=\"http://cretive-tim.com\" class=\"facebook\"><i class=\"fa fa-facebook fa-fw\"></i></a>
                                <a href=\"http://cretive-tim.com\" class=\"google\"><i class=\"fa fa-google-plus fa-fw\"></i></a>
                                <a href=\"http://cretive-tim.com\" class=\"twitter\"><i class=\"fa fa-twitter fa-fw\"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
<!--         <div class=\"col-sm-1\"></div> -->
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card-container\">
                <div class=\"card\">
                    <div class=\"front\">
                        <div class=\"cover\">
                            <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/applicants/rotating_card_thumb.png"), "html", null, true);
        echo "\" >                             
                        </div>
                        <div class=\"user\">
                            <img class=\"img-circle\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/applicants/rotating_card_profile2.png"), "html", null, true);
        echo "\" >                             
                        </div>
                        <div class=\"content\">
                            <div class=\"main\">
                                <h3 class=\"name\">Andrew Mike</h3>
                                <p class=\"profession\">Web Developer</p>
                                <h5><i class=\"fa fa-map-marker fa-fw text-muted\"></i> Bucharest, Romania</h5>
                                <h5><i class=\"fa fa-building-o fa-fw text-muted\"></i> Creative Tim Inc. </h5>
                                <h5><i class=\"fa fa-envelope-o fa-fw text-muted\"></i> mike@creative-tim.com</h5>
                            </div>
                            <div class=\"footer\">
                                <button class=\"btn btn-simple\" onclick=\"rotateCard(this)\">
                                    <i class=\"fa fa-mail-forward\"></i> Manual Flip
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class=\"back\">
                        <div class=\"header\">
                            <h5 class=\"motto\">\"To be or not to be, this is my awesome motto!\"</h5>
                        </div> 
                        <div class=\"content\">
                            <div class=\"main\">
                                <h4 class=\"text-center\">Experince</h4>
                                <p>Mike was working with our team since 2012.</p>
                                <h4 class=\"text-center\">Areas of Expertise</h4>
                                <p>Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>
                            </div>
                        </div>
                        <div class=\"footer\">
                            <button class=\"btn btn-simple\" rel=\"tooltip\" title=\"Flip Card\" onclick=\"rotateCard(this)\">
                                <i class=\"fa fa-reply\"></i> Back
                            </button>
                            <div class=\"social-links text-center\">
                                <a href=\"http://cretive-tim.com\" class=\"facebook\"><i class=\"fa fa-facebook fa-fw\"></i></a>
                                <a href=\"http://cretive-tim.com\" class=\"google\"><i class=\"fa fa-google-plus fa-fw\"></i></a>
                                <a href=\"http://cretive-tim.com\" class=\"twitter\"><i class=\"fa fa-twitter fa-fw\"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
<!--         <div class=\"col-sm-1\"></div> -->
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card-container\">
                <div class=\"card\">
                    <div class=\"front\">
                        <div class=\"cover\">
                            <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/applicants/rotating_card_thumb3.png"), "html", null, true);
        echo "\" >                             
                        </div>
                        <div class=\"user\">
                            <img class=\"img-circle\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/applicants/rotating_card_profile.png"), "html", null, true);
        echo "\" >                             
                        </div>
                        <div class=\"content\">
                            <div class=\"main\">
                                <h3 class=\"name\">Inna Corman</h3>
                                <p class=\"profession\">Product Manager</p>
                                <h5><i class=\"fa fa-map-marker fa-fw text-muted\"></i> Paris, France</h5>
                                <h5><i class=\"fa fa-building-o fa-fw text-muted\"></i> Creative Tim Inc. </h5>
                                <h5><i class=\"fa fa-envelope-o fa-fw text-muted\"></i> inna@creative-tim.com</h5>
                            </div>
                            <div class=\"footer\">
                                <div class=\"rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class=\"back\">
                        <div class=\"header\">
                            <h5 class=\"motto\">\"To be or not to be, this is my awesome motto!\"</h5>
                        </div> 
                        <div class=\"content\">
                            <div class=\"main\">
                                <h4 class=\"text-center\">Experince</h4>
                                <p>Inna was working with our team since 2012.</p>
                                <h4 class=\"text-center\">Areas of Expertise</h4>
                                <p>Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>
                            </div>
                        </div>
                        <div class=\"footer\">
                            <div class=\"social-links text-center\">
                                <a href=\"http://cretive-tim.com\" class=\"facebook\"><i class=\"fa fa-facebook fa-fw\"></i></a>
                                <a href=\"http://cretive-tim.com\" class=\"google\"><i class=\"fa fa-google-plus fa-fw\"></i></a>
                                <a href=\"http://cretive-tim.com\" class=\"twitter\"><i class=\"fa fa-twitter fa-fw\"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col-sm-3 -->
        </div> <!-- end col-sm-10 --> 
    </div> <!-- end row -->
    <div class=\"space-200\"></div>    
</div>



";
        // line 183
        echo "\t
<script type=\"text/javascript\">
    \$().ready(function(){
        \$('[rel=\"tooltip\"]').tooltip();
        
    });
    
    function rotateCard(btn){
        var \$card = \$(btn).closest('.card-container');
        console.log(\$card);
        if(\$card.hasClass('hover')){
            \$card.removeClass('hover');
        } else {
            \$card.addClass('hover');
        }
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "SuperjobsHomeBundle:Applicant:Team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 183,  183 => 132,  177 => 129,  125 => 80,  119 => 77,  93 => 54,  58 => 22,  52 => 19,  37 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
