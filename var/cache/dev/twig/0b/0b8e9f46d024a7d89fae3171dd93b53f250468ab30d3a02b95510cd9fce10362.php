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
        $__internal_54dbe87b4cf581dec57302e496163f643fad62b88a738393418d9ed403472a0d = $this->env->getExtension("native_profiler");
        $__internal_54dbe87b4cf581dec57302e496163f643fad62b88a738393418d9ed403472a0d->enter($__internal_54dbe87b4cf581dec57302e496163f643fad62b88a738393418d9ed403472a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Categorie:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54dbe87b4cf581dec57302e496163f643fad62b88a738393418d9ed403472a0d->leave($__internal_54dbe87b4cf581dec57302e496163f643fad62b88a738393418d9ed403472a0d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_868f3c2a5aea965199f05c978686165263fae7363a9df1a05a15ee63eea41677 = $this->env->getExtension("native_profiler");
        $__internal_868f3c2a5aea965199f05c978686165263fae7363a9df1a05a15ee63eea41677->enter($__internal_868f3c2a5aea965199f05c978686165263fae7363a9df1a05a15ee63eea41677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <li class=\"list-group-item\">
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcategorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\"
               class=\"btn btn-default\">Edit</a>
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removecategorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\"
               class=\"btn btn-danger\">Remove</a>
        </li>
    </ul>

";
        
        $__internal_868f3c2a5aea965199f05c978686165263fae7363a9df1a05a15ee63eea41677->leave($__internal_868f3c2a5aea965199f05c978686165263fae7363a9df1a05a15ee63eea41677_prof);

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
        return array (  64 => 11,  59 => 9,  54 => 7,  50 => 6,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     <h2 class="page-header">{{ categorie.name }}</h2>*/
/*     <ul class="list-group">*/
/*         <li class="list-group-item">Category: {{ categorie.name }}</li>*/
/*         <li class="list-group-item">Desc : {{ categorie.description }}</li>*/
/*         <li class="list-group-item">*/
/*             <a href="{{ path('editcategorie', {'id': categorie.id}) }}"*/
/*                class="btn btn-default">Edit</a>*/
/*             <a href="{{ path('removecategorie', {'id': categorie.id}) }}"*/
/*                class="btn btn-danger">Remove</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
