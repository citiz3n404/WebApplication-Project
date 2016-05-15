<?php

/* FichierBundle:Dossier:create.html.twig */
class __TwigTemplate_bb41a31b774b494fb78102324594c232f521eb2576771ce2d463f6c9c3264bb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FichierBundle:Dossier:create.html.twig", 1);
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
        $__internal_95427a2d2ab363929dbfa7809cfd6b5fe5d9e12b61fc5ebd4f91df3116d59693 = $this->env->getExtension("native_profiler");
        $__internal_95427a2d2ab363929dbfa7809cfd6b5fe5d9e12b61fc5ebd4f91df3116d59693->enter($__internal_95427a2d2ab363929dbfa7809cfd6b5fe5d9e12b61fc5ebd4f91df3116d59693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FichierBundle:Dossier:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95427a2d2ab363929dbfa7809cfd6b5fe5d9e12b61fc5ebd4f91df3116d59693->leave($__internal_95427a2d2ab363929dbfa7809cfd6b5fe5d9e12b61fc5ebd4f91df3116d59693_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d58e0d0be1f2c962b9a3836e9d04e1d5310a62f3aec0ad1d612be4900574c24 = $this->env->getExtension("native_profiler");
        $__internal_8d58e0d0be1f2c962b9a3836e9d04e1d5310a62f3aec0ad1d612be4900574c24->enter($__internal_8d58e0d0be1f2c962b9a3836e9d04e1d5310a62f3aec0ad1d612be4900574c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Nouveau dossier</h2>
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
        
        $__internal_8d58e0d0be1f2c962b9a3836e9d04e1d5310a62f3aec0ad1d612be4900574c24->leave($__internal_8d58e0d0be1f2c962b9a3836e9d04e1d5310a62f3aec0ad1d612be4900574c24_prof);

    }

    public function getTemplateName()
    {
        return "FichierBundle:Dossier:create.html.twig";
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
/*     <h2 class="page-header">Nouveau dossier</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
