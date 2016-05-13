<?php

/* ForumBundle:Forum:forum.html.twig */
class __TwigTemplate_1a076bdb3393f35e8f187c4ea580bc137cb8fbcb9f10f8a734df991e0293495b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Forum:forum.html.twig", 1);
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
        $__internal_ab10b52ebdbe4a65006a7bfc8ccd226f1808825d3f400b404b65ab5d04420857 = $this->env->getExtension("native_profiler");
        $__internal_ab10b52ebdbe4a65006a7bfc8ccd226f1808825d3f400b404b65ab5d04420857->enter($__internal_ab10b52ebdbe4a65006a7bfc8ccd226f1808825d3f400b404b65ab5d04420857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Forum:forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab10b52ebdbe4a65006a7bfc8ccd226f1808825d3f400b404b65ab5d04420857->leave($__internal_ab10b52ebdbe4a65006a7bfc8ccd226f1808825d3f400b404b65ab5d04420857_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_003a84a5a89e52de8958ae38a9d94586211a243672abf1ac5cf624bee6613054 = $this->env->getExtension("native_profiler");
        $__internal_003a84a5a89e52de8958ae38a9d94586211a243672abf1ac5cf624bee6613054->enter($__internal_003a84a5a89e52de8958ae38a9d94586211a243672abf1ac5cf624bee6613054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">FORUM</h2>
    <div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Forum</div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Categorie</th>
            <th>Topics</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 19
            echo "            <tr>
                <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</th>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listTopics", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 22
$context["categorie"], "name", array()), "html", null, true);
            // line 23
            echo "</a></td>
                <td></td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn btn-success\">View</a>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default\">Edit</a>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removecategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            // line 31
            echo "\" class=\"btn
                btn-danger\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_003a84a5a89e52de8958ae38a9d94586211a243672abf1ac5cf624bee6613054->leave($__internal_003a84a5a89e52de8958ae38a9d94586211a243672abf1ac5cf624bee6613054_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Forum:forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  89 => 31,  87 => 30,  81 => 27,  76 => 25,  72 => 23,  70 => 22,  67 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">FORUM</h2>*/
/*     <div class="panel panel-default">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Forum</div>*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Categorie</th>*/
/*             <th>Topics</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for categorie in categories %}*/
/*             <tr>*/
/*                 <th scope="row">{{ categorie.id }}</th>*/
/*                 <td><a href="{{ path('listTopics', {'id': categorie.id}) }}"> {{*/
/*                         categorie.name*/
/*                         }}</a></td>*/
/*                 <td></td>*/
/*                 <td><a href="{{ path('detailcategorie', {'id': categorie.id}) }}"*/
/*                        class="btn btn-success">View</a>*/
/*                     <a href="{{ path('editcategorie', {'id': categorie.id}) }}"*/
/*                        class="btn*/
/*                 btn-default">Edit</a>*/
/*                     <a href="{{ path('removecategorie', {'id': categorie.id})*/
/*                     }}" class="btn*/
/*                 btn-danger">Remove</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* {% endblock %}*/
