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
        $__internal_463163e64d2a381481258bb24b276963153cf46b347e66dec73f820b74c28499 = $this->env->getExtension("native_profiler");
        $__internal_463163e64d2a381481258bb24b276963153cf46b347e66dec73f820b74c28499->enter($__internal_463163e64d2a381481258bb24b276963153cf46b347e66dec73f820b74c28499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Forum:forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_463163e64d2a381481258bb24b276963153cf46b347e66dec73f820b74c28499->leave($__internal_463163e64d2a381481258bb24b276963153cf46b347e66dec73f820b74c28499_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a281505dfbfb7379f0c6ca3110ebdab7a443fb112ba738cf91d4f32fe421c7d = $this->env->getExtension("native_profiler");
        $__internal_4a281505dfbfb7379f0c6ca3110ebdab7a443fb112ba738cf91d4f32fe421c7d->enter($__internal_4a281505dfbfb7379f0c6ca3110ebdab7a443fb112ba738cf91d4f32fe421c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">FORUM</h2>
    <div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Forum</div>
    <table class=\"table table-striped table-bordered\">
        <colgroup>
            <col style=\"width:5%\">
            <col style=\"width:50%\">
            <col style=\"width:20%\">
            <col style=\"width:20%\">
        </colgroup>
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 25
            echo "            <tr>
                <th scope=\"row\"><div
                            class=\"bigIconForum\"><span
                                class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"></span></div></th>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listTopics", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 30
$context["categorie"], "name", array()), "html", null, true);
            // line 31
            echo "</a>
                    <p style=\"font-size: 12px;\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "description", array()), "html", null, true);
            echo "</p>
                </td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["categorie"], "topics", array())), "html", null, true);
            echo "</td>

                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn btn-success btn-sm\">View</a>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default btn-sm\">Edit</a>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removecategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            // line 42
            echo "\" class=\"btn
                btn-danger btn-sm\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_4a281505dfbfb7379f0c6ca3110ebdab7a443fb112ba738cf91d4f32fe421c7d->leave($__internal_4a281505dfbfb7379f0c6ca3110ebdab7a443fb112ba738cf91d4f32fe421c7d_prof);

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
        return array (  113 => 47,  103 => 42,  101 => 41,  95 => 38,  90 => 36,  85 => 34,  80 => 32,  77 => 31,  75 => 30,  72 => 29,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">FORUM</h2>*/
/*     <div class="panel panel-default">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Forum</div>*/
/*     <table class="table table-striped table-bordered">*/
/*         <colgroup>*/
/*             <col style="width:5%">*/
/*             <col style="width:50%">*/
/*             <col style="width:20%">*/
/*             <col style="width:20%">*/
/*         </colgroup>*/
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
/*                 <th scope="row"><div*/
/*                             class="bigIconForum"><span*/
/*                                 class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></div></th>*/
/*                 <td><a href="{{ path('listTopics', {'id': categorie.id}) }}"> {{*/
/*                         categorie.name*/
/*                         }}</a>*/
/*                     <p style="font-size: 12px;">{{ categorie.description }}</p>*/
/*                 </td>*/
/*                 <td>{{ categorie.topics|length }}</td>*/
/* */
/*                 <td><a href="{{ path('detailcategorie', {'id': categorie.id}) }}"*/
/*                        class="btn btn-success btn-sm">View</a>*/
/*                     <a href="{{ path('editcategorie', {'id': categorie.id}) }}"*/
/*                        class="btn*/
/*                 btn-default btn-sm">Edit</a>*/
/*                     <a href="{{ path('removecategorie', {'id': categorie.id})*/
/*                     }}" class="btn*/
/*                 btn-danger btn-sm">Remove</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* {% endblock %}*/
