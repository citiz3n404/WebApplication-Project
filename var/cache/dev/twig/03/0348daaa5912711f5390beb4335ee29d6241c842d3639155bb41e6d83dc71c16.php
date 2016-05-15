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
        $__internal_1247fad9c7ea3d1235829153dc2bd17cc1e6e04c42a4f35afe64ce6ba75dc30f = $this->env->getExtension("native_profiler");
        $__internal_1247fad9c7ea3d1235829153dc2bd17cc1e6e04c42a4f35afe64ce6ba75dc30f->enter($__internal_1247fad9c7ea3d1235829153dc2bd17cc1e6e04c42a4f35afe64ce6ba75dc30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Topic:topic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1247fad9c7ea3d1235829153dc2bd17cc1e6e04c42a4f35afe64ce6ba75dc30f->leave($__internal_1247fad9c7ea3d1235829153dc2bd17cc1e6e04c42a4f35afe64ce6ba75dc30f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7ea912a4346ec71dc8fc6d4b6840f78f5d105b0acc0cfb7af8131d9f2d30d01 = $this->env->getExtension("native_profiler");
        $__internal_d7ea912a4346ec71dc8fc6d4b6840f78f5d105b0acc0cfb7af8131d9f2d30d01->enter($__internal_d7ea912a4346ec71dc8fc6d4b6840f78f5d105b0acc0cfb7af8131d9f2d30d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <table class=\"table table-striped table-bordered\">
        <colgroup>
            <col style=\"width:5%\">
            <col style=\"width:65%\">
            <col style=\"width:15%\">
            <col style=\"width:15%\">
        </colgroup>
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "replies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 29
            echo "            <tr>
                <th scope=\"row\">
                    ";
            // line 31
            if ( !(null === $this->getAttribute($context["reply"], "user", array()))) {
                // line 32
                echo "                        <div class=\"avatarForum\">
                            <span><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["reply"], "user", array()), "id", array()))), "html", null, true);
                // line 34
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(                // line 35
$context["reply"], "user", array()), "username", array())), "html", null, true);
                // line 37
                echo "</a></span>
                            <img alt=\"Brand\" src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["reply"], "user", array()), "salarie", array()), "img", array()))), "html", null, true);
                // line 39
                echo "\">
                        </div>

                    ";
            } else {
                // line 43
                echo "                        <div class=\"avatarForum\">
                            <span>Anonymous</span>
                            <img alt=\"Brand\" src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/users/default.png"), "html", null, true);
                // line 46
                echo "\">
                        </div>
                    ";
            }
            // line 49
            echo "                </th>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reply"], "date", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replyedit", array("id" => $this->getAttribute($context["reply"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default btn-sm\"><span class=\"glyphicon
                glyphicon-edit\" aria-hidden=\"true\"></span> Edit</a>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replyremove", array("id" => $this->getAttribute($context["reply"], "id", array()))), "html", null, true);
            // line 57
            echo "\" class=\"btn
                btn-danger btn-sm\"><span class=\"glyphicon
                glyphicon-trash\" aria-hidden=\"true\"></span></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>
    </div>
    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topicreply", array("id" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id", array()))), "html", null, true);
        echo "\"
       class=\"btn btn-success\">Reply to the topic</a>
";
        
        $__internal_d7ea912a4346ec71dc8fc6d4b6840f78f5d105b0acc0cfb7af8131d9f2d30d01->leave($__internal_d7ea912a4346ec71dc8fc6d4b6840f78f5d105b0acc0cfb7af8131d9f2d30d01_prof);

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
        return array (  151 => 66,  146 => 63,  135 => 57,  133 => 56,  126 => 52,  122 => 51,  118 => 50,  115 => 49,  110 => 46,  108 => 45,  104 => 43,  98 => 39,  96 => 38,  93 => 37,  91 => 35,  89 => 34,  87 => 33,  84 => 32,  82 => 31,  78 => 29,  74 => 28,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*     <table class="table table-striped table-bordered">*/
/*         <colgroup>*/
/*             <col style="width:5%">*/
/*             <col style="width:65%">*/
/*             <col style="width:15%">*/
/*             <col style="width:15%">*/
/*         </colgroup>*/
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
/*                         <div class="avatarForum">*/
/*                             <span><a href="{{ path('profiluser', {'id': reply*/
/*                                     .user.id }) }}">{{*/
/*                                     reply.user*/
/*                                     .username|capitalize*/
/*                                 }}</a></span>*/
/*                             <img alt="Brand" src="{{ asset('img/users/' ~ reply.user.salarie.img )*/
/*                             }}">*/
/*                         </div>*/
/* */
/*                     {% else %}*/
/*                         <div class="avatarForum">*/
/*                             <span>Anonymous</span>*/
/*                             <img alt="Brand" src="{{ asset('img/users/default.png')*/
/*                             }}">*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </th>*/
/*                 <td>{{ reply.content }}</td>*/
/*                 <td>{{ reply.date|date("d-m-Y H:i:s")  }}</td>*/
/*                 <td><a href="{{ path('replyedit', {'id': reply.id}) }}"*/
/*                        class="btn*/
/*                 btn-default btn-sm"><span class="glyphicon*/
/*                 glyphicon-edit" aria-hidden="true"></span> Edit</a>*/
/*                     <a href="{{ path('replyremove', {'id': reply.id})*/
/*                     }}" class="btn*/
/*                 btn-danger btn-sm"><span class="glyphicon*/
/*                 glyphicon-trash" aria-hidden="true"></span></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*     <a href="{{ path('topicreply', {'id': topic.id}) }}"*/
/*        class="btn btn-success">Reply to the topic</a>*/
/* {% endblock %}*/
