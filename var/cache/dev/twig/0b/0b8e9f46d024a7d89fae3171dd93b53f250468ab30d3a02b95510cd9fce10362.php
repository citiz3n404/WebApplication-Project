<?php

/* ForumBundle:Categorie:detail.html.twig */
class __TwigTemplate_34e9777b20534779283d0a58835e7150204e96a5acbea9a3a6206b7b07c7cb47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Categorie:detail.html.twig", 1);
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
        $__internal_ed287198a57d8f6237f5043780e6c7d1b310c34eca16020693382946f7100bde = $this->env->getExtension("native_profiler");
        $__internal_ed287198a57d8f6237f5043780e6c7d1b310c34eca16020693382946f7100bde->enter($__internal_ed287198a57d8f6237f5043780e6c7d1b310c34eca16020693382946f7100bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Categorie:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed287198a57d8f6237f5043780e6c7d1b310c34eca16020693382946f7100bde->leave($__internal_ed287198a57d8f6237f5043780e6c7d1b310c34eca16020693382946f7100bde_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc8bf7c447ae0bfcc79249726438b9182d2181b69323ad4bba30baa9581348c2 = $this->env->getExtension("native_profiler");
        $__internal_bc8bf7c447ae0bfcc79249726438b9182d2181b69323ad4bba30baa9581348c2->enter($__internal_bc8bf7c447ae0bfcc79249726438b9182d2181b69323ad4bba30baa9581348c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <a class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\">Back to Forum</a>
    <h2 class=\"page-header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "name", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Desc : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "description", array()), "html", null, true);
        echo "</li>
        <li>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcategorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\"
               class=\"btn
                btn-default\">Edit</a>
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removecategorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\"
               class=\"btn
                btn-danger\">Remove</a></li>
    </ul>

";
        
        $__internal_bc8bf7c447ae0bfcc79249726438b9182d2181b69323ad4bba30baa9581348c2->leave($__internal_bc8bf7c447ae0bfcc79249726438b9182d2181b69323ad4bba30baa9581348c2_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Categorie:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  59 => 9,  54 => 7,  50 => 6,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     <h2 class="page-header">{{ categorie.name }}</h2>*/
/*     <ul class="list-group">*/
/*         <li class="list-group-item">Category: {{ categorie.name }}</li>*/
/*         <li class="list-group-item">Desc : {{ categorie.description }}</li>*/
/*         <li>*/
/*             <a href="{{ path('editcategorie', {'id': categorie.id}) }}"*/
/*                class="btn*/
/*                 btn-default">Edit</a>*/
/*             <a href="{{ path('removecategorie', {'id': categorie.id}) }}"*/
/*                class="btn*/
/*                 btn-danger">Remove</a></li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
