<?php

/* ForumBundle:Reply:edit.html.twig */
class __TwigTemplate_e009a407d470bf2daf45462633efe38cd4723b15aa678d791f9dd1d95e9c0db2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Reply:edit.html.twig", 1);
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
        $__internal_0a634309bc62b6aa271b2deefaee62cf78f15b642119211e23a2add080ffbedf = $this->env->getExtension("native_profiler");
        $__internal_0a634309bc62b6aa271b2deefaee62cf78f15b642119211e23a2add080ffbedf->enter($__internal_0a634309bc62b6aa271b2deefaee62cf78f15b642119211e23a2add080ffbedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Reply:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a634309bc62b6aa271b2deefaee62cf78f15b642119211e23a2add080ffbedf->leave($__internal_0a634309bc62b6aa271b2deefaee62cf78f15b642119211e23a2add080ffbedf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_067f5a02810b64fadb3da358f986382880ded3a67d736db20d0ad5a3b5ed085e = $this->env->getExtension("native_profiler");
        $__internal_067f5a02810b64fadb3da358f986382880ded3a67d736db20d0ad5a3b5ed085e->enter($__internal_067f5a02810b64fadb3da358f986382880ded3a67d736db20d0ad5a3b5ed085e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <a class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\">Back to Forum</a>
    <h2 class=\"page-header\">Edit your reply</h2>
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
        
        $__internal_067f5a02810b64fadb3da358f986382880ded3a67d736db20d0ad5a3b5ed085e->leave($__internal_067f5a02810b64fadb3da358f986382880ded3a67d736db20d0ad5a3b5ed085e_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Reply:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  46 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     <h2 class="page-header">Edit your reply</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
