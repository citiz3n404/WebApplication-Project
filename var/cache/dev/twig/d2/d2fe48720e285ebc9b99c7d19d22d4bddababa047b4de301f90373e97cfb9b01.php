<?php

/* ForumBundle:Categorie:edit.html.twig */
class __TwigTemplate_d8641d1952760bd224325b07b3f4af9abb0be74337fb605ce152e0b99df307c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Categorie:edit.html.twig", 1);
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
        $__internal_eaeaa7eedd9fb17eca4a0dff8846600a0c0af314dcc32c026095a3a24b75af84 = $this->env->getExtension("native_profiler");
        $__internal_eaeaa7eedd9fb17eca4a0dff8846600a0c0af314dcc32c026095a3a24b75af84->enter($__internal_eaeaa7eedd9fb17eca4a0dff8846600a0c0af314dcc32c026095a3a24b75af84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Categorie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaeaa7eedd9fb17eca4a0dff8846600a0c0af314dcc32c026095a3a24b75af84->leave($__internal_eaeaa7eedd9fb17eca4a0dff8846600a0c0af314dcc32c026095a3a24b75af84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d7ce991837f3b3672e3f7f43edc97d1735730d1ca4cbece76a1d18b76cdf961 = $this->env->getExtension("native_profiler");
        $__internal_3d7ce991837f3b3672e3f7f43edc97d1735730d1ca4cbece76a1d18b76cdf961->enter($__internal_3d7ce991837f3b3672e3f7f43edc97d1735730d1ca4cbece76a1d18b76cdf961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\">Back to Forum</a>
    <h2 class=\"page-header\">Edit Categorie</h2>
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
        
        $__internal_3d7ce991837f3b3672e3f7f43edc97d1735730d1ca4cbece76a1d18b76cdf961->leave($__internal_3d7ce991837f3b3672e3f7f43edc97d1735730d1ca4cbece76a1d18b76cdf961_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Categorie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  50 => 7,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     <h2 class="page-header">Edit Categorie</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
