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
        $__internal_7ba3610881e30be04167140603194d9a983846b10169d1e9e4b6be1e8fab39bc = $this->env->getExtension("native_profiler");
        $__internal_7ba3610881e30be04167140603194d9a983846b10169d1e9e4b6be1e8fab39bc->enter($__internal_7ba3610881e30be04167140603194d9a983846b10169d1e9e4b6be1e8fab39bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Topic:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba3610881e30be04167140603194d9a983846b10169d1e9e4b6be1e8fab39bc->leave($__internal_7ba3610881e30be04167140603194d9a983846b10169d1e9e4b6be1e8fab39bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac9bd23e5e1f924fd0c9f9930066a5e7b0eb8aeb4b18a0eb266c9ad61f3f5ee4 = $this->env->getExtension("native_profiler");
        $__internal_ac9bd23e5e1f924fd0c9f9930066a5e7b0eb8aeb4b18a0eb266c9ad61f3f5ee4->enter($__internal_ac9bd23e5e1f924fd0c9f9930066a5e7b0eb8aeb4b18a0eb266c9ad61f3f5ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ac9bd23e5e1f924fd0c9f9930066a5e7b0eb8aeb4b18a0eb266c9ad61f3f5ee4->leave($__internal_ac9bd23e5e1f924fd0c9f9930066a5e7b0eb8aeb4b18a0eb266c9ad61f3f5ee4_prof);

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
