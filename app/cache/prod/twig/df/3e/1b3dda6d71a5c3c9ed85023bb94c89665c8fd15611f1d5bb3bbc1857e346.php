<?php

/* SuperjobsHomeBundle:Recruiter:add.html.twig */
class __TwigTemplate_df3e1b3dda6d71a5c3c9ed85023bb94c89665c8fd15611f1d5bb3bbc1857e346 extends Twig_Template
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
        echo "    <centre>
    <h2>
\tRemplissez ce truc
    </h2>
    </centre>
<script>
function callback_tinymce_init(editor){
    editor.settings.entity_encoding = 'raw';
}
</script>

<form role=\"form\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("superjobs_home_recruiter_add");
        echo "\" method=\"post\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " >
    ";
        // line 17
        echo "    ";
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit(array("use_callback_tinymce_init" => true, "theme" => array("simple" => array("menubar" => false))));
        // line 19
        echo "

";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        Catégorie
";
        // line 26
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idCategory", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idCategory", array()), 'errors');
        echo "
  </div>

  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'label');
        echo "
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'errors');
        echo "
  </div>

  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'label');
        echo "
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'errors');
        echo "
  </div>
    
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "skills", array()), 'label');
        echo "
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "skills", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "skills", array()), 'errors');
        echo "
  </div>
 
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company", array()), 'label');
        echo "
    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company", array()), 'errors');
        echo "
  </div>
    
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'label');
        echo "
    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "url", array()), 'errors');
        echo "
  </div>
  
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "logo", array()), 'label');
        echo "
    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "logo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "logo", array()), 'errors');
        echo "
  </div>
  
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">
        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location", array()), 'label');
        echo "
    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </label>
    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "location", array()), 'errors');
        echo "
  </div>

";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'label');
        echo "
";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'errors');
        echo "
";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget');
        echo "
   <br/>     

";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo " 


<input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\" />
    <a href=\"";
        // line 96
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
        return array (  224 => 96,  217 => 92,  211 => 89,  207 => 88,  203 => 87,  197 => 84,  192 => 82,  188 => 81,  180 => 76,  175 => 74,  171 => 73,  163 => 68,  158 => 66,  154 => 65,  146 => 60,  141 => 58,  137 => 57,  129 => 52,  124 => 50,  120 => 49,  112 => 44,  107 => 42,  103 => 41,  95 => 36,  90 => 34,  86 => 33,  78 => 28,  72 => 26,  65 => 21,  61 => 19,  58 => 17,  52 => 15,  39 => 4,  36 => 3,  11 => 1,);
    }
}
