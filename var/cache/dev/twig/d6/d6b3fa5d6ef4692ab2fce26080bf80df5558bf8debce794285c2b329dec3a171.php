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
        $__internal_4ad2baa97c1b794f4f094b8da30b0ee7878fbf9a9712835a6eb3dfef7bf4824f = $this->env->getExtension("native_profiler");
        $__internal_4ad2baa97c1b794f4f094b8da30b0ee7878fbf9a9712835a6eb3dfef7bf4824f->enter($__internal_4ad2baa97c1b794f4f094b8da30b0ee7878fbf9a9712835a6eb3dfef7bf4824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Reply:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ad2baa97c1b794f4f094b8da30b0ee7878fbf9a9712835a6eb3dfef7bf4824f->leave($__internal_4ad2baa97c1b794f4f094b8da30b0ee7878fbf9a9712835a6eb3dfef7bf4824f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6479ffba41e23ffaf7bf2f8fec1737afac702ad5d7b19842f779b19cc0055ab2 = $this->env->getExtension("native_profiler");
        $__internal_6479ffba41e23ffaf7bf2f8fec1737afac702ad5d7b19842f779b19cc0055ab2->enter($__internal_6479ffba41e23ffaf7bf2f8fec1737afac702ad5d7b19842f779b19cc0055ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6479ffba41e23ffaf7bf2f8fec1737afac702ad5d7b19842f779b19cc0055ab2->leave($__internal_6479ffba41e23ffaf7bf2f8fec1737afac702ad5d7b19842f779b19cc0055ab2_prof);

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
