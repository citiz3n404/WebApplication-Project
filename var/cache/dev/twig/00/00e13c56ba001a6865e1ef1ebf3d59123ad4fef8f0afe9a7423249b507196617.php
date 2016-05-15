<?php

/* FichierBundle:Fichiers:upload.html.twig */
class __TwigTemplate_ca0ae89e8556dc905dbbfb452cdbfc885293dc197dfc36bc9ab6326a63800e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FichierBundle:Fichiers:upload.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5be92b5d968383be3a1b808392a09f5d3a8af458ae3fb6bb87ced7cfd7f54e6 = $this->env->getExtension("native_profiler");
        $__internal_e5be92b5d968383be3a1b808392a09f5d3a8af458ae3fb6bb87ced7cfd7f54e6->enter($__internal_e5be92b5d968383be3a1b808392a09f5d3a8af458ae3fb6bb87ced7cfd7f54e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FichierBundle:Fichiers:upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5be92b5d968383be3a1b808392a09f5d3a8af458ae3fb6bb87ced7cfd7f54e6->leave($__internal_e5be92b5d968383be3a1b808392a09f5d3a8af458ae3fb6bb87ced7cfd7f54e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ecff4cc8da0d59421877ae9525f037b2ebe291138a2d2217e4e255de0cc2ab2 = $this->env->getExtension("native_profiler");
        $__internal_9ecff4cc8da0d59421877ae9525f037b2ebe291138a2d2217e4e255de0cc2ab2->enter($__internal_9ecff4cc8da0d59421877ae9525f037b2ebe291138a2d2217e4e255de0cc2ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Upload you file</h2>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9ecff4cc8da0d59421877ae9525f037b2ebe291138a2d2217e4e255de0cc2ab2->leave($__internal_9ecff4cc8da0d59421877ae9525f037b2ebe291138a2d2217e4e255de0cc2ab2_prof);

    }

    public function getTemplateName()
    {
        return "FichierBundle:Fichiers:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Upload you file</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
