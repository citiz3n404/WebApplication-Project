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
        $__internal_3bbde95f347232b45e6de1ea55f07fab8e62dc549b1ecf39824e0909d0cdda75 = $this->env->getExtension("native_profiler");
        $__internal_3bbde95f347232b45e6de1ea55f07fab8e62dc549b1ecf39824e0909d0cdda75->enter($__internal_3bbde95f347232b45e6de1ea55f07fab8e62dc549b1ecf39824e0909d0cdda75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Reply:reply.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bbde95f347232b45e6de1ea55f07fab8e62dc549b1ecf39824e0909d0cdda75->leave($__internal_3bbde95f347232b45e6de1ea55f07fab8e62dc549b1ecf39824e0909d0cdda75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce77e7d5f6760e019126e092147f1dff644d6355e2053997e2f7b67286bba761 = $this->env->getExtension("native_profiler");
        $__internal_ce77e7d5f6760e019126e092147f1dff644d6355e2053997e2f7b67286bba761->enter($__internal_ce77e7d5f6760e019126e092147f1dff644d6355e2053997e2f7b67286bba761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ce77e7d5f6760e019126e092147f1dff644d6355e2053997e2f7b67286bba761->leave($__internal_ce77e7d5f6760e019126e092147f1dff644d6355e2053997e2f7b67286bba761_prof);

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
