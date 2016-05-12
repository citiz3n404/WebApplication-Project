<?php

/* ForumBundle:Categorie:create.html.twig */
class __TwigTemplate_734dc90a21283fda3311baee714599ff8b3c1202572d608fc0e7c62b0aabb081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Categorie:create.html.twig", 1);
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
        $__internal_c1f6039ed4f93086e3c59128beeb45281c0132a725b162a78bd3799620543424 = $this->env->getExtension("native_profiler");
        $__internal_c1f6039ed4f93086e3c59128beeb45281c0132a725b162a78bd3799620543424->enter($__internal_c1f6039ed4f93086e3c59128beeb45281c0132a725b162a78bd3799620543424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Categorie:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f6039ed4f93086e3c59128beeb45281c0132a725b162a78bd3799620543424->leave($__internal_c1f6039ed4f93086e3c59128beeb45281c0132a725b162a78bd3799620543424_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02d60e83933a5649efd8f01d64fa155a098f2693cbb7cc9c5cffd679b2c0cf73 = $this->env->getExtension("native_profiler");
        $__internal_02d60e83933a5649efd8f01d64fa155a098f2693cbb7cc9c5cffd679b2c0cf73->enter($__internal_02d60e83933a5649efd8f01d64fa155a098f2693cbb7cc9c5cffd679b2c0cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Add Categorie</h2>
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
        
        $__internal_02d60e83933a5649efd8f01d64fa155a098f2693cbb7cc9c5cffd679b2c0cf73->leave($__internal_02d60e83933a5649efd8f01d64fa155a098f2693cbb7cc9c5cffd679b2c0cf73_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Categorie:create.html.twig";
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
/*     <h2 class="page-header">Add Categorie</h2>*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
