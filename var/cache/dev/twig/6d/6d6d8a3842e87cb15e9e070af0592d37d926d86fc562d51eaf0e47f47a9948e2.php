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
        $__internal_5b7d2eb1948feec2a5bcb8793f3ed066cfa188233ffbc1470fd392d7c32e904c = $this->env->getExtension("native_profiler");
        $__internal_5b7d2eb1948feec2a5bcb8793f3ed066cfa188233ffbc1470fd392d7c32e904c->enter($__internal_5b7d2eb1948feec2a5bcb8793f3ed066cfa188233ffbc1470fd392d7c32e904c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Forum:forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b7d2eb1948feec2a5bcb8793f3ed066cfa188233ffbc1470fd392d7c32e904c->leave($__internal_5b7d2eb1948feec2a5bcb8793f3ed066cfa188233ffbc1470fd392d7c32e904c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1232207a8fbdf48f48bc2d1609084642d984af2c4af637a1872314b6d0197c1f = $this->env->getExtension("native_profiler");
        $__internal_1232207a8fbdf48f48bc2d1609084642d984af2c4af637a1872314b6d0197c1f->enter($__internal_1232207a8fbdf48f48bc2d1609084642d984af2c4af637a1872314b6d0197c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">FORUM</h2>
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
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 15
            echo "            <tr>
                <th scope=\"row\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</th>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listTopics", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 18
$context["categorie"], "name", array()), "html", null, true);
            // line 19
            echo "</a></td>
                <td></td>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn btn-success\">View</a>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default\">Edit</a>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removecategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            // line 27
            echo "\" class=\"btn
                btn-danger\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
";
        
        $__internal_1232207a8fbdf48f48bc2d1609084642d984af2c4af637a1872314b6d0197c1f->leave($__internal_1232207a8fbdf48f48bc2d1609084642d984af2c4af637a1872314b6d0197c1f_prof);

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
        return array (  96 => 32,  86 => 27,  84 => 26,  78 => 23,  73 => 21,  69 => 19,  67 => 18,  64 => 17,  60 => 16,  57 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">FORUM</h2>*/
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
/* {% endblock %}*/
