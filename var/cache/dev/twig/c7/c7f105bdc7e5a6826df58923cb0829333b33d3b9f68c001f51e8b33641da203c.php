<?php

/* ForumBundle:Reply:reply.html.twig */
class __TwigTemplate_74efae1f04477d297008302ac713ef096155b338dfd8329b8e9f3115b6623990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Reply:reply.html.twig", 1);
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
        $__internal_27df94a8507d77d13a47497b95ccb89b2302935947b8a51017a7b9b31c40903a = $this->env->getExtension("native_profiler");
        $__internal_27df94a8507d77d13a47497b95ccb89b2302935947b8a51017a7b9b31c40903a->enter($__internal_27df94a8507d77d13a47497b95ccb89b2302935947b8a51017a7b9b31c40903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Reply:reply.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27df94a8507d77d13a47497b95ccb89b2302935947b8a51017a7b9b31c40903a->leave($__internal_27df94a8507d77d13a47497b95ccb89b2302935947b8a51017a7b9b31c40903a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13e3bb012397140482208fe5ca1386a2bc8e75a0c676d30179d955af48ea78b3 = $this->env->getExtension("native_profiler");
        $__internal_13e3bb012397140482208fe5ca1386a2bc8e75a0c676d30179d955af48ea78b3->enter($__internal_13e3bb012397140482208fe5ca1386a2bc8e75a0c676d30179d955af48ea78b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Reply</h2>
    <a class=\"btn btn-default\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\">Back to Forum</a>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_13e3bb012397140482208fe5ca1386a2bc8e75a0c676d30179d955af48ea78b3->leave($__internal_13e3bb012397140482208fe5ca1386a2bc8e75a0c676d30179d955af48ea78b3_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Reply:reply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Reply</h2>*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
