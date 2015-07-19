<?php

/* SuperjobsHomeBundle:Recruiter:add.html.twig */
class __TwigTemplate_df3e1b3dda6d71a5c3c9ed85023bb94c89665c8fd15611f1d5bb3bbc1857e346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuperjobsHomeBundle::layout.html.twig", "SuperjobsHomeBundle:Recruiter:add.html.twig", 1);
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
    <centre>
    <h2>
\tRemplissez ce truc
    </h2>
    </centre>

<form role=\"form\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_add");
        echo "\" method=\"post\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >

";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        Catégorie
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Categories", array()), 'widget');
        echo "
    </label>
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Categories", array()), 'errors');
        echo "
  </div>

  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
  </div>

  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label');
        echo "
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
  </div>
    
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills", array()), 'label');
        echo "
    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skills", array()), 'errors');
        echo "
  </div>
 
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'label');
        echo "
    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'errors');
        echo "
  </div>
    
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "
    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "
  </div>
  
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo", array()), 'label');
        echo "
    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo", array()), 'widget');
        echo "
    </label>
    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo", array()), 'errors');
        echo "
  </div>
  
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'label');
        echo "
    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'errors');
        echo "
  </div>

";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
   <br/>     

   
";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "captcha", array()), 'widget');
        echo "
   <br/><br/>
   
   
";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 


<input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\" />
    <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_intro");
        echo "\">Revenir</a>
    <br/>.
</form>

";
    }

    public function getTemplateName()
    {
        return "SuperjobsHomeBundle:Recruiter:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 91,  206 => 87,  199 => 83,  192 => 79,  188 => 78,  184 => 77,  178 => 74,  173 => 72,  169 => 71,  161 => 66,  156 => 64,  152 => 63,  144 => 58,  139 => 56,  135 => 55,  127 => 50,  122 => 48,  118 => 47,  110 => 42,  105 => 40,  101 => 39,  93 => 34,  88 => 32,  84 => 31,  76 => 26,  71 => 24,  67 => 23,  59 => 18,  54 => 16,  47 => 12,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }
}
