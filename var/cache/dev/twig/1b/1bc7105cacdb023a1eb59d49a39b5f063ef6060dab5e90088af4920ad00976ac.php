<?php

/* FormationBundle:Default:edit.html.twig */
class __TwigTemplate_22c873554b313570d472898936f2b89124cbac21a19a6417aa9466bdbb3b9531 extends Twig_Template
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
        $__internal_e36777d2f3a89a88eda1612caad27fa5453a97872e61fea11a656e2b96969edf = $this->env->getExtension("native_profiler");
        $__internal_e36777d2f3a89a88eda1612caad27fa5453a97872e61fea11a656e2b96969edf->enter($__internal_e36777d2f3a89a88eda1612caad27fa5453a97872e61fea11a656e2b96969edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e36777d2f3a89a88eda1612caad27fa5453a97872e61fea11a656e2b96969edf->leave($__internal_e36777d2f3a89a88eda1612caad27fa5453a97872e61fea11a656e2b96969edf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_359eb8fb60f0a2ae57d432ae8fe88f1db248f38da543e75a9f1a12f0829e5c46 = $this->env->getExtension("native_profiler");
        $__internal_359eb8fb60f0a2ae57d432ae8fe88f1db248f38da543e75a9f1a12f0829e5c46->enter($__internal_359eb8fb60f0a2ae57d432ae8fe88f1db248f38da543e75a9f1a12f0829e5c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_359eb8fb60f0a2ae57d432ae8fe88f1db248f38da543e75a9f1a12f0829e5c46->leave($__internal_359eb8fb60f0a2ae57d432ae8fe88f1db248f38da543e75a9f1a12f0829e5c46_prof);

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
