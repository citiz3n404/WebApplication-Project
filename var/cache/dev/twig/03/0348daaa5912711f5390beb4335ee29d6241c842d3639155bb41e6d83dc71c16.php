<?php

/* ForumBundle:Topic:topic.html.twig */
class __TwigTemplate_55d8cd40012868d628e8289bcfe31409f6b9c0dd186b3751fe2677297da9c2dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Topic:topic.html.twig", 1);
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
        $__internal_79e95d9913e1c8e503ce1a472a3f8760920850f96e8f59f078f355fdda973986 = $this->env->getExtension("native_profiler");
        $__internal_79e95d9913e1c8e503ce1a472a3f8760920850f96e8f59f078f355fdda973986->enter($__internal_79e95d9913e1c8e503ce1a472a3f8760920850f96e8f59f078f355fdda973986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Topic:topic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e95d9913e1c8e503ce1a472a3f8760920850f96e8f59f078f355fdda973986->leave($__internal_79e95d9913e1c8e503ce1a472a3f8760920850f96e8f59f078f355fdda973986_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f19d5aad49760b36a9a379394da95560ff52fd4c927e0a4f86eabb6d3233173 = $this->env->getExtension("native_profiler");
        $__internal_8f19d5aad49760b36a9a379394da95560ff52fd4c927e0a4f86eabb6d3233173->enter($__internal_8f19d5aad49760b36a9a379394da95560ff52fd4c927e0a4f86eabb6d3233173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "subject", array()), "html", null, true);
        echo "</h2>
    <a class=\"btn btn-default\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\">Back to Forum</a>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topicreply", array("id" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id", array()))), "html", null, true);
        echo "\"
       class=\"btn btn-success\">Reply</a>

    <div class=\"panel panel-default\"  style=\"margin-top: 20px;\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Replies</div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Author</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "replies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 23
            echo "            <tr>
                <th scope=\"row\">
                    ";
            // line 25
            if ( !(null === $this->getAttribute($context["reply"], "user", array()))) {
                // line 26
                echo "                        ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["reply"], "user", array()), "username", array())), "html", null, true);
                echo "
                    ";
            } else {
                // line 28
                echo "                        Anonymous
                    ";
            }
            // line 30
            echo "                </th>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reply"], "date", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replyedit", array("id" => $this->getAttribute($context["reply"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default\">Edit</a>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replyremove", array("id" => $this->getAttribute($context["reply"], "id", array()))), "html", null, true);
            // line 37
            echo "\" class=\"btn
                btn-danger\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
    </div>
    <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topicreply", array("id" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id", array()))), "html", null, true);
        echo "\"
       class=\"btn btn-success\">Reply to the topic</a>
";
        
        $__internal_8f19d5aad49760b36a9a379394da95560ff52fd4c927e0a4f86eabb6d3233173->leave($__internal_8f19d5aad49760b36a9a379394da95560ff52fd4c927e0a4f86eabb6d3233173_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Topic:topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  117 => 42,  107 => 37,  105 => 36,  99 => 33,  95 => 32,  91 => 31,  88 => 30,  84 => 28,  78 => 26,  76 => 25,  72 => 23,  68 => 22,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">{{ topic.subject }}</h2>*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     <a href="{{ path('topicreply', {'id': topic.id}) }}"*/
/*        class="btn btn-success">Reply</a>*/
/* */
/*     <div class="panel panel-default"  style="margin-top: 20px;">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Replies</div>*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Author</th>*/
/*             <th>Message</th>*/
/*             <th>Date</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for reply in topic.replies %}*/
/*             <tr>*/
/*                 <th scope="row">*/
/*                     {% if reply.user is not null %}*/
/*                         {{ reply.user.username|capitalize }}*/
/*                     {% else %}*/
/*                         Anonymous*/
/*                     {% endif %}*/
/*                 </th>*/
/*                 <td>{{ reply.content }}</td>*/
/*                 <td>{{ reply.date|date("d-m-Y H:i:s")  }}</td>*/
/*                 <td><a href="{{ path('replyedit', {'id': reply.id}) }}"*/
/*                        class="btn*/
/*                 btn-default">Edit</a>*/
/*                     <a href="{{ path('replyremove', {'id': reply.id})*/
/*                     }}" class="btn*/
/*                 btn-danger">Remove</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*     <a href="{{ path('topicreply', {'id': topic.id}) }}"*/
/*        class="btn btn-success">Reply to the topic</a>*/
/* {% endblock %}*/
