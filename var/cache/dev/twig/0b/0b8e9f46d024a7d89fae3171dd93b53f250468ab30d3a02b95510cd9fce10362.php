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
        $__internal_34c739bf5782b3ee83748a0fee2ad5b9d9a71b62185d5f86397c6806e1c1eda0 = $this->env->getExtension("native_profiler");
        $__internal_34c739bf5782b3ee83748a0fee2ad5b9d9a71b62185d5f86397c6806e1c1eda0->enter($__internal_34c739bf5782b3ee83748a0fee2ad5b9d9a71b62185d5f86397c6806e1c1eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Categorie:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c739bf5782b3ee83748a0fee2ad5b9d9a71b62185d5f86397c6806e1c1eda0->leave($__internal_34c739bf5782b3ee83748a0fee2ad5b9d9a71b62185d5f86397c6806e1c1eda0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eea560738bb270711c005d5fb32ec4dead8a08f59af1f8eac976a2d6064f1ba = $this->env->getExtension("native_profiler");
        $__internal_4eea560738bb270711c005d5fb32ec4dead8a08f59af1f8eac976a2d6064f1ba->enter($__internal_4eea560738bb270711c005d5fb32ec4dead8a08f59af1f8eac976a2d6064f1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <a class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\">Back to Forum</a>
    <h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "name", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Desc : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "description", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcategorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\"
               class=\"btn btn-default\">Edit</a>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removecategorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\"
               class=\"btn btn-danger\">Remove</a>
        </li>
    </ul>

";
        
        $__internal_4eea560738bb270711c005d5fb32ec4dead8a08f59af1f8eac976a2d6064f1ba->leave($__internal_4eea560738bb270711c005d5fb32ec4dead8a08f59af1f8eac976a2d6064f1ba_prof);

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
        return array (  64 => 13,  59 => 11,  54 => 9,  50 => 8,  45 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
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
