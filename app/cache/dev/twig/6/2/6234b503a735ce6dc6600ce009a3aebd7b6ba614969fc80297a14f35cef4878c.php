<?php

/* SuperjobsHomeBundle:Applicant:Profile.html.twig */
class __TwigTemplate_6234b503a735ce6dc6600ce009a3aebd7b6ba614969fc80297a14f35cef4878c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuperjobsHomeBundle::layout.html.twig", "SuperjobsHomeBundle:Applicant:Profile.html.twig", 1);
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
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/css/resume-template.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<div class=\"container\">
<div class=\"row info\" style=\"text-align:center;\">
    <div class=\"col-xs-12 alert alert-info\">
        Nous pouvons cherchez les profils qui vous convient à votre place.
        <a class=\"alert-link\" href=\"http://www.irmasoft.com\">Irmasoft</a>
         posséde une équipe informatique complet.
    </div>
</div>

<div class=\"resume\">
    <header class=\"page-header\">
    <h1 class=\"page-title\">Resume of Hafedh AMRI</h1>
    <small> <i class=\"fa fa-clock-o\"></i> Last Updated on: <time>Sunday, October 05, 2014</time></small>
  </header>
<div class=\"row\">
  <div class=\"col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading resume-heading\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"col-xs-12 col-sm-4\">
              <figure>
                <img class=\"img-circle img-responsive\" alt=\"\" 
                     src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/superjobshome/img/applicants/hafedh.jpg"), "html", null, true);
        echo "\" >                
              </figure>
              
              <div class=\"row\">
                <div class=\"col-xs-12 social-btns\">
                  
                    <div class=\"col-xs-3 col-md-1 col-lg-1 social-btn-holder\">
                      <a href=\"#\" class=\"btn btn-social btn-block btn-google\">
                        <i class=\"fa fa-google\"></i> </a>
                    </div>
                  
                    <div class=\"col-xs-3 col-md-1 col-lg-1 social-btn-holder\">
                      <a href=\"#\" class=\"btn btn-social btn-block btn-facebook\">
                        <i class=\"fa fa-facebook\"></i> </a>
                    </div>
                  
                    <div class=\"col-xs-3 col-md-1 col-lg-1 social-btn-holder\">
                      <a href=\"#\" class=\"btn btn-social btn-block btn-twitter\">
                        <i class=\"fa fa-twitter\"></i> </a>
                    </div>
                  
                    <div class=\"col-xs-3 col-md-1 col-lg-1 social-btn-holder\">
                      <a href=\"#\" class=\"btn btn-social btn-block btn-linkedin\">
                        <i class=\"fa fa-linkedin\"></i> </a>
                    </div>
                  
                    <div class=\"col-xs-3 col-md-1 col-lg-1 social-btn-holder\">
                      <a href=\"#\" class=\"btn btn-social btn-block btn-github\">
                        <i class=\"fa fa-github\"></i> </a>
                    </div>
                  
                    <div class=\"col-xs-3 col-md-1 col-lg-1 social-btn-holder\">
                      <a href=\"#\" class=\"btn btn-social btn-block btn-stackoverflow\">
                        <i class=\"fa fa-stack-overflow\"></i> </a>
                    </div>
                  
                </div>
              </div>
              
            </div>

            <div class=\"col-xs-12 col-sm-8\">
              <ul class=\"list-group\">
                <li class=\"list-group-item\">Hafedh AMRI</li>
                <li class=\"list-group-item\">Software Engineer</li>
                <li class=\"list-group-item\">Altimate Group. </li>
                <li class=\"list-group-item\"><i class=\"fa fa-phone\"></i> 06.51.34.32.15 </li>
                <li class=\"list-group-item\"><i class=\"fa fa-envelope\"></i> hafedh@irmasoft.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"bs-callout bs-callout-danger\">
        <h4>Summary</h4>
        <p>
         Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
         te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
        </p>
        <p>
            Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud nusquam an vis. 
            Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id eos.

        </p>
      </div>
      <div class=\"bs-callout bs-callout-danger\">
        <h4>Research Interests</h4>
        <p>
          Software Engineering, Machine Learning, Image Processing,
          Computer Vision, Artificial Neural Networks, Data Science,
          Evolutionary Algorithms.
        </p>
      </div>

      <div class=\"bs-callout bs-callout-danger\">
        <h4>Prior Experiences</h4>
        <ul class=\"list-group\">
          <a class=\"list-group-item inactive-link\" href=\"#\">
            <h4 class=\"list-group-item-heading\">
              Software Engineer at Twitter
            </h4>
            <p class=\"list-group-item-text\">
              Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
         te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
            </p>
          </a>
          <a class=\"list-group-item inactive-link\" href=\"#\">
            <h4 class=\"list-group-item-heading\">Software Engineer at LinkedIn</h4>
            <p class=\"list-group-item-text\">
              Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                </p><ul>
                  <li>
                 Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                  </li>
                  <li>
                 Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                  </li>
                </ul>
            <p></p>
          </a>
        </ul>
      </div>
      <div class=\"bs-callout bs-callout-danger\">
        <h4>Key Expertise</h4>
        <ul class=\"list-group\">
          <li class=\"list-group-item\"> Lorem ipsum dolor sit amet, ea vel prima adhuc </li>
          <li class=\"list-group-item\"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
          <li class=\"list-group-item\"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
          <li class=\"list-group-item\"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
          <li class=\"list-group-item\">Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
          <li class=\"list-group-item\"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>



        </ul>
      </div>
      <div class=\"bs-callout bs-callout-danger\">
        <h4>Language and Platform Skills</h4>
        <ul class=\"list-group\">
          <a class=\"list-group-item inactive-link\" href=\"#\">
            

            <div class=\"progress\">
              <div data-placement=\"top\" style=\"width: 80%;\" 
              aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"80\" role=\"progressbar\" class=\"progress-bar progress-bar-success\">
                <span class=\"sr-only\">80%</span>
                <span class=\"progress-type\">Java/ JavaEE/ Spring Framework </span>
              </div>
            </div>
            <div class=\"progress\">
              <div data-placement=\"top\" style=\"width: 70%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"1\" role=\"progressbar\" class=\"progress-bar progress-bar-success\">
                <span class=\"sr-only\">70%</span>
                <span class=\"progress-type\">PHP/ Lamp Stack</span>
              </div>
            </div>
            <div class=\"progress\">
              <div data-placement=\"top\" style=\"width: 70%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"1\" role=\"progressbar\" class=\"progress-bar progress-bar-success\">
                <span class=\"sr-only\">70%</span>
                <span class=\"progress-type\">JavaScript/ NodeJS/ MEAN stack </span>
              </div>
            </div>
            <div class=\"progress\">
              <div data-placement=\"top\" style=\"width: 65%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"1\" role=\"progressbar\" class=\"progress-bar progress-bar-warning\">
                <span class=\"sr-only\">65%</span>
                <span class=\"progress-type\">Python/ Numpy/ Scipy</span>
              </div>
            </div>
            <div class=\"progress\">
              <div data-placement=\"top\" style=\"width: 60%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"60\" role=\"progressbar\" class=\"progress-bar progress-bar-warning\">
                <span class=\"sr-only\">60%</span>
                <span class=\"progress-type\">C</span>
              </div>
            </div>
            <div class=\"progress\">
              <div data-placement=\"top\" style=\"width: 50%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"50\" role=\"progressbar\" class=\"progress-bar progress-bar-warning\">
                <span class=\"sr-only\">50%</span>
                <span class=\"progress-type\">C++</span>
              </div>
            </div>
            <div class=\"progress\">
              <div data-placement=\"top\" style=\"width: 10%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"50\" role=\"progressbar\" class=\"progress-bar progress-bar-danger\">
                <span class=\"sr-only\">10%</span>
                <span class=\"progress-type\">Go</span>
              </div>
            </div>

            <div class=\"progress-meter\">
              <div style=\"width: 25%;\" class=\"meter meter-left\"><span class=\"meter-text\">I suck</span></div>
              <div style=\"width: 25%;\" class=\"meter meter-left\"><span class=\"meter-text\">I know little</span></div>
              <div style=\"width: 30%;\" class=\"meter meter-right\"><span class=\"meter-text\">I'm a guru</span></div>
              <div style=\"width: 20%;\" class=\"meter meter-right\"><span class=\"meter-text\">I''m good</span></div>
            </div>

          </a>

        </ul>
      </div>
      <div class=\"bs-callout bs-callout-danger\">
        <h4>Education</h4>
        <table class=\"table table-striped table-responsive \">
          <thead>
            <tr><th>Degree</th>
            <th>Graduation Year</th>
            <th>CGPA</th>
          </tr></thead>
          <tbody>
            <tr>
              <td>Masters in Computer Science and Engineering</td>
              <td>2014</td>
              <td> 3.50 </td>
            </tr>
            <tr>
              <td>BSc. in Computer Science and Engineering</td>
              <td>2011</td>
              <td> 3.25 </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "SuperjobsHomeBundle:Applicant:Profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 28,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}