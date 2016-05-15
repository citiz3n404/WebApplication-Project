<?php

/* ForumBundle:Topic:listTopics.html.twig */
class __TwigTemplate_1e0fcdc7ebbbccc2c795c50ff8545041bbf1ea12dfd1d3510e2ea13c2a0e111a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Topic:listTopics.html.twig", 1);
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
        $__internal_b441126ab939f78a5e4e7015fdc93ecb46b4379cfb558412a78fcc65ef28b6ea = $this->env->getExtension("native_profiler");
        $__internal_b441126ab939f78a5e4e7015fdc93ecb46b4379cfb558412a78fcc65ef28b6ea->enter($__internal_b441126ab939f78a5e4e7015fdc93ecb46b4379cfb558412a78fcc65ef28b6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Topic:listTopics.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b441126ab939f78a5e4e7015fdc93ecb46b4379cfb558412a78fcc65ef28b6ea->leave($__internal_b441126ab939f78a5e4e7015fdc93ecb46b4379cfb558412a78fcc65ef28b6ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e6fea4211c9c2470da95f1e528136258556a310e5a860b30afd4d77180aa16a = $this->env->getExtension("native_profiler");
        $__internal_7e6fea4211c9c2470da95f1e528136258556a310e5a860b30afd4d77180aa16a->enter($__internal_7e6fea4211c9c2470da95f1e528136258556a310e5a860b30afd4d77180aa16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "name", array()), "html", null, true);
        echo "<small> (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "description", array()), "html", null, true);
        // line 6
        echo ")</small></h2>
    <a class=\"btn btn-default\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\">Back to Forum</a>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("createtopic", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\"
       class=\"btn btn-success\">Create a new topic</a>

    <div class=\"panel panel-default\" style=\"margin-top: 20px;\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Topics</div>
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
            <th>Topic</th>
            <th>Replies</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : $this->getContext($context, "topics")));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 31
            echo "            <tr>
                <th scope=\"row\">
                    <span class=\"fa-stack fa-md\">
                      <i class=\"fa fa-circle fa-stack-2x\"></i>
                      <i class=\"fa fa-comment-o fa-stack-1x fa-inverse\"></i>
                    </span>
                </th>
                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topicdisplay", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 39
$context["topic"], "subject", array()), "html", null, true);
            // line 40
            echo "</a></td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(            // line 42
$context["topic"], "replies", array())), "html", null, true);
            // line 43
            echo "</td>
                <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edittopic", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default btn-sm\">Edit</a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removetopic", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
            // line 48
            echo "\" class=\"btn
                btn-danger btn-sm\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_7e6fea4211c9c2470da95f1e528136258556a310e5a860b30afd4d77180aa16a->leave($__internal_7e6fea4211c9c2470da95f1e528136258556a310e5a860b30afd4d77180aa16a_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Topic:listTopics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 53,  112 => 48,  110 => 47,  104 => 44,  101 => 43,  99 => 42,  98 => 41,  95 => 40,  93 => 39,  90 => 38,  81 => 31,  77 => 30,  52 => 8,  48 => 7,  45 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">{{ categorie.name }}<small> ({{ categorie*/
/*             .description*/
/*             }})</small></h2>*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     <a href="{{ path('createtopic', {'id': categorie.id}) }}"*/
/*        class="btn btn-success">Create a new topic</a>*/
/* */
/*     <div class="panel panel-default" style="margin-top: 20px;">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Topics</div>*/
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
/*             <th>Topic</th>*/
/*             <th>Replies</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for topic in topics %}*/
/*             <tr>*/
/*                 <th scope="row">*/
/*                     <span class="fa-stack fa-md">*/
/*                       <i class="fa fa-circle fa-stack-2x"></i>*/
/*                       <i class="fa fa-comment-o fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 </th>*/
/*                 <td><a href="{{ path('topicdisplay', {'id': topic.id}) }}"> {{*/
/*                         topic.subject*/
/*                         }}</a></td>*/
/*                 <td>{{*/
/*                         topic.replies|length*/
/*                     }}</td>*/
/*                 <td><a href="{{ path('edittopic', {'id': topic.id}) }}"*/
/*                        class="btn*/
/*                 btn-default btn-sm">Edit</a>*/
/*                     <a href="{{ path('removetopic', {'id': topic.id})*/
/*                     }}" class="btn*/
/*                 btn-danger btn-sm">Remove</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* {% endblock %}*/
