<?php

/* ForumBundle:Topic:create.html.twig */
class __TwigTemplate_87054d5a9ab581cc5d879a39557221ac99ce4b885be9b286d669f46db8b5f6f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Topic:create.html.twig", 1);
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
        $__internal_ffe2e335ae03b4d821502e1e015f846b599f46be649e02cb046d3f7f51a20f7c = $this->env->getExtension("native_profiler");
        $__internal_ffe2e335ae03b4d821502e1e015f846b599f46be649e02cb046d3f7f51a20f7c->enter($__internal_ffe2e335ae03b4d821502e1e015f846b599f46be649e02cb046d3f7f51a20f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Topic:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffe2e335ae03b4d821502e1e015f846b599f46be649e02cb046d3f7f51a20f7c->leave($__internal_ffe2e335ae03b4d821502e1e015f846b599f46be649e02cb046d3f7f51a20f7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f98bbc30a56de5ac4d1ee1105c0acd4dfce8eaf9999543a7bcebf9112bc53a40 = $this->env->getExtension("native_profiler");
        $__internal_f98bbc30a56de5ac4d1ee1105c0acd4dfce8eaf9999543a7bcebf9112bc53a40->enter($__internal_f98bbc30a56de5ac4d1ee1105c0acd4dfce8eaf9999543a7bcebf9112bc53a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Create new Topic</h2>
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
        
        $__internal_f98bbc30a56de5ac4d1ee1105c0acd4dfce8eaf9999543a7bcebf9112bc53a40->leave($__internal_f98bbc30a56de5ac4d1ee1105c0acd4dfce8eaf9999543a7bcebf9112bc53a40_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Topic:create.html.twig";
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
/*     <h2 class="page-header">Create new Topic</h2>*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
