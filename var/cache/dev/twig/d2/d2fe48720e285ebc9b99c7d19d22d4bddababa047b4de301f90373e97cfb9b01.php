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
        $__internal_e5fe9a13c4cf0307483aca2772355bb446f051beab4351ba6b4ee62a94da90d7 = $this->env->getExtension("native_profiler");
        $__internal_e5fe9a13c4cf0307483aca2772355bb446f051beab4351ba6b4ee62a94da90d7->enter($__internal_e5fe9a13c4cf0307483aca2772355bb446f051beab4351ba6b4ee62a94da90d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Categorie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5fe9a13c4cf0307483aca2772355bb446f051beab4351ba6b4ee62a94da90d7->leave($__internal_e5fe9a13c4cf0307483aca2772355bb446f051beab4351ba6b4ee62a94da90d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6efeb7f80d5b96e421e1221ce49c30d4df3df1ca173c925a3e8f35ad3353d1f = $this->env->getExtension("native_profiler");
        $__internal_e6efeb7f80d5b96e421e1221ce49c30d4df3df1ca173c925a3e8f35ad3353d1f->enter($__internal_e6efeb7f80d5b96e421e1221ce49c30d4df3df1ca173c925a3e8f35ad3353d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6efeb7f80d5b96e421e1221ce49c30d4df3df1ca173c925a3e8f35ad3353d1f->leave($__internal_e6efeb7f80d5b96e421e1221ce49c30d4df3df1ca173c925a3e8f35ad3353d1f_prof);

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
