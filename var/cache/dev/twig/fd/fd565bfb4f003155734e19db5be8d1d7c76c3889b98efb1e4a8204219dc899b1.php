<?php

/* ForumBundle:Topic:listTopics.html.twig */
class __TwigTemplate_954e2bd90cea600f023d8dfd30482b051baefaaf980ccb0351cced53766fc8ec extends Twig_Template
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
        $__internal_ec8c5827fc95d356460dfa5c7fdcc764ef3d3f1bf37b4c4522c45815cae612cf = $this->env->getExtension("native_profiler");
        $__internal_ec8c5827fc95d356460dfa5c7fdcc764ef3d3f1bf37b4c4522c45815cae612cf->enter($__internal_ec8c5827fc95d356460dfa5c7fdcc764ef3d3f1bf37b4c4522c45815cae612cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Topic:listTopics.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec8c5827fc95d356460dfa5c7fdcc764ef3d3f1bf37b4c4522c45815cae612cf->leave($__internal_ec8c5827fc95d356460dfa5c7fdcc764ef3d3f1bf37b4c4522c45815cae612cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7f44362b76875ca6fe911dd14399e3fed6793eb329760eb7d4e0972147c15a9 = $this->env->getExtension("native_profiler");
        $__internal_b7f44362b76875ca6fe911dd14399e3fed6793eb329760eb7d4e0972147c15a9->enter($__internal_b7f44362b76875ca6fe911dd14399e3fed6793eb329760eb7d4e0972147c15a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <td>
            ";
            // line 45
            if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MODERATEUR")) || ($this->getAttribute($this->getAttribute(            // line 46
$context["topic"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())))) {
                // line 47
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edittopic", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
                echo "\"
                       class=\"btn
                btn-default btn-sm\">Edit</a>
                    <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removetopic", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
                // line 51
                echo "\" class=\"btn
                btn-danger btn-sm\">Remove</a>
                ";
            }
            // line 54
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_b7f44362b76875ca6fe911dd14399e3fed6793eb329760eb7d4e0972147c15a9->leave($__internal_b7f44362b76875ca6fe911dd14399e3fed6793eb329760eb7d4e0972147c15a9_prof);

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
        return array (  130 => 57,  122 => 54,  117 => 51,  115 => 50,  108 => 47,  106 => 46,  105 => 45,  101 => 43,  99 => 42,  98 => 41,  95 => 40,  93 => 39,  90 => 38,  81 => 31,  77 => 30,  52 => 8,  48 => 7,  45 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <td>*/
/*             {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATEUR')*/
/*             or topic.user.username== app.user.username %}*/
/*                 <a href="{{ path('edittopic', {'id': topic.id}) }}"*/
/*                        class="btn*/
/*                 btn-default btn-sm">Edit</a>*/
/*                     <a href="{{ path('removetopic', {'id': topic.id})*/
/*                     }}" class="btn*/
/*                 btn-danger btn-sm">Remove</a>*/
/*                 {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* {% endblock %}*/
