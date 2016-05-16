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
        $__internal_bff51775c3a45f1cdf1d6634461c8692b8dbc930576eda1e79f9065585938edb = $this->env->getExtension("native_profiler");
        $__internal_bff51775c3a45f1cdf1d6634461c8692b8dbc930576eda1e79f9065585938edb->enter($__internal_bff51775c3a45f1cdf1d6634461c8692b8dbc930576eda1e79f9065585938edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Topic:topic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bff51775c3a45f1cdf1d6634461c8692b8dbc930576eda1e79f9065585938edb->leave($__internal_bff51775c3a45f1cdf1d6634461c8692b8dbc930576eda1e79f9065585938edb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da943160ab69f719c36371ec4968c49b2f48315ce3a29d66b924adf9474f972f = $this->env->getExtension("native_profiler");
        $__internal_da943160ab69f719c36371ec4968c49b2f48315ce3a29d66b924adf9474f972f->enter($__internal_da943160ab69f719c36371ec4968c49b2f48315ce3a29d66b924adf9474f972f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["reply"], "user", array()), "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 41
                    echo "                                ";
                    if (($context["role"] == "ROLE_ADMIN")) {
                        // line 42
                        echo "                                    <span class=\"label label-black\">ADMIN</span>
                                ";
                    } elseif ((                    // line 43
$context["role"] == "ROLE_FORMATEUR")) {
                        // line 44
                        echo "                                    <span class=\"label label-warning\">FORMATEUR</span>
                                ";
                    } elseif ((                    // line 45
$context["role"] == "ROLE_MODERATEUR")) {
                        // line 46
                        echo "                                    <span class=\"label label-danger\">MODERATEUR</span>
                                ";
                    } elseif ((                    // line 47
$context["role"] == "ROLE_RH")) {
                        // line 48
                        echo "                                    <span class=\"label label-success\">RH</span>
                                ";
                    } elseif ((                    // line 49
$context["role"] == "ROLE_GESTIONNAIRE")) {
                        // line 50
                        echo "                                    <span class=\"label
                                    label-primary\">GESTIONNAIRE</span>
                                ";
                    }
                    // line 53
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                        </div>

                    ";
            } else {
                // line 57
                echo "                        <div class=\"avatarForum\">
                            <span>Anonymous</span>
                            <img alt=\"Brand\" src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/users/default.png"), "html", null, true);
                // line 60
                echo "\">
                        </div>
                    ";
            }
            // line 63
            echo "                </th>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "content", array()), "html", null, true);
            echo "</td>
                <td><p style=\"font-size: 12px;\">";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reply"], "date", array()), "d-m-Y
                H:i:s"), "html", null, true);
            // line 67
            echo "</p></td>
                <td>
                    ";
            // line 69
            if (((($this->getAttribute($this->getAttribute($context["reply"], "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('security')->isGranted("ROLE_MODERATEUR"))) {
                // line 71
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replyedit", array("id" => $this->getAttribute($context["reply"], "id", array()))), "html", null, true);
                echo "\"
                       class=\"btn
                btn-default btn-sm\"><span class=\"glyphicon
                glyphicon-edit\" aria-hidden=\"true\"></span> Edit</a>
                    <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replyremove", array("id" => $this->getAttribute($context["reply"], "id", array()))), "html", null, true);
                // line 76
                echo "\" class=\"btn
                btn-danger btn-sm\"><span class=\"glyphicon
                glyphicon-trash\" aria-hidden=\"true\"></span></a>
                    ";
            }
            // line 80
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </tbody>
    </table>
    </div>
    <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topicreply", array("id" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id", array()))), "html", null, true);
        echo "\"
       class=\"btn btn-success\">Reply to the topic</a>
";
        
        $__internal_da943160ab69f719c36371ec4968c49b2f48315ce3a29d66b924adf9474f972f->leave($__internal_da943160ab69f719c36371ec4968c49b2f48315ce3a29d66b924adf9474f972f_prof);

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
        return array (  200 => 86,  195 => 83,  187 => 80,  181 => 76,  179 => 75,  171 => 71,  169 => 69,  165 => 67,  162 => 65,  158 => 64,  155 => 63,  150 => 60,  148 => 59,  144 => 57,  139 => 54,  133 => 53,  128 => 50,  126 => 49,  123 => 48,  121 => 47,  118 => 46,  116 => 45,  113 => 44,  111 => 43,  108 => 42,  105 => 41,  101 => 40,  98 => 39,  96 => 38,  93 => 37,  91 => 35,  89 => 34,  87 => 33,  84 => 32,  82 => 31,  78 => 29,  74 => 28,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*                             {% for role in reply.user.roles %}*/
/*                                 {% if role == "ROLE_ADMIN" %}*/
/*                                     <span class="label label-black">ADMIN</span>*/
/*                                 {% elseif role == "ROLE_FORMATEUR" %}*/
/*                                     <span class="label label-warning">FORMATEUR</span>*/
/*                                 {% elseif role == "ROLE_MODERATEUR" %}*/
/*                                     <span class="label label-danger">MODERATEUR</span>*/
/*                                 {% elseif role == "ROLE_RH" %}*/
/*                                     <span class="label label-success">RH</span>*/
/*                                 {% elseif role == "ROLE_GESTIONNAIRE" %}*/
/*                                     <span class="label*/
/*                                     label-primary">GESTIONNAIRE</span>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
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
/*                 <td><p style="font-size: 12px;">{{ reply.date|date("d-m-Y*/
/*                 H:i:s")*/
/*                         }}</p></td>*/
/*                 <td>*/
/*                     {% if reply.user.username == app.user.username or*/
/*                     is_granted('ROLE_ADMIN') or is_granted('ROLE_MODERATEUR')%}*/
/*                     <a href="{{ path('replyedit', {'id': reply.id}) }}"*/
/*                        class="btn*/
/*                 btn-default btn-sm"><span class="glyphicon*/
/*                 glyphicon-edit" aria-hidden="true"></span> Edit</a>*/
/*                     <a href="{{ path('replyremove', {'id': reply.id})*/
/*                     }}" class="btn*/
/*                 btn-danger btn-sm"><span class="glyphicon*/
/*                 glyphicon-trash" aria-hidden="true"></span></a>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*     <a href="{{ path('topicreply', {'id': topic.id}) }}"*/
/*        class="btn btn-success">Reply to the topic</a>*/
/* {% endblock %}*/
