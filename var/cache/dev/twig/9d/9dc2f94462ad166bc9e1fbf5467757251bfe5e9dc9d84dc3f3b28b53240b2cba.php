<?php

/* FormationBundle:Default:edit.html.twig */
class __TwigTemplate_e577e54ea65ec4d53cd86ca4f20c11e002630a3809dc195f9ca4bb34907ede85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FormationBundle:Default:edit.html.twig", 1);
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
        $__internal_2f699f0990ef056ac2d8f923e2d0eb0dac1a8d8d674bca99c1455546c078e475 = $this->env->getExtension("native_profiler");
        $__internal_2f699f0990ef056ac2d8f923e2d0eb0dac1a8d8d674bca99c1455546c078e475->enter($__internal_2f699f0990ef056ac2d8f923e2d0eb0dac1a8d8d674bca99c1455546c078e475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f699f0990ef056ac2d8f923e2d0eb0dac1a8d8d674bca99c1455546c078e475->leave($__internal_2f699f0990ef056ac2d8f923e2d0eb0dac1a8d8d674bca99c1455546c078e475_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60e491798bb96f423aa5f3c742920f70d4fd363c6fec4f40bb0ff2615d9f5c59 = $this->env->getExtension("native_profiler");
        $__internal_60e491798bb96f423aa5f3c742920f70d4fd363c6fec4f40bb0ff2615d9f5c59->enter($__internal_60e491798bb96f423aa5f3c742920f70d4fd363c6fec4f40bb0ff2615d9f5c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Edit</h2>
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
        
        $__internal_60e491798bb96f423aa5f3c742920f70d4fd363c6fec4f40bb0ff2615d9f5c59->leave($__internal_60e491798bb96f423aa5f3c742920f70d4fd363c6fec4f40bb0ff2615d9f5c59_prof);

    }

    public function getTemplateName()
    {
        return "FormationBundle:Default:edit.html.twig";
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
/*     <h2 class="page-header">Edit</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
