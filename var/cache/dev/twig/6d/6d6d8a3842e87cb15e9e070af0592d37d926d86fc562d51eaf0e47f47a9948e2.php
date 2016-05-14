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
        $__internal_64367b5e40c587f3e3cedc5a001712935629eff551248428dcc6dcd6e1e1cdb8 = $this->env->getExtension("native_profiler");
        $__internal_64367b5e40c587f3e3cedc5a001712935629eff551248428dcc6dcd6e1e1cdb8->enter($__internal_64367b5e40c587f3e3cedc5a001712935629eff551248428dcc6dcd6e1e1cdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Forum:forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64367b5e40c587f3e3cedc5a001712935629eff551248428dcc6dcd6e1e1cdb8->leave($__internal_64367b5e40c587f3e3cedc5a001712935629eff551248428dcc6dcd6e1e1cdb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17f3ccdb1a92cc589f96ba08f0b7af8e48e63628d647b6bd047f6a3c36725ada = $this->env->getExtension("native_profiler");
        $__internal_17f3ccdb1a92cc589f96ba08f0b7af8e48e63628d647b6bd047f6a3c36725ada->enter($__internal_17f3ccdb1a92cc589f96ba08f0b7af8e48e63628d647b6bd047f6a3c36725ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th scope=\"row\"><div class=\"bigIconForum\"><span
                                class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"></span></div></th>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listTopics", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 23
$context["categorie"], "name", array()), "html", null, true);
            // line 24
            echo "</a>
                    <p style=\"font-size: 12px;\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "description", array()), "html", null, true);
            echo "</p>
                </td>
                <td></td>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn btn-success btn-sm\">View</a>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default btn-sm\">Edit</a>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removecategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            // line 34
            echo "\" class=\"btn
                btn-danger btn-sm\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_17f3ccdb1a92cc589f96ba08f0b7af8e48e63628d647b6bd047f6a3c36725ada->leave($__internal_17f3ccdb1a92cc589f96ba08f0b7af8e48e63628d647b6bd047f6a3c36725ada_prof);

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
        return array (  102 => 39,  92 => 34,  90 => 33,  84 => 30,  79 => 28,  73 => 25,  70 => 24,  68 => 23,  65 => 22,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <th scope="row"><div class="bigIconForum"><span*/
/*                                 class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></div></th>*/
/*                 <td><a href="{{ path('listTopics', {'id': categorie.id}) }}"> {{*/
/*                         categorie.name*/
/*                         }}</a>*/
/*                     <p style="font-size: 12px;">{{ categorie.description }}</p>*/
/*                 </td>*/
/*                 <td></td>*/
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
